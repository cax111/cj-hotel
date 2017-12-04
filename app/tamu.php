<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    protected $table='tb_tamu';
    protected $primaryKey='id_tamu';
    protected $columns=['nama_tamu','alamat','no_tlp','email','username'];
    public $timestamps=false;
}
