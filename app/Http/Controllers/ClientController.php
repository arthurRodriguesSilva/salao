<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view(
            'clients.index',
            compact('clients')
        );
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        Client::create([

            'name' => $request->name,

            'phone' => $request->phone,

            'email' => $request->email,

            'birth_date' => $request->birth_date,

            'notes' => $request->notes,

            'active' => 1

        ]);

        return redirect('/clients');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view(
            'clients.edit',
            compact('client')
        );
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->update([

            'name' => $request->name,

            'phone' => $request->phone,

            'email' => $request->email,

            'birth_date' => $request->birth_date,

            'notes' => $request->notes

        ]);

        return redirect('/clients');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect('/clients');
    }
}

