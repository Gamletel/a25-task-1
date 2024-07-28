<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeHourRequest;
use App\Models\Employee;
use App\Models\EmployeeHour;
use App\Services\EmployeeHourService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EmployeeHourController extends Controller
{
    public function __construct(private readonly EmployeeHourService $employee_hour_service)
    {
    }

    public function store(StoreEmployeeHourRequest $request)
    {
        return response($this->employee_hour_service->store($request));
    }
}
