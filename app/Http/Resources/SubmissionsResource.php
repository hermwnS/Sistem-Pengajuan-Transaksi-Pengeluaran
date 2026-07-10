<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubmissionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'tanggal'=>$this->tanggal,
            'nilai_pengajuan'=>$this->nilai_pengajuan,
            'deskripsi'=>$this->deskripsi,
            'lampiran'=>$this->lampiran,
            'status'=>$this->status,
            'create_at'=>$this->create_at,
            'update_at'=>$this->update_at
        ];
    }
}
