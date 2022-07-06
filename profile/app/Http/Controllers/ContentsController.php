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
        $content = new Contents;

    if (isset($request->gambar)) {
            $request->gambar= $request->gambar->store('public/img');
            $request->gambar = str_replace('public/', '', $request->gambar);
            $content->gambar= $request->gambar;
        }

        $content->judul = $request->judul;
        $content->deskripsi = $request->deskripsi;        

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $content->save();

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
        $contents = new Contents;
        $contents = Contents::findOrfail($id);
        

    if (isset($request->gambar)) {
            $request->gambar= $request->gambar->store('public/img');
            $request->gambar = str_replace('public/', '', $request->gambar);
            $contents->gambar= $request->gambar;
        }

        $contents->judul = $request->judul;
        $contents->deskripsi = $request->deskripsi;        

        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $contents->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan');
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
        return redirect()->back()->with('Success', 'Data Successfully Deleted!');
    }
}
