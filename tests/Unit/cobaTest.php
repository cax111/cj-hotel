<?php

namespace Tests\Unit;

use Tests\TestCase;
use app\Http\Controllers\kamarCrudController;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class cobaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAmbil()
    {
    	$a="host=localhost port=5432 dbname=reservasi_hotel_db user=postgres password=werasa";
    	$connect=pg_connect($a);
    	$pg_sql = pg_query($connect, "SELECT * FROM tb_tamu WHERE nama_tamu='Chakra Bernat Yusuf'");
    	$ambil =pg_fetch_array($pg_sql);

    	$this->assertEquals('Chakra Bernat Yusuf',$ambil['nama_tamu']);
    }
}