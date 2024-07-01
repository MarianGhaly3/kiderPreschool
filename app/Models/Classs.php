<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Classs extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subject',
        'teacherName',
        'Price',
        'Age',
        'Time',
        'Capacity',
    ];
}
