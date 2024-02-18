<?php

namespace App\Http\Controllers;

use App\Models\Liste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ListeController extends Controller
{

    public function index()
    {
        $listes = Liste::all();
        return view('home', compact('listes'));
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'metin' => 'required'
        ]);

        Liste::create($data);
        return back();
    }




    public function destroy(Liste $liste)
    {
        $liste->delete();
        return back();
    }
}
