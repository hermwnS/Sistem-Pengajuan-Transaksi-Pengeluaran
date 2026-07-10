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

    public function kategoriPengajuan(){
        $kategori = $this->$_POST['kategori'];
        $nilai_pengajuan = $this->$_POST['nilai_pengajuan'];
        $budget = $this->$_POST['budget'];
        $status = $this->$_POST['status'];
        switch($kategori){
            case 1:
                if($kategori == "PO Produk"){
                    return redirect('direktur/pengajuanDirekturView');
                }
                break;
            case 2:
                if($kategori != "PO Produk" && $nilai_pengajuan > 5000000){
                    return redirect('supervisor/pengajuanSupervisorView')->to('/manager/pengajuanManagerView');
                }
                break;
            case 3:
                if($nilai_pengajuan > 10000000){
                    return redirect('manager/pengajuanManagerView')->to('direktur/pengajuanDirekturView');
                }
                break;
            case 4:
                if($budget < $nilai_pengajuan){
                    return "Status: Ditolak";
                }
                break;
            case 5:
                if($status == "Reject"){
                    return "Status: Ditolak";
                }
                break;
            case 6:
                if($status == "Approve"){
                    return "Status: Menunggu finance";
                }
                break;
            case 7:
                if($budget > $nilai_pengajuan){
                    return "Proses Pembayaran";
                    break;
                }else{
                    return "Ditolak";
                    break;
                }
            default:
                return "Draft";
                break;
        }
    }
}
