<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Professional;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with([
            'client',
            'professional'
        ])->get();

        return view(
            'appointments.index',
            compact('appointments')
        );
    }

    public function create()
    {
        $clients = Client::all();

        $professionals = Professional::all();

        return view(
            'appointments.create',
            compact(
                'clients',
                'professionals'
            )
        );
    }

    public function store(Request $request)
    {
        $exists = Appointment::where(
            'professional_id',
            $request->professional_id
        )
        ->where(
            'appointment_date',
            $request->appointment_date
        )
        ->where(
            'start_time',
            $request->start_time
        )
        ->exists();

        if ($exists) {

            return back()
                ->with(
                    'error',
                    'Horário já agendado'
                );

        }

        Appointment::create([

            'client_id' => $request->client_id,

            'professional_id' => $request->professional_id,

            'appointment_date' => $request->appointment_date,

            'start_time' => $request->start_time,

            'end_time' => $request->end_time,

            'status' => 'scheduled',

            'notes' => $request->notes

        ]);

        return redirect('/appointments');
    }
}

