<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function testEventListPageDisplaysEvents()
    {
        $event = Event::factory()->create();

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Event List');
        $response->assertSee($event->name);
    }
}
