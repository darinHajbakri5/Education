<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Translatable;
class course extends Model
{

    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'text', 'description'];
    protected $fillable = [
        'teacher_id'
    ];




}
