<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    protected $fillable = [
        'email',
        'github_link',
        'linkedin_link',
        'facebook_link',
    ];

    public function phones(): HasMany
    {
        return $this->hasMany(ContactPhone::class);
    }
}