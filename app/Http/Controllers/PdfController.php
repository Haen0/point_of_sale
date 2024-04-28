<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function download(Request $request) {

        $request->validate([
            'isi' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        $pesanan = new Pesanan();
        $pesanan->isi = $request->input('isi');
        $pesanan->total_harga = $request->input('total_harga');

        $pesanan->save();

        $isiJsonString = $request->input('isi');

        $isiArray = json_decode($isiJsonString, true);

        $data = [];

        foreach ($isiArray as $itemId => $itemDetail) {
            $nama = $itemDetail['nama'];
            $harga = $itemDetail['harga'];
            $qty = $itemDetail['qty'];

            $data[] = [
                'nama' => $nama,
                'harga' => $harga,
                'qty' => $qty,
            ];
        }
    
        $pdf = Pdf::loadView('pdf', ['data' => $data, 'total_harga' => $pesanan->total_harga]);
        $customPaper = array(0, 0, 110, 500);
        $pdf->setPaper($customPaper);

        return $pdf->download();
    }
}
