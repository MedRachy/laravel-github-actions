<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create(['name' => 'med rachy']);
        $this->assertEquals('med rachy', $user->fresh()->name);

        // $response = $this->get('/');
        // $response->assertStatus(200);
    }
}
