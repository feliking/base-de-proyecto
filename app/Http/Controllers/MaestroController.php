<?php

namespace App\Http\Controllers;

use App\Colegio;
use App\Maestro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all();
        $count = 0;
        return view('maestro.index', compact('maestros', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colegios = Colegio::all();
        return view('maestro.create', compact('colegios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($image = request()->file('foto')) {
          $upload = $image->store('fotos', 'public');
        }
        else {
          $upload = 'empty';
        }
        $data = request()->validate([
          'ci' => 'required | unique:maestros',
          'nombre' => '',
          'colegio_id' => 'required',
          'materia' => '',
          'experiencia' => '',
          'image' => ''
        ]);

        Maestro::create([
          'ci' => $data['ci'],
          'nombre' => $data['nombre'],
          'colegio_id' => $data['colegio_id'],
          'materia' => $data['materia'],
          'experiencia' => $data['experiencia'],
          'image' =>  $upload
        ]);
        return redirect(route('maestro.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        $colegios = Colegio::all();
        return view('maestro.edit', compact('colegios', 'maestro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maestro $maestro)
    {
      if ($image = request()->file('foto')) {
        $upload = $image->store('fotos', 'public');
      }
      else {
        $upload = 'empty';
      }
      $data = request()->validate([
        'ci' => 'required',
        'nombre' => '',
        'colegio_id' => 'required',
        'materia' => '',
        'experiencia' => '',
        'image' => ''
      ]);
      $maestro->update([
        'ci' => $data['ci'],
        'nombre' => $data['nombre'],
        'colegio_id' => $data['colegio_id'],
        'materia' => $data['materia'],
        'experiencia' => $data['experiencia'],
        'image' =>  $upload
      ]);
      //data_set($data, 'foto', $upload);
      //$data['foto'] = $image->store('fotos', 'public');
      //$maestro->update($data);
      return redirect(route('maestro.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maestro $maestro)
    {
        Storage::disk('public')->delete($maestro->image);
        $maestro->delete();
        return redirect(route('maestro.index'));
    }
}
