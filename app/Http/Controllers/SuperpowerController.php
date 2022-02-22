<?php

namespace App\Http\Controllers;

use App\Models\Superpower;
use Illuminate\Http\Request;

class SuperpowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $superpowers = Superpower::all();
        $superpowers = Superpower::paginate(10);
        return view("superpowers.index", compact("superpowers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("superpowers.create");
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
            'description' => 'required | max:75'
        ]);

        $superpower = new Superpower();
        $superpower->description = $request->description;
        $superpower->save();

        return redirect('superpowers')->with('status', 'Superpoder creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Superpower  $superpower
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $superpower = Superpower::findOrFail($id);
        return view('superpowers.show',compact('superpower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Superpower  $superpower
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $superpower = Superpower::findOrFail($id);
        return view('superpowers.edit',compact('superpower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Superpower  $superpower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'description' => 'required | max:75'
        ]);

        $superpower = Superpower::findOrFail($id);
        $superpower->description = $request->description;
        $superpower->save();

        return redirect('superpowers')->with('status', 'Superpoder actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Superpower  $superpower
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $superpower = Superpower::findOrFail($id);
        try {
            $superpower->delete();
            return redirect('superpowers')->with('status', 'Superpoder eliminat');
        } catch (QueryException $ex) {
            return redirect('superpowers')->with('status', 'No es pot eliminar');
        }
    }
}
