<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\PostDec;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $menu = new Menu();
        $menu->nama = $request->input('nama');
        $menu->harga = $request->input('harga');
        $menu->kategori = $request->input('kategori');

        if ($request->hasFile('foto')) {    
            $namaFoto = $request->file('foto')->store('img/menu', 'public');
            $menu->foto = $namaFoto;
        }

        $menu->save();
        // Menu::create($request->all());
        return redirect()->route('menu.index')
        ->with('success_tambah', 'Menu Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        if ($request->hasFile('foto')) {

            Storage::delete('public/' . $menu->foto);
    
            $namaFoto = $request->file('foto')->store('img/menu', 'public');
            $menu->foto = $namaFoto;
        }
        
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        $menu->kategori = $request->kategori;
        $menu->save();

        return redirect()->route('menu.index')
        ->with('success_ubah', 'Menu Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        Storage::delete('public/' . $menu->foto);
        $menu->delete();
        return redirect()->route('menu.index')
        ->with('success_hapus', 'Menu Berhasil dihapus');
    }
}
