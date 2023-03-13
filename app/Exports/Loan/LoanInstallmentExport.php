<?php

namespace App\Exports\Loan;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LoanInstallmentExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function view(): View
    {  
        return view('reports.loan.loan-installment-export', ['data' => $this->data]);
    }
}