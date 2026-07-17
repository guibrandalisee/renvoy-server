<?php

namespace Tests\Feature;

use App\Models\DefaultSubscription;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DefaultSubscriptionApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed(DatabaseSeeder::class);
    }

    public function test_it_returns_seeded_subscriptions_in_the_public_resource_format(): void
    {
        $this->getJson('/api/v1/default-subscriptions')
            ->assertOk()
            ->assertHeader('Cache-Control', 'max-age=3600, public')
            ->assertJsonStructure([
                'data' => [[
                    'slug', 'name', 'domain', 'icon_slug', 'color', 'manage_url',
                    'group' => ['key', 'name' => ['en', 'pt', 'es'], 'icon', 'color'],
                ]],
            ])
            ->assertJsonFragment([
                'slug' => 'netflix',
                'name' => 'Netflix',
                'domain' => 'netflix.com',
                'icon_slug' => 'netflix',
                'color' => '#E50914',
            ]);
    }

    public function test_search_filters_by_name_or_slug_case_insensitively(): void
    {
        $response = $this->getJson('/api/v1/default-subscriptions?search=NET')
            ->assertOk();

        $response->assertJsonFragment(['slug' => 'netflix'])
            ->assertJsonMissing(['slug' => 'spotify']);
    }

    public function test_inactive_subscriptions_are_not_returned(): void
    {
        DefaultSubscription::query()->where('slug', 'netflix')->update(['is_active' => false]);

        $this->getJson('/api/v1/default-subscriptions')
            ->assertOk()
            ->assertJsonMissing(['slug' => 'netflix']);
    }

    public function test_every_seeded_subscription_has_an_icon(): void
    {
        $subscriptions = DefaultSubscription::query()->get(['slug', 'icon_slug']);

        $this->assertGreaterThanOrEqual(100, $subscriptions->count());
        foreach ($subscriptions as $subscription) {
            $this->assertNotNull($subscription->icon_slug, "Missing icon for [{$subscription->slug}].");
            $this->assertNotSame('', trim($subscription->icon_slug), "Empty icon for [{$subscription->slug}].");
            $this->assertStringNotContainsString('app:', $subscription->icon_slug);
            $this->assertNotSame('asset:unknown', $subscription->icon_slug);
        }
    }

    public function test_it_includes_the_expanded_subscription_catalog(): void
    {
        $this->getJson('/api/v1/default-subscriptions')
            ->assertOk()
            ->assertJsonFragment(['slug' => 'globoplay', 'icon_slug' => 'asset:globoplay'])
            ->assertJsonFragment(['slug' => 'google-workspace', 'icon_slug' => 'google'])
            ->assertJsonFragment(['slug' => 'perplexity-pro', 'icon_slug' => 'perplexity'])
            ->assertJsonFragment(['slug' => 'bitwarden-premium', 'icon_slug' => 'bitwarden'])
            ->assertJsonFragment(['slug' => 'apple-news-plus', 'icon_slug' => 'applenews']);
    }

    public function test_the_route_is_public(): void
    {
        $this->getJson('/api/v1/default-subscriptions')->assertOk();
    }
}
