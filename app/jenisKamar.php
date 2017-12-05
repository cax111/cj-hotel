<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenisKamar extends Model
{
    protected $table='tb_jenis_kamar';
    protected $primaryKey='id_jenis';
    protected $columns=['nama_jenis'];
    public $timestamps=false;
}
