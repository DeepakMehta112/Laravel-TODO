<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TODO_LIST extends Model
{
    use HasFactory;
    // public $timestamps=false;
    protected $table = 'todo_list';
    protected $fillable = ['title','desc'];
}
