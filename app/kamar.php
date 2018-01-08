<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table='tb_kamar';
    protected $primaryKey='id_kamar';
    protected $columns=['id_jenis','harga_sewa','deskripsi_kamar','status','banyak_tamu'];
    public $timestamps=false;
}
