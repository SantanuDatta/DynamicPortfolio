<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'about_id',
        'name',
        'description',
        'image_link',
    ];

    public function scopeAsc($query, $column)
    {
        return $query->orderBy($column, 'asc');
    }
}
