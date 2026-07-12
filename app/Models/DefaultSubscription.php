<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DefaultSubscription extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'domain', 'icon_slug', 'color', 'manage_url', 'default_group_id', 'is_active', 'sort'];

    protected function casts(): array
    {
        return ['is_active' => 'boolean', 'sort' => 'integer'];
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(DefaultGroup::class, 'default_group_id');
    }
}
