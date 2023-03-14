<?php

namespace App\Http\Controllers;

use App\Models\codigos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NuevoCodigoController extends Controller
{
    public function validacion(Request $request){
        $datos = $request->all();

        $comparacion = $datos['code'];
        

        $codigo_en_bd = DB::table('codigos')->where('codigo', $comparacion)->value('codigo');
        
        if ($codigo_en_bd == $comparacion) {
            $codigo_verf_2 = rand(10000, 99999);
            DB::table('codigos')->where('codigo', $comparacion)->update(['codigo_dos' => $codigo_verf_2]);
            return response()->json(['mensaje' => $codigo_verf_2]);
        } else {
            return response()->json(['mensaje' => 'Código inválido']);
        }
    }
}
