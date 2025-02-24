<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory;
    protected $fillable =  [
        'company_name',
        'abv',
        'company_branch',
        'company_logo',
        'description',
        'is_active'
    ];

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($company) {
            if ($company->company_logo) {
                Storage::disk('public')->delete($company->company_logo);
            }
        });
    }   
}
