<?php

namespace App\Services;

use App\Models\Employee;

class EmployeeService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function store($data): Employee
    {
        $employee = new Employee;
        $employee->email = $data['email'];
        $employee->password = $data['password'];

        $employee->save();

        return $employee;
    }
}
