<?php

namespace App\Services;

use App\Models\Employee;
use App\Models\EmployeeHour;
use Illuminate\Http\JsonResponse;

class EmployeeHourService
{
    public function store($data): false|string
    {
        $employee = Employee::findOrFail($data["employee_id"]);

        $employee_hours = new EmployeeHour;

        $employee_hours->employee_id = $data['employee_id'];
        $employee_hours->hours = $data['hours'];

        $employee_hours->save();

        return json_encode(['employee' => $employee_hours->employee_id, 'hours' => $employee_hours->hours]);
    }
}
