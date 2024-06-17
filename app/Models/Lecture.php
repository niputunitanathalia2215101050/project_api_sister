<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    
    protected $fillable = ['name', 'nip', 'email', 'phone_number', 'faculty', 'major', 'study_program'];
    use HasFactory;
}
