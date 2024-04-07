<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefonkonyv;

class TelefonkonyvController extends Controller
{
    public function index()
    {
        // Itt lehetőség van adatok betöltésére és nézet megjelenítésére
        return view('index');
    }

    public function mentes(Request $request)
    {
        // Validáció
        $request->validate([
            'nev' => 'required',
            'email' => 'required|email|unique:telefonkonyv,email',
            'telefonszam' => 'nullable',
            'lakcim' => 'required',
            'levelezesicim' => 'nullable',
        ]);

        // Adatok mentése az adatbázisba
        Telefonkonyv::create([
            'nev' => $request->nev,
            'email' => $request->email,
            'telefonszam' => $request->telefonszam,
            'lakcim' => $request->lakcim,
            'levelezesicim' => $request->levelezesicim ?: $request->lakcim,
        ]);

        // Visszairányítás az index oldalra
        return redirect()->route('telefonkonyv.index')->with('success', 'Adatok sikeresen mentve!');
    }
}
