<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reparations;


class RepationsController extends Controller
{
    public function getAll()
    {
        $reparations = Reparations::all();
        return $reparations;
    }
    public function add(Request $request)
    {
        $reparation = Reparations::create($request->all());
        return $reparation;
    }
    public function getAllForMatricula($matricula)
    {
        $reparations = Reparations::where('matricula', $matricula)->get();
        return $reparations;
    }
    public function getAllForFecha($fecha)
    {
        $reparations = Reparations::where('fecha', $fecha)->get();
        return $reparations;
    }
    public function getAllForDesrepara($desrepara)
    {
        $reparations = Reparations::query()
            ->where('desrepara', 'LIKE', "%{$desrepara}%")
            ->get();
        return $reparations;
    }
    public function getAllForMatriculaAndFecha($matricula, $fecha){
        $reparations=Reparations::query()
            ->where('matricula', $matricula)
            ->where('fecha', $fecha)
            ->get();
        return $reparations;
    }
    public function editById($id, Request $request){
        $reparacion=Reparations::find($id);
        $reparacion->fill($request->all())->save();
        return $reparacion;
    }
    public function deleteById($id){
        $reparacion=Reparations::find($id);
        $reparacion->delete();
        return $reparacion;
    }
}
