<?php

namespace App\Services;

use App\Models\EmployeeHour;

class PayoutService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $employee_hours = EmployeeHour::selectRaw('employee_id, SUM(hours * 1500) as total_payment')
            ->where('isPaid', false)
            ->groupBy('employee_id')
            ->get();

        return $employee_hours->pluck('total_payment', 'employee_id');
    }

    public function pauOut(): void
    {
        $employee_hours = EmployeeHour::where('isPaid', false)->update(['isPaid' => true]);
    }
}
