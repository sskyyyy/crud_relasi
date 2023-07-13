<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table ='pengajuan';
    protected $primaryKey ='id';
    protected $fillable = ['nama','kelas','alamat_perusahaan','tanggal_pengajuan'];

    public  function keLas()
    {
        return $this->belongsTo(Kelas::class ,'kelas', 'id');
    }
}
