<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    public function testBookingHasEvent()
    {
        $booking = Booking::factory()->create();
        $this->assertInstanceOf(Event::class, $booking->event);
    }
}
