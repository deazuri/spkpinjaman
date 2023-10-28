<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemohon extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pemohons';
    // protected $primaryKey = 'id_bahan';
    public $incrementing = true;
    protected $fillable = ['kode', 'nama_pemohon', 'usia', 'alamat'];
    protected $hidden = ['created_at', 'updated_at'];
}