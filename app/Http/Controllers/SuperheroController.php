<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Models\Superhero;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $superheroes = Superhero::paginate(10);
        return view("superheroes.index", compact("superheroes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $planets = Planet::all();
        return view("superheroes.create", compact('planets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'realname' => 'required | max:75',
            'heroname' => 'required | max:25 | unique:superheroes',
            'gender' => 'required | in:male,female',
            'planet_id' => 'required | exists:planets,id'
        ]);

        $superheroe = new Superhero();
        $superheroe->realname = $request->realname;
        $superheroe->heroname = $request->heroname;
        $superheroe->gender = $request->gender;
        $superheroe->planet_id = $request->planet_id;
        $superheroe->save();

        return redirect('superheroes')->with('status', 'Superheroi creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $superheroe = Superhero::findOrFail($id);
        return view('superheroes.show',compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $superheroe = Superhero::findOrFail($id);
        $planets = Planet::all();
        return view('superheroes.edit',compact('superheroe','planets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'realname' => 'required | max:75',
//            'heroname' => 'required | max:25 | unique:superheroes',
            'gender' => 'required | in:male,female',
            'planet_id' => 'required | exists:planets,id'
        ]);

        $superheroe = Superhero::findOrFail($id);
        $superheroe->realname = $request->realname;
        $superheroe->heroname = $request->heroname;
        $superheroe->gender = $request->gender;
        $superheroe->planet_id = $request->planet_id;
        $superheroe->save();

        return redirect('superheroes')->with('status', 'Superheroi actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $superheroe = Superhero::findOrFail($id);
        try {
            $superheroe->delete();
            return redirect('superheroes')->with('status', 'Superheroi eliminat');
        } catch (QueryException $ex) {
            return redirect('superheroes')->with('status', 'No es pot eliminar');
        }
    }
}
