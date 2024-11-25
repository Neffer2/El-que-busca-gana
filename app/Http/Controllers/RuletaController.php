<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Premio;
use App\Models\RegistroPremio;
use App\Traits\Mail;
use App\Models\User;

class RuletaController extends Controller
{
    use Mail;

    public function index(Request $request)
    {
        $user = auth()->user();

        if ($user->estado_id == 4) {
            $query = User::query();

            if ($request->has('search_gpid')) {
                $searchGpid = $request->input('search_gpid');
                $query->where('gpid', 'like', "%{$searchGpid}%");
            }

            if ($request->has('search_email')) {
                $searchEmail = $request->input('search_email');
                $query->where('email', 'like', "%{$searchEmail}%");
            }

            $users = $query->paginate(5)->appends($request->except('page'));

            return view('admin', ['users' => $users]);
        } else if ($user->estado_id == 2 || $user->estado_id == 3) {
            $premios = RegistroPremio::where('user_id', $user->id)->get();
            $premios_data = Premio::all();

            return view('dashboard', ['premios' => $premios, 'premios_data' => $premios_data]);
        }

        return view('ruleta');
    }

    public function getPremio(Request $request)
    {
        $premio = Premio::find($request->premio);
        if ($premio->stock < 1) {
            return response()->json([
                'status' => 255, // No stock
                'message' => 'Opps, por el momento no tenemos disponibilidad de este premio. Pero no te preocupes, puedes intentarlo de nuevo.'
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

            $this->mailPremio($premio);

            return response()->json(['status' => 'success']);
        }
    }
}