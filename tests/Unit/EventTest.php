<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function testEventValidationRules()
    {
        $event = new Event();
        // $this->assertFalse($event->save(), 'Event should not be saved without required fields.');

        $event->name = 'Sample Event';
        $event->duration = 60;
        $event->description = 'A sample event description.';
        $this->assertTrue($event->save(), 'Event should be saved with all required fields.');
    }
}
