<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professionals = Professional::all();

        return view(
            'professionals.index',
            compact('professionals')
        );
    }

    public function create()
    {
        return view('professionals.create');
    }

    public function store(Request $request)
    {
        Professional::create([

            'name' => $request->name,

            'phone' => $request->phone,

            'email' => $request->email,

            'specialty' => $request->specialty,

            'commission_percentage' =>
                $request->commission_percentage,

            'active' => 1

        ]);

        return redirect('/professionals');
    }

    public function edit($id)
    {
        $professional =
            Professional::findOrFail($id);

        return view(
            'professionals.edit',
            compact('professional')
        );
    }

    public function update(
        Request $request,
        $id
    )
    {
        $professional =
            Professional::findOrFail($id);

        $professional->update([

            'name' => $request->name,

            'phone' => $request->phone,

            'email' => $request->email,

            'specialty' => $request->specialty,

            'commission_percentage' =>
                $request->commission_percentage

        ]);

        return redirect('/professionals');
    }

    public function destroy($id)
    {
        $professional =
            Professional::findOrFail($id);

        $professional->delete();

        return redirect('/professionals');
    }
}
