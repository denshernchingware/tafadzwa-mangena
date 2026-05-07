<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
    ];

    public function detail(): HasOne
    {
        return $this->hasOne(ProjectDetail::class);
    }
    public function item(): HasOne
    {
        return $this->hasOne(ProjectItem::class);
    }
}
