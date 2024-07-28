<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Services\EmployeeService;
use Illuminate\Http\JsonResponse;

class EmployeeController extends Controller
{

    public function __construct(private readonly EmployeeService $employeeService)
    {
    }

    public function store(StoreEmployeeRequest $request): JsonResponse
    {
        $validated_data = $request;

        return response()->json($this->employeeService->store($validated_data));
    }
}
