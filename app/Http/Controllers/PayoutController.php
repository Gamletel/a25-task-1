<?php

namespace App\Http\Controllers;

use App\Models\EmployeeHour;
use App\Services\PayoutService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PayoutController extends Controller
{
    public function __construct(private readonly PayoutService $payoutService)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json($this->payoutService->index());
    }

    public function payOut()
    {
        $this->payoutService->pauOut();
    }
}
