<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    // Sesuai slide: Subject hasOne Teacher
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
