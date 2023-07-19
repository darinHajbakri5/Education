<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

}
