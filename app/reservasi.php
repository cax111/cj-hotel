<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    protected $table='tb_booking_kamar';
    protected $primaryKey='id_booking_kamar';
    protected $columns=['id_kamar,kode_booking'];
    public $timestamps=false;
}
