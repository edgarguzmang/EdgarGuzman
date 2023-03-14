<?php

namespace App\Http\Controllers;
use App\Models\Codigo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
class Verificar extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      
        if (! $request->hasValidSignature()) {
            abort(401);
        }
    
        else{
            $codigo = rand(10000, 99999);
            $codigo_dos = rand(10000, 99999);
            
            
            //$num = random_int(1000, 9999);

            $user = Auth::user();
    
            $code = Codigo::create([
                'codigo' => ( $codigo),
                'codigo_dos' => ( $codigo_dos),
                'active' => true,
                'user_id' => $user->id,  
            ]);
    
            $code->save();



           
            return view('gncode', ["codigo" => $codigo]);
           
           // return view('gncode');
        }
        //return view('gncode')->with('codigo',$codigo_verf);
        
    }

    public function storeMovil(Request $request)
    {
        $code_mobil = $request->code;

        $codes = Codigo::where('active', true)->get();

        foreach ($codes as $code) {
            if (Hash::check($code_mobil, $code->code)) {

                $code->active = false;

                $code->save();

                
                $num = random_int(1000, 9999);
                $num2 = random_int(1000, 9999);
                Codigo::create([
                    'codigo' => Hash::make($num),
                    'codigo_dos' => Hash::make($num2),
                    'active' => true,
                    'user_id' => $code->user_id,
                    'active' => true,
                ]);

                return response()->json($num, 200);
            }
        }
        return response()->json('Codigo No Valido', 400);
    }



    public function storeWeb(Request $request)
    {
        $datos = $request->all();

        $comparacion = $datos['code'];
        

        $codigo_en_bd = DB::table('codes')->where('codigo', $comparacion)->value('codigo');
        
        if ($codigo_en_bd == $comparacion) {
            $codigo_verf_2 = rand(10000, 99999);
            DB::table('codes')->where('codigo', $comparacion)->update(['codigo_dos' => $codigo_verf_2]);
            return response()->json(['mensaje' => $codigo_verf_2]);
        } else {
            return response()->json(['mensaje' => 'Código inválido']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
