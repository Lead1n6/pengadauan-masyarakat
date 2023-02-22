<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {

        return view('Admin.Laporan.index');
        
    }

    public function getLaporan(Request $request)
    {
        $from = $request->from.' '. '00:00:00';
        
        $to = $request->to.' '. '23:59:59';

        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$from, $to])->get();
       
        return view('Admin.Laporan.index', ['pengaduan' => $pengaduan, 'from' => $from, 'to' => $to]);
    }
        
    public function cetakLaporan($from, $to)
    {
        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$from,$to])->get();

        $pdf = PDF::loadView('Admin.Laporan.cetak',['pengaduan' => $pengaduan]);

        return $pdf->download('Laporan-pengaduan.pdf');
    }

    public function exportExcel($from,$to)
    {
        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan',[$from,$to])->get();

        return Excel::download(new LaporanExport(["pengaduan"=>$pengaduan]), 'Laporan-pengaduan.xlsx');
    }

}
