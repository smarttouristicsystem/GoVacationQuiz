<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'position',
        'profile_photo',
        'description',
        'is_active'
    ];

    public function assistances(): HasMany
    {
        return $this->hasMany(Assistance::class);
    }
}
