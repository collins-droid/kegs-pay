<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PayslipDeductions;
use Carbon\Carbon;

class PayslipDeductionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) { // Generating data for 10 payslips
            PayslipDeductions::create([
                'payslip_id' => rand(1, 100), // Random payslip ID between 1 and 100
                'tax_sss' => 200.00,
                'tax_hdmf' => 150.00,
                'tax_phic' => 100.00,
                'hdmf_loan' => 50.00,
                'sss_loan' => 75.00,
                'withholding_tax' => 300.00,
                'loan' => 500.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

