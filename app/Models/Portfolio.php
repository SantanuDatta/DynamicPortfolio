<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'job',
        'client',
        'date',
        'company',
        'link',
        'status',
    ];

    public function scopeAsc($query, $column)
    {
        return $query->orderBy($column, 'asc');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
