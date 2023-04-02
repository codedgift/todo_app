<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'status',
        'name',
        'description',
        'priority',
        'start_date',
        'end_date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
