<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Product
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('SIGN IN')
                    ->type('email', 'user@gmail.com')
                    ->type('password', '123456')
                    ->press('LOGIN')
                    ->assertPathIs('/home')
                    ->visit('/addProduct')
                    ->type('nama_product', 'air jordan')
                    ->type('harga_product', '100000')
                    ->type('stock_product', '100000')
                    ->type('deskripsi', 'haip bis parah ngga sih')
                    ->select('kategori_product', 'Lainnya')
                    ->select('nama_marketplace', 'Shopee')
                    ->attach('img_path', __DIR__.'\test.jpg')
                    ->press('Submit');
        });
    }
}