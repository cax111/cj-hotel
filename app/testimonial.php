<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $table='tb_testimonial';
    protected $primaryKey='id_testi';
    protected $columns=['id_tamu','isi_testi','tanggal_isi'];
    public $timestamps=false;
}
