<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DefaultGroup extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'name_en', 'name_pt', 'name_es', 'icon', 'color', 'sort'];

    protected function casts(): array
    {
        return ['sort' => 'integer'];
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(DefaultSubscription::class);
    }
}
