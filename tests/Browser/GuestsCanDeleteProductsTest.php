<?php

namespace Tests\Browser;

use App\Models\Product;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GuestsCanDeleteProductsTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * Guests can delete products
     *
     * @test
     * @throws \Throwable
     */
    public function guest_can_delete_products()
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visit('/products')
                ->assertSee($product->name)
                ->assertSee($product->price)
                ->press('@delete-product-'.$product->id)
                ->assertSee("Are you sure you want to delete $product->name?")
                ->press('Yes, delete!')
                ->assertSee('Deleted!')
                ->press('OK')
                ->visit('/products')
                ->assertDontSee($product->name)
                ->assertDontSee($product->price)
            ;
        });
    }
}
