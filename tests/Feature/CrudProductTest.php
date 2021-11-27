<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_guest_can_create_product()
    {
        $product = array(
            'name' => 'Product 1',
            'price' => '10.00',
        );

        $response = $this->postJson(route('product.store'), $product);

        $response->assertJson(['data' => $product]);

        $this->assertDatabaseHas('products', $product);
    }

    /** @test */
    public function a_product_requires_a_name()
    {
        $response = $this->postJson(route('product.store'), ['name' => '']);

        $response->assertStatus(422);

        $response->assertJsonStructure([
            'message', 'errors' => ['name']
        ]);
    }

    /** @test */
    public function a_product_name_requires_a_minimum_length()
    {
        $response = $this->postJson(route('product.store'), ['name' => 'as']);

        $response->assertStatus(422);

        $response->assertJsonStructure([
            'message', 'errors' => ['name']
        ]);
    }

    /** @test */
    public function guests_can_delete_products()
    {
        $this->withoutExceptionHandling();

        $product = Product::create(['name' => 'Product 1', 'price' => '10.00']);

        $response = $this->deleteJson(route('product.delete', $product));

        $response->assertJson(['message' => 'Product deleted successfully']);

        $this->assertDatabaseMissing('products', $product->toArray());
    }

    /** @test */
    public function guests_can_edit_products()
    {
        $this->withoutExceptionHandling();

        $product = Product::create(['name' => 'Product 1', 'price' => '10.00']);

        $productEdited = array(
            'name' => 'Product 2',
            'price' => '20.00',
        );

        $response = $this->putJson(route('product.update', $product), $productEdited);

        $response->assertJson(['message' => 'Product updated successfully']);

        $this->assertDatabaseHas('products', $productEdited);
    }
}
