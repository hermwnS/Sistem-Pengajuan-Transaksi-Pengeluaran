<?php

namespace App\Http\Controllers\finance;

use App\Http\Controllers\Controller;
use App\Models\Submissions;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(){
        $data_pengajuan = Submissions::all();
        return view('finance/FinanceView', compact($data_pengajuan));
    }
}
