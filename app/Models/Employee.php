<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'position',
        'profile_photo',
        'description',
        'is_active',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function getEmployeesByCategory($categoryName)
    {
        return self::whereHas('category', function ($query) use ($categoryName) {
            $query->where('name', $categoryName);
        })->orderBy('id')->get();
    }
}
