<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PayrollPeriod;
use Carbon\Carbon;

class PayrollPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = 2024; // Set the year to 2024

        // Payroll Period 1
        $new_bmo = new PayrollPeriod;
        $new_bmo->frequency_id = 1;
        $new_bmo->year = $year;
        $new_bmo->period_start = Carbon::parse("2023-12-26")->year($year);
        $new_bmo->period_end = Carbon::parse("2024-01-10")->year($year);
        $new_bmo->payout_date = Carbon::parse("2024-01-15")->year($year);
        $new_bmo->cutoff_order = 1;
        $new_bmo->is_payroll_generated = 0;
        $new_bmo->save();

        // Payroll Period 2
        $new_wkl = new PayrollPeriod;
        $new_wkl->frequency_id = 2;
        $new_wkl->year = $year;
        $new_wkl->period_start = Carbon::parse("2024-01-11")->year($year);
        $new_wkl->period_end = Carbon::parse("2024-01-25")->year($year);
        $new_wkl->payout_date = Carbon::parse("2024-01-31")->year($year);
        $new_wkl->cutoff_order = 2;
        $new_wkl->is_payroll_generated = 0;
        $new_wkl->save();

        // Payroll Period 3
        $new_xyz = new PayrollPeriod;
        $new_xyz->frequency_id = 1;
        $new_xyz->year = $year;
        $new_xyz->period_start = Carbon::parse("2024-01-26")->year($year);
        $new_xyz->period_end = Carbon::parse("2024-02-10")->year($year);
        $new_xyz->payout_date = Carbon::parse("2024-02-15")->year($year);
        $new_xyz->cutoff_order = 3;
        $new_xyz->is_payroll_generated = 0;
        $new_xyz->save();

        // Payroll Period 4 (Added)
        $new_march_payout = new PayrollPeriod;
        $new_march_payout->frequency_id = 1;
        $new_march_payout->year = $year;
        $new_march_payout->period_start = Carbon::parse("2024-03-06")->year($year);
        $new_march_payout->period_end = Carbon::parse("2024-03-20")->year($year);
        $new_march_payout->payout_date = Carbon::parse("2024-03-25")->year($year);
        $new_march_payout->cutoff_order = 4;
        $new_march_payout->is_payroll_generated = 0;
        $new_march_payout->save();
    }
}

