<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class, 'contact_project');
    }
}
