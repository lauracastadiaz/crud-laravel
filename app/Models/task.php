<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    // le asignamos que datos deben ser asignados de manera masiva para que no de el error
   protected $fillable = ['title', 'description', 'due_date', 'status'];
}
