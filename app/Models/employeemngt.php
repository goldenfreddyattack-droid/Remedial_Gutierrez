<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class employeemngt extends Model
{
    use HasFactory;
    protected $table = 'employeetbl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dob',
        'contact'
    ];
}