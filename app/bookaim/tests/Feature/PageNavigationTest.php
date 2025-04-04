<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

use App\Models\User;

use App\Models\Donation;
use App\Models\Community;
use App\Models\Book;

use PHPUnit\Framework\Attributes\Test;

class PageNavigationTest extends TestCase

{

    use RefreshDatabase;

    #[Test]

    public function user_can_visit_dashboard_page()

    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertStatus(200);

        $response->assertSee('Dashboard');

    }

    #[Test]
    public function user_can_visit_communities_page()
    {
        $user = User::factory()->create();

        Community::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/communities');
        $response->assertStatus(200);
        $response->assertSee('Communities');
    }
    #[Test]

    public function user_can_visit_donations_page()

    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/donations');

        $response->assertStatus(200);

        $response->assertSee('Donations');

    }

    #[Test]

    public function user_can_visit_books_page()

    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/books');

        $response->assertStatus(200);

        $response->assertSee('Books');

    }

    #[Test]

    public function user_can_visit_create_donations_page()

    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/donations/create');

        $response->assertStatus(200);

        $response->assertSee('Create Donation');

    }

}

