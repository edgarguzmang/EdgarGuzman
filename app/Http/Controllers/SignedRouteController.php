<?php

namespace App\Http\Controllers;

use App\Models\codes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignedRouteController extends Controller
{
    public function generarVerificacion(){
        $codigo_verf = rand(10000, 99999);
        $user = Auth::user();
        $registro = codes::find($user->id);
        $registro->codigo = $codigo_verf;
        $registro->save();
        return view('gncode')->with('codigo',$codigo_verf);
    }
}
