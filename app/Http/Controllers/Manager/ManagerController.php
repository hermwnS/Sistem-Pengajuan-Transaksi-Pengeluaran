<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index($id){
        $data_pengajuan = Submissions::with($id);
        return view('manager/ManagerView', compact($data_pengajuan));
    }

    public function lihat_approvalManager(Request $request){
        if(isset($status) == "waiting manager approve" && isset($nilai_pengajuan) > 5000000){
            $no_pengajuan = $request->$_GET['no_pengajuan'];
            $tanggal = $request->$_GET['tanggal'];
            $nama_pengaju = $request->$_GET['nama_pengaju'];
            $kategori = $request->$_GET['kategori'];
            $nilai_pengajuan = $request->$_GET['nilai_pengajuan'];
            $deskripsi = $request->$_GET['deskripsi'];
            $lampiran = $request->$_GET['lampiran'];
            $status = $request->$_GET['status'];
        }
    }
    
}
