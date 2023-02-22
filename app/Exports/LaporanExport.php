<?php

namespace App\Exports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class LaporanExport implements FromView
{
    /**
    
    */
    public function __construct($data){
        $this->data=$data;
    }

    public function View(): View 
    {
        return view('Admin.laporan.cetak', $this->data);
    }
}
