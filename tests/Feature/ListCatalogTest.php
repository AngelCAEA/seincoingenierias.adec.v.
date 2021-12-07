<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Catalog;
use Tests\TestCase;

class ListCatalogTest extends TestCase {
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_catalog() {

        $this->withoutExceptionHandling();

        $catalogo = Catalog::create([
            'img' => 'esta no es una imagen',
            'title' => 'Nuevo producto',
            'url' => 'nuevo-producto',
            'description' => 'esta es la descripcion de mi producto'
        ]);

        $response = $this->get(route('catalogos.index'));

        $response->assertStatus(200);

        $response->assertViewIs('catalogos.index');

        $response->assertViewHas('catalogos');

        $response->assertSee($catalogo->title);
    }
}
