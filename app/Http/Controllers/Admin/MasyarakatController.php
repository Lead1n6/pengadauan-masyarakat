<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();

        return view('Admin.Masyarakat.index', ['masyarakat' => $masyarakat]);
    }
   
    public function show($nik)
    {
        $masyarakat = Masyarakat::where('nik', $nik)->first();

        $pengaduan = Pengaduan::where('nik', $nik)->first();

        return view('Admin.Masyarakat.show', ['masyarakat' => $masyarakat, 'pengaduan'=> $pengaduan]);
    }

    // public function destroy($nik)
    // {
    //     $masyarakat = Masyarakat::findOrFail($nik);

    //     $masyarakat->delete();

    //     return redirect()->route('masyarakat.index')->with('succes', 'Data Behasil Dihapus');
    // }

}
