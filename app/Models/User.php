<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        HasRoles;

    protected $guarded = [];

    public function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Hash::make($value)
        );
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function level(): HasOne
    {
        return $this->hasOne(Level::class);
    }

    public function getHomepageRedirect()
    {
        return redirect()->route(
            $this->hasRole('brand_manager')
                ? 'brands.home'
                : 'web.home'
        );
    }
}
