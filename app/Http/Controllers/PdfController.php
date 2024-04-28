<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function store(Request $request)
    {
        
        return redirect()->route('menu.index')
        ->with('success', 'Menu Berhasil disimpan');
    }
    public function download(Request $request) {

        $request->validate([
            'isi' => 'required|max:255',
            'total_harga' => 'required|numeric',
        ]);

        $pesanan = new Pesanan();
        $pesanan->isi = $request->input('isi');
        $pesanan->total_harga = $request->input('total_harga');

        $pesanan->save();
        
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
    
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
    
        return $pdf->download();
    }
}
