<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sektor extends Model
{
    use HasFactory;
    protected $table = "sektor";
    protected $fillable = ['namaSektor'];

    public function detail()
    {
        return $this->hasMany(detail::class, 'id_sektor', 'id');
    }
}
