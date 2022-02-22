<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PlanetController extends Controller
{

    public function index()
    {
        $planetes = Planet::paginate(10);
        return view("planets.index", compact("planetes"));
    }

    public function show($id)
    {
        $planet = Planet::findOrFail($id);
        return view('planets.show',compact('planet'));
    }

    public function create()
    {
        return view("planets.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | min:3',
        ]);

        $planeta = new Planet();
        $planeta->name = $request->name;
        $planeta->save();

        return redirect('planets.index')->with('status', 'Planeta creat');
    }

    public function edit($id)
    {
        $planet = Planet::findOrFail($id);
        return view('planets.edit',compact('planet'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $planet = Planet::findOrFail($id);
        $planet->name = $request->name;
        $planet->save();

        return redirect()->route('planets.index')
            ->with('success','Planeta actualitzat');
    }

    public function destroy($id)
    {
        $planeta = Planet::findOrFail($id);
        try {
            $planeta->delete();
            return redirect('planets')->with('status', 'Planeta eliminat');
        } catch (QueryException $ex) {
            return redirect('planets')->with('status', 'No es pot eliminar');
        }
    }
}
