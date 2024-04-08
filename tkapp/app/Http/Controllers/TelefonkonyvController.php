<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefonkonyv;

class TelefonkonyvController extends Controller
{
    public function index()
    {
        
        return view('index');
    }

    public function mentes(Request $request)
    {
        
        $request->validate([
            'nev' => 'required',
            'email' => 'required|email|unique:telefonkonyv,email',
            'telefonszam' => 'nullable',
            'lakcim' => 'required',
            'levelezesicim' => 'nullable',
        ]);

        
        Telefonkonyv::create([
            'nev' => $request->nev,
            'email' => $request->email,
            'telefonszam' => $request->telefonszam,
            'lakcim' => $request->lakcim,
            'levelezesicim' => $request->levelezesicim ?: $request->lakcim,
        ]);

    
        return redirect()->route('telefonkonyv.index')->with('success', 'Adatok sikeresen mentve!');
    }
}
