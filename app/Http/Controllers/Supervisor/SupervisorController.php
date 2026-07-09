<?php

namespace App\Http\Controllers\supervisor;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index() {
        $data_pengajuan = Submissions::all();
        return view('supervisor/SupervisorView');
    }

    public function kategoriPengajuan(){
        $kategori = $this->$_GET['kategori'];
        $status = $this->$_GET['status'];
        if($kategori == "PO Produk"){
            $status = "Waiting Direktur approve";
        }
    }
}
