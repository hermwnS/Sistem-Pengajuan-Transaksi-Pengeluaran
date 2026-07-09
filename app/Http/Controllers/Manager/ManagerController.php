<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(){
        $data_pengajuan = Submissions::all();
        return view('manager/ManagerView', compact($data_pengajuan));
    }
    
}
