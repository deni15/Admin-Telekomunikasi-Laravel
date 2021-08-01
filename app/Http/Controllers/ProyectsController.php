<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $proyects = Proyect::all();
        return view('dashboard.proyect.listProyect', compact('proyects', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('dashboard.proyect.addProyect', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'no_telp'           => 'required',
            'email'             => 'required',
            'alamat_proyect'    => 'required',
            'nama_proyect'      => 'required',
            'biaya'             => 'required',
            'teknisi'           => 'required',
            'nama_lokasi'       => 'required',
            'longitude'         => 'required',
            'latitude'           => 'required'

        ]);

        //cara manual
        $proyects = new proyect;
        $proyects->Costumer = $request->nama;
        $proyects->no_telp = $request->no_telp;
        $proyects->email_costumer = $request->email;
        $proyects->Jenis_proyect = $request->nama_proyect;
        $proyects->alamat_proyect = $request->alamat_proyect;
        $proyects->biaya = $request->biaya;
        $proyects->teknisi_id = $request->teknisi;
        $proyects->lokasi_proyect = $request->nama_lokasi;
        $proyects->longitude = $request->longitude;
        $proyects->latitude = $request->latitude;

        $proyects->save();

        return redirect('/proyects')->with('status', 'User Baru Berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect $proyect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $proyect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect $proyect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
        //
    }
    public function maps(Proyect $proyect)
    {
        //$proyects = Proyect::all()->where('id', $proyect->id);
        $proyects = Proyect::find($proyect->id);
        //$proyects = DB::table('proyects')->get()->where('id', $proyect);
        // return $proyects;
        //dump($proyects);
        return view('dashboard.map.maps', compact('proyects'));
        // return view('dashboard.map.maps', compact('proyects'));
    }

    public function print()
    {
        $proyects = Proyect::all();
        return view('dashboard.proyect.print', compact('proyects'));
    }
}
