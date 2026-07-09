<?php

namespace App\Http\Controllers\direktur;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class DirekturController extends Controller
{
    public function index($id){
        $dataApproval = Submissions::with($id);
        return view('direktur/DirekturView', compact($dataApproval));
    }

    public function lihat_approvalDirektur(Request $request){
        if(isset($nilai_pengajuan) > 10000000 && isset($status) == "Approved by Manager"){
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
