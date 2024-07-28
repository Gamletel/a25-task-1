<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $employee_id
 * @property int $hours
 */
class EmployeeHour extends Model
{
    use HasFactory;
}
