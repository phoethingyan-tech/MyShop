<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;  //use softdeletes
    protected $table = 'categories';  //database table name
    protected $fillable = [
        'name',
    ];   //add table column name
}
