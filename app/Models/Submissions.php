<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    protected $table = 'submissions';
    protected $primaryKey = 'id_submission';
    protected $fillable = [
        'id_submission',
        'id_user',
        'id_category',
        'tanggal',
        'nilai_pengajuan',
        'deskripsi',
        'lampiran_dokumen',
        'status',
    ];
}
