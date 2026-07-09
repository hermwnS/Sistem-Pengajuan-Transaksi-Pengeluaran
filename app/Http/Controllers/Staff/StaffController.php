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
        $no_pengajuan = $request->input('no_pengajuan');
        $tanggal = $request->input('tanggal');
        $nama_pengaju = $request->input('nama_pengaju');
        $kategori = $request->input('kategori');
        $nilai_pengajuan = $request->input('nilai_pengajuan');
        $deskripsi = $request->input('deskripsi');
        $lampiran = $request->input('lampiran');
        $status = $request->input('status');

        $submission = new Submissions();
        $submission->no_pengajuan = $no_pengajuan;
        $submission->tanggal = $tanggal;
        $submission->nama_pengaju = $nama_pengaju;
        $submission->kategori = $kategori;
        $submission->nilai_pengajuan = $nilai_pengajuan;
        $submission->deskripsi = $deskripsi;
        $submission->lampiran = $lampiran;
        $submission->status = $status;
        $submission->save();

        return redirect()->back();
    }

    public function riwayatPengajuan(Request $request){
        $no_pengajuan = $request->$_GET['no_pengajuan'];
        $tanggal = $request->$_GET['tanggal'];
        $nama_pengaju = $request->$_GET['nama_pengaju'];
        $deskripsi = $request->$_GET['deskripsi'];
        $lampiran = $request->$_GET['lampiran'];
        $status = $request->$_GET['status'];
    }
}
