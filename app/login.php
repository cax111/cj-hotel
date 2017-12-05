<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table='tb_akun';
    protected $primaryKey='email';
    protected $columns=['password'];
    public $timestamps=false;
}
