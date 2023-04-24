<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class NilaiController extends Controller
{
    public function showNilai($Nim)
    {
        $Mahasiswa = Mahasiswa::find($Nim);
        return view('detailnilai', compact('Mahasiswa'));
    }
}
