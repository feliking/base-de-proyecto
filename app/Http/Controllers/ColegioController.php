<?php

namespace App\Http\Controllers;

use App\Maestro;
use App\Colegio;
use Illuminate\Http\Request;

class ColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colegios = Colegio::all();
        $count = 0;
        return view('colegio.index', compact('colegios', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colegio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = request()->all();
        $data = request()->validate([
          'nombre' => 'required',
          'distrito' => '',
          'direccion' => '',
          'capacidad' => ''
        ],[
          'nombre.required' => 'El campo es obligatorio'
        ]);

        Colegio::create([
          'nombre' => $data['nombre'],
          'distrito' => $data['distrito'],
          'direccion' => $data['direccion'],
          'capacidad' => $data['capacidad']
        ]);

        return redirect(route('colegio.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $colegio = Colegio::find($id);
      if ($colegio == null) {
        return view('error.404');
      }
      return view('colegio.show', compact('colegio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function edit(Colegio $colegio)
    {
        return view('colegio.edit', compact('colegio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function update(Colegio $colegio)
    {
        $data = request()->validate([
          'nombre' => 'required',
          'distrito' => '',
          'direccion' => '',
          'capacidad' => ''
        ],[
          'nombre.required' => 'El campo es obligatorio'
        ]);
        //$data = request()->all();
        //$data['valor'] = bcrypt($data['valor']);
        $colegio->update(request()->all());
        return redirect(route('colegio.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegio $colegio)
    {
        if (!$colegio->delete()) {
          return view('error.404');
        }

        return redirect(route('colegio.index'));
    }
}
