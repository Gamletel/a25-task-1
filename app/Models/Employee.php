<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $password
 */
class Employee extends Model
{
    use HasFactory;

    protected $fillable =[
        'email',
        'password'
    ];

    protected $casts = [
        'password'=> 'hashed',
    ];
}
