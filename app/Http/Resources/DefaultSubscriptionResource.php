<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\DefaultSubscription */
class DefaultSubscriptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'name' => $this->name,
            'domain' => $this->domain,
            'icon_slug' => $this->icon_slug,
            'color' => $this->color,
            'manage_url' => $this->manage_url,
            'group' => $this->group ? [
                'key' => $this->group->key,
                'name' => [
                    'en' => $this->group->name_en,
                    'pt' => $this->group->name_pt,
                    'es' => $this->group->name_es,
                ],
                'icon' => $this->group->icon,
                'color' => $this->group->color,
            ] : null,
        ];
    }
}
