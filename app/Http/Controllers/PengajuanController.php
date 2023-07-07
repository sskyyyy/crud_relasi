<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;//add Pengajuan Model - Data is coming from the database via Model.

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan = Pengajuan::all();
        return view ('pengajuan.index')->with('pengajuan',$pengajuan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengajuan.create');
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
        Pengajuan::create($input);

        return redirect('pengajuan')->with('flash_message', 'pengajuan Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('pengajuan.show')->with('pengajuan', $pengajuan);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('pengajuan.edit')->with('pengajuan', $pengajuan);
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
        $pengajuan = Pengajuan::find($id);
        $input =$request->all();
        $pengajuan->update($input);
        return redirect('pengajuan')->with('flash_message', 'pengajuan Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Pengajuan::destroy($id);
        return redirect('pengajuan')->with('flash_message', 'Pengajuan deleted!');
    }
}
