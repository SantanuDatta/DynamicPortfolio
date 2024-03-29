<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'about_id',
        'c_id',
        'degree',
        'date',
    ];

    public function scopeAsc($query, $column)
    {
        return $query->orderBy($column, 'asc');
    }
}
