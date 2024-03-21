<?php

use App\Classes\Payroll\PayrollClass;

// Sample input data
$data = [
    'period_start' => '2023-04-01',
    'period_end' => '2023-04-15',
    'data' => json_encode([
        [
            'id' => 1,
            'daily_rate' => 500,
        ],
        [
            'id' => 2,
            'daily_rate' => 600,
        ],
        // Add more sample data as needed
    ]),
];

// Instantiate the PayrollClass
$payrollClass = new PayrollClass();

// Call the payroll method and get the result
$result = $payrollClass->payroll($data);

// Print the result
print_r($result);
