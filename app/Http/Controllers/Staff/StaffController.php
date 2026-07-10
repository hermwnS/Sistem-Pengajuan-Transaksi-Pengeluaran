<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $dataPengajuan = Submissions::all();
        return view('staff/StaffView', compact($dataPengajuan));
    }

    public function pengajuan(Request $request)
    {
        $dataPengajuan = [
            'no_pengajuan'=>$request->input('no_pengajuan'),
            'tanggal'=>$request->input('tanggal'),
            'nama_pengaju'=>$request->input('nama_pengaju'),
            'kategori'=>$request->input('kategori'),
            'nilai_pengajuan'=>$request->input('nilai_pengajuan'),
            'deskriptsi'=>$request->input('deskripsi'),
            'lampiran'=>$request->input('lampiran'),
            'status'=>$request->input('status')
        ];
        $this->$dataPengajuan->save();
        return redirect('staff/pengajuanStaffView');
    }

    public function riwayatPengajuan(Request $request){
        $riwayat = [
            "no_pengajuan" => $request->$_GET['no_pengajuan'],
            "tanggal" => $request->$_GET['tanggal'],
            "nama_pengaju" => $request->$_GET['nama_pengaju'],
            "deskripsi" => $request->$_GET['deskripsi'],
            "lampiran" => $request->$_GET['lampiran'],
            "status" => $request->$_GET['status'],
        ];
        $this->$riwayat->get();
    }
}
