<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Event;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanCreateBooking()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();

        $response = $this->actingAs($user)->post('/events/' . $event->id . '/book', [
            'event_id' => $event->id,
            'booking_time' => now(),
            'booking_date' => now()->format('Y-m-d'),
            'attendee_email' => 'test@test.com',
            'attendee_name' => 'Best Tester',

        ]);

        $response->assertSee('Thank You!');
        $response->assertSee($event->name);
    }

    public function testBookingCollisionDetection() {}
}
