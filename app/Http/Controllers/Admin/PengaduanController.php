<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::orderBy('tgl_pengaduan', 'desc')->get();
       
        return view('Admin.Pengaduan.index', ['pengaduan' => $pengaduan]);
    }

    public function show($id_pengaduan)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id_pengaduan)->first();

   
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
        
        return view('Admin.Pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan]);
        
    }

    public function destroy($id_pengaduan)
    {
        $pengaduan = Pengaduan::find($id_pengaduan);

        $pengaduan->tanggapan()->delete();

        $pengaduan->delete();

        return redirect()->route('pengaduan.index');
    }
    

}
