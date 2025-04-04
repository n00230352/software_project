<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Donation;
use App\Models\Community;  

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_book()
    {
        $user = User::factory()->create();

        $donation = Donation::factory()->create();

        $community = Community::factory()->create();

        $this->actingAs($user);


        $response = $this->post('/donations', [
            'title' => 'The Test Book',
            'condition' => 'New',
            'donation_id' => $donation->id,
            'community_id' => $community->id,
        ]);

        $response->assertRedirect(route('books.index'));

        $this->assertDatabaseHas('books', [
            'title' => 'The Test Book',
            'condition' => 'New',
            'donation_id' => $donation->id,
        ]);
    }
}
