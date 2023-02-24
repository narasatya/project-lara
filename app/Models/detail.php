<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;
    protected $table = "detail";
    protected $fillable = ['nama_usaha', 'produk', 'id_sektor', 'nama_pemilik', 'jml_tk', 'alamat', 'kec', 'kab', 'prov', 'telp'];

    public function sektor () {
        return $this->belongsTo(sektor::class, 'id_sektor');
    }
}