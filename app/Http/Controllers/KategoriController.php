<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Kategori";
        $kategori = Kategori::orderBy('nama_kategori', 'ASC')->get();
        return view('kategori.index', compact('title','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi input form
        $this->validate($request, [
            'name' => 'required|string'
        ]);

        // insert ke db menggunakan eloquent 
        // $kategori = Kategori::create([
        //     'nama_kategori' => $request->name
        // ]);

        $kategori = Kategori::firstOrCreate([
            'nama_kategori' => $request->name
        ]);

        return redirect()->route('kategori.index')->with(['success' => 'Berhasil menambahkan kategori!']);
    }

    /**
     * Display the specified resource.
     
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // cek data ada atau tidak
        // $kategori = Kategori::where('id', '=', $id)->first();

        // cek data ada atau tidak
        // if ($kategori) {
        //     $kategori->delete();
        //     return redirect()->route('kategori.index')->with(['success' => 'Kategori berhasil dihapus!']);
        // }else{
        //     return redirect()->route('kategori.index');
        // }
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();
            return redirect()->route('kategori.index')->with(['success' => 'Kategori berhasil dihapus!']);
        } catch (\Throwable $th) {
            dd($th->getErrorMessage());
        }
        
    }
}
