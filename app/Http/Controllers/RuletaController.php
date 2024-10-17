<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Premio;
use App\Models\RegistroPremio;

class RuletaController extends Controller
{
    public function index()
    {
        if (auth()->user()->estado_id != 1) {return redirect()->route('logout');}

        return view('dashboard');
    }

    public function getPremio(Request $request)
    {
        $premio = Premio::find($request->premio);
        if ($premio->stock < 1){
            return response()->json([
                'status' => 255, // No stock
                'message' => 'Opps, este premio no cuenta con Stock disponible, inténtalo de nuevo.'
            ]);
        }

        if ($premio->stock > 0) {
            $premio->stock = $premio->stock - 1;
            $premio->save();

            $registro_premio = new RegistroPremio;
            $registro_premio->user_id = auth()->user()->id;
            $registro_premio->premio_id = $request->premio;
            $registro_premio->save();

            $user = auth()->user();
            $user->estado_id = 3;
            $user->save();

            return response()->json(['status' => 'success']);
        }
    }
}
