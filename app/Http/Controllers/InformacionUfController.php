<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DB;

class InformacionUfController extends Controller
{
   public function index(){
    return view('show');
   }
   public function getMembers(){
      $informaciones = Informacion::all();
    
      return view('informacionlist', compact('informaciones'));
 
  }
   
  public function save(Request $request){
      if ($request->ajax()){
          $info = new Informacion;
          $info->id = $request->input('id');
          $info->nombreIndicador = $request->input('nombreIndicador');
          $info->codigoIndicador = $request->input('codigoIndicador');
          $info->unidadMedidaIndicador = $request->input('unidadMedidaIndicador');
          $info->valorIndicador = $request->input('valorIndicador');
          $info->fechaIndicador = $request->input('fechaIndicador');
          $info->tiempoIndicador = $request->input('tiempoIndicador');
          $info->origenIndicador = $request->input('origenIndicador');

          $info->save();
          return response($info);
      }
  }
  public function saveDts(Request $request){  
      $desde= $request->input('desde');
      $hasta= $request->input('hasta');
      $infos = Informacion::whereBetween('fechaIndicador', [$desde, $hasta])->get();

            return view('charts', compact('infos'));

}
  public function delete(Request $request){
      if ($request->ajax()){
         Informacion::destroy($request->id);
      }
  }

  public function update(Request $request){
      if ($request->ajax()){
          $info = Informacion::find($request->id);
          $info->nombreIndicador = $request->input('nombreIndicador');
          $info->codigoIndicador = $request->input('codigoIndicador');
          $info->unidadMedidaIndicador = $request->input('unidadMedidaIndicador');
          $info->valorIndicador = $request->input('valorIndicador');
          $info->fechaIndicador = $request->input('fechaIndicador');
          $info->tiempoIndicador = $request->input('tiempoIndicador');
          $info->origenIndicador = $request->input('origenIndicador');

          $info->update();
          return response($info);
      }
  }
}
