<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $iconsBySlug = [
            'prime-video' => 'asset:prime-video',
            'disney-plus' => 'asset:disney-plus',
            'hulu' => 'asset:hulu',
            'peacock' => 'asset:peacock',
            'amazon-music' => 'asset:amazon-music',
            'xbox-game-pass' => 'asset:xbox-game-pass',
            'nintendo-switch-online' => 'asset:nintendo-switch-online',
            'google-one' => 'asset:google-one',
            'microsoft-365' => 'asset:microsoft-365',
            'canva' => 'asset:canva',
            'adobe-creative-cloud' => 'asset:adobe-creative-cloud',
            'chatgpt-plus' => 'asset:chatgpt-plus',
            'slack' => 'asset:slack',
            'linkedin-premium' => 'asset:linkedin-premium',
            '1password' => 'n1password',
            'calm' => 'asset:calm',
            'myfitnesspal' => 'asset:myfitnesspal',
            'bumble' => 'asset:bumble',
            'hinge' => 'asset:hinge',
            'grindr' => 'asset:grindr',
            'masterclass' => 'asset:masterclass',
            'babbel' => 'asset:babbel',
            'kindle-unlimited' => 'asset:kindle-unlimited',
        ];

        foreach ($iconsBySlug as $slug => $iconSlug) {
            DB::table('default_subscriptions')
                ->where('slug', $slug)
                ->update(['icon_slug' => $iconSlug]);
        }

        $missingIcons = DB::table('default_subscriptions')
            ->where(function ($query): void {
                $query->whereNull('icon_slug')->orWhere('icon_slug', '');
            })
            ->pluck('slug');

        if ($missingIcons->isNotEmpty()) {
            throw new RuntimeException(
                'Default subscriptions without brand icons: '.$missingIcons->join(', ')
            );
        }

        Schema::table('default_subscriptions', function (Blueprint $table): void {
            $table->string('icon_slug')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('default_subscriptions', function (Blueprint $table): void {
            $table->string('icon_slug')->nullable()->change();
        });
    }
};
