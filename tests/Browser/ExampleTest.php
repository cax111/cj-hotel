<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->select('banyak','3')
                    ->select('kamar','3');
            $browser->script('window.scrollTo(0, 400);');
            $browser->press('Lanjut')
                    ->assertPathIs('/pilih-hotel');

        });
    }
}
