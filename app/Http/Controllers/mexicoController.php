<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ciudad;
use App\estado;
use Illuminate\Support\Facades\DB;


class mexicoController extends Controller
{
 public function getEstados(){
     return view('estados');
 }


 public function getEstadosAndMunicipios(){

    // return ciudad::all();

    return DB::table('municipios')
            ->leftJoin('ciudad', 'municipios.id', '=', 'ciudad.id_municipio')
            ->get();


 }
}
