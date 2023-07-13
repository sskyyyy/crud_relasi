<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;//add Kelas Model - Data is coming from the database via Model.

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view ('kelas.index')->with('kelas',$kelas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Kelas::create($input);

        return redirect('kelas')->with('flash_message', 'kelas Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.show')->with('kelas', $kelas);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit')->with('kelas', $kelas);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $kelas = Kelas::find($id);
        $input =$request->all();
        $kelas->update($input);
        return redirect('kelas')->with('flash_message', 'kelas Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Kelas::destroy($id);
        return redirect('kelas')->with('flash_message', 'Kelas deleted!');
    }
}
