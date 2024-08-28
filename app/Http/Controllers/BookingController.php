<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('event')->get();

        return view('bookings.index', compact('bookings'));
    }

    public function store(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);

        $booking = new Booking();
        $booking->attendee_name = $request->input('attendee_name');
        $booking->attendee_email = $request->input('attendee_email');
        $booking->event_id = $eventId;
        $booking->booking_date = $request->input('booking_date');
        $booking->booking_time = $request->input('booking_time');
        $booking->save();

        return view('bookings.thank-you', ['booking' => $booking]);
    }

    public function create(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);
        $selectedDate = $request->input('booking_date', now()->toDateString());

        $timeSlots = $this->generateTimeSlots($selectedDate);

        return view('bookings.calendar', compact('event', 'timeSlots', 'selectedDate'));
    }

    private function generateTimeSlots($date)
    {
        $startOfDay = Carbon::parse($date)->startOfDay();
        $endOfDay = Carbon::parse($date)->startOfDay()->addHours(24);
        $interval = 30; // 30 minutes per time block

        $timeSlots = [];

        while ($startOfDay < $endOfDay) {
            $end = $startOfDay->copy()->addMinutes($interval);

            $timeSlots[] = [
                'time' => $startOfDay->format('H:i'),
            ];

            $startOfDay = $end;
        }

        return $timeSlots;
    }
}
