<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'about_id',
        'studied_at',
        'degree',
        'info',
        'start_date',
        'end_date',
    ];

    public function scopeAsc($query, $column)
    {
        return $query->orderBy($column, 'asc');
    }
}
