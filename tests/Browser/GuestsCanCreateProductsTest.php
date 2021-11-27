<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class GuestsCanCreateProductsTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * Guests can create products
     *
     * @test
     * @throws \Throwable
     */
    public function guests_can_create_products()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/products')
                ->assertSee(__('Create product'))
                ->press('#create-product')
                ->assertSee(__('Name'))
                ->assertSee(__('Price'))
                ->type('@create_name', 'Product 1')
                ->type('@create_price', '10.00')
                ->press('#save-product')
                ->waitForText('Product 1')
                ->assertSee('Product 1')
                ->assertSee('10.00')
            ;
        });
    }
}
