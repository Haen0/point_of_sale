<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        $pesanan = new Pesanan();
        $pesanan->isi = $request->input('isi');
        $pesanan->total_harga = $request->input('total_harga');

        $pesanan->save();
        return redirect()->route('menu.index')
        ->with('success', 'Menu Berhasil disimpan');
    }
}
