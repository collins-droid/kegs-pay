<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate sample data for attendances table
       
            DB::table('attendances')->insert([
                'user_id' => 1, // Random user ID between 1 and 100
                'date' => now()->subDays(rand(0, 30)), // Random date within the last 30 days
                'time_in' => '08:00:00',
                'time_out' => '17:00:00',
                'regular' => 8,
                'late' => 0,
                'undertime' => 0,
                'overtime' => 1,
                'night_differential' => 0,
                'project_id' => rand(1, 100), // Random project ID between 1 and 100
                'status' => 1,
                'scheduled_time_in' => '08:00:00',
                'scheduled_time_out' => '17:00:00',
                'schedule_id' => 1,
                'task' => 'Work on project A',
                'category' => 1,
                'sub_category' => 1,
                'created_by' => 1,
                'date_approved' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ]);
        
    }
}

