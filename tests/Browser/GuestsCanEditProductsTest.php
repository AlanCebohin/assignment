<?php

namespace Tests\Browser;

use App\Models\Product;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GuestsCanEditProductsTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * Guests can edit products
     *
     * @test
     * @throws \Throwable
     */
    public function guests_can_edit_products()
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visit('/products')
                ->assertSee($product->name)
                ->assertSee($product->price)
                ->press('@edit-product-'.$product->id)
                ->assertSee($product->name)
                ->assertSee($product->price)
                ->type('@edit_name', 'Product 1')
                ->type('@edit_price', '10.00')
                ->press('@edit-product')
                ->waitForText('Product edited!')
                ->press('OK')
                ->visit('/products')
                ->assertDontSee($product->name)
                ->assertDontSee($product->price)
                ->assertSee('Product 1')
                ->assertSee('10.00')
            ;
        });
    }
}
