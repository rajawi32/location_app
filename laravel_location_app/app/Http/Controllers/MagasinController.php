<?php

namespace App\Http\Controllers;

use App\Models\Magasin;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    public function index()
    {
        $magasins = Magasin::paginate(5);
        $count = Magasin::count();
        return view('magasins.index', compact("magasins", "count"));
    }
    public function create()
    {
        return view('magasins.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'surface' => 'required|numeric',
                'loyer_mensuel' => 'required|numeric'
            ]
        );
        Magasin::create($validatedData);
        return redirect()->route('magasins.index');
    }
    public function edit($id)
    {
        $magasin = Magasin::find($id);
        return view('magasins.edit', compact('magasin'));
    }
    public function update(Request $request, $id)
    {
        $magasin = Magasin::find($id);
        $validatedData =  $request->validate(
            [
                'surface' => 'required|numeric',
                'loyer_mensuel' => 'required|numeric'
            ]
        );
        $magasin->update($validatedData);
        return redirect()->route('magasins.index');
    }
    public function destroy($id)
    {
        $magasin = Magasin::find($id);
        $magasin->delete();
        return redirect()->route('magasins.index');
    }
}
