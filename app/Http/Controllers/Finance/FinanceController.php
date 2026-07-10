<?php

namespace App\Http\Controllers\finance;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(int $id){
        $data_pengajuan = Submissions::with($id);
        return view('finance/FinanceView', compact($data_pengajuan));
    }

    public function lihat_transaksi(Request $request){
        if(isset($status) == "Approved by Supervisor" && isset($status) == "Approved by Manager" && isset($status) == "Approved by Direktur"){
            $no_pengajuan = $request->$_GET['no_pengajuan'];
            $tanggl = $request->$_GET['tangal'];
            $nama_pengaju = $request->$_GET['nama_pengaju'];
            $kategori = $request->$_GET['kategori'];
            $nilai_pengajuan = $request->$_GET['nilai_pengajuan'];
            $deskripsi = $request->$_GET['deskripsi'];
            $lampiran = $request->$_GET['lampiran'];
            $status = $request->$_GET['status'];
        }
    }

    public function validasiSaldo(){
        if(isset($nilai_pengajuan) > isset($budget)){
            return "Paid";
        }
    }
}
