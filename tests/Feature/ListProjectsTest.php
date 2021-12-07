<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Project;
use Tests\TestCase;

class ListProjectsTest extends TestCase {
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects() {

        $this->withoutExceptionHandling();

        $project = Project::create([
            'img' => 'esta no es una imagen',
            'title' => 'Catalogo',
            'url' => 'catalogo',
            'description' => 'este es mi nuevo producto',
            'status' => 'finalizado'
        ]);

        $response = $this->get(route('projects.index'));

        $response->assertStatus(200);

        $response->assertViewIs('projects.index');

        $response->assertViewHas('projects');

        $response->assertSee($project->title);

    }
}
