<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 // use App\Http\Controllers\SchoolController;

class School extends Model
{
    protected $table='students';
    protected $fillable=['name','email','phone','adress','class'];
    use HasFactory;
}
