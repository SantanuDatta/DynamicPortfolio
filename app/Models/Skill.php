<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
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
        'skill_rate',
    ];

    public function scopeAsc($query, $column)
    {
        return $query->orderBy($column, 'asc');
    }
}
