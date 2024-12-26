<?php
namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
class san_pham extends JsonResource {
    public function toArray(Request $request): array  {
        return [
        'id' => $this->id,
        'ten_sp' => $this->ten_sp,
        'gia_sp' => $this->gia,   
        'id_loai' => $this->id_loai,   
        'updated_at' => $this->updated_at || '',
        ];
    }    
}