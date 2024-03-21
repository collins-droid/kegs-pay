<?php

namespace App\Services\Attendance;

interface AttendanceServiceInterface
{
    public function store($employeeId, $projectId, $date, $timeIn, $timeOut);
    public function getHoursAttendance($dateAttendance, $timeInAttendance, $timeOutAttendance);
    public function getAttendanceStatus($date, $lateHours, $isAdmin);
    public function generateData($userCounts, $payrollPeriodCounts, $frequency);
}
