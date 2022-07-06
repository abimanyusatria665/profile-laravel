<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;


class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contents']=Contents::all();
        return view('crud.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
public function store(Request $request)
    {
        $complaint = new Contents;

    if (isset($request->gambar)) {
            $request->gambar= $request->gambar->store('public/img');
            $request->gambar = str_replace('public/', '', $request->gambar);
            $complaint->gambar= $request->gambar;
        }
        $complaint->judul = $request->judul;
        $complaint->deskripsi = $request->deskripsi;

        

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $complaint->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['contents']= Contents::find($id);
        return view('crud.edit', $data);
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
        $contents= Contents::findOrfail($id);
        $data=[
            'gambar'=>$request->gambar,
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi
        ];

        $contents->update($data);
        return redirect()->route('crud.index')->with('Success', 'Data Content Successfully Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contents = Contents::find($id);
        $contents->delete();
        return redirect()->route('crud.index')->with('Success', 'Data Successfully Deleted!');
    }
}
