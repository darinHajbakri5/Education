<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model {

    public $timestamps = true;
    protected $table = 'course_translations';
    protected $fillable = [

        'course_id',
        'title',
        'description',
        'text'];




        public function teacher()
        {
            return $this->belongsTo(User::class, 'teacher_id');
        }

        public function carts()
        {
            return $this->hasMany(Cart::class);
        }

}
