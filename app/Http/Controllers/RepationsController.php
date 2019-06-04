<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reparations;


class RepationsController extends Controller
{
    public function getAll()
    {
        $reparations = Reparations::orderBy('matricula')->get();
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
        $reparations = Reparations::where('fecha', $fecha)
        ->orderBy('matricula')
        ->get();
        return $reparations;
    }
    public function getAllForDesrepara($desrepara)
    {
        $reparations = Reparations::query()
            ->where('desrepara', 'LIKE', "%{$desrepara}%")
            ->orderBy('matricula')
            ->get();
        return $reparations;
    }
    public function getAllForMatriculaAndFecha($matricula, $fecha)
    {
        $reparations = Reparations::query()
            ->where('matricula', $matricula)
            ->where('fecha', $fecha)
            ->orderBy('matricula')
            ->get();
        return $reparations;
    }
    public function getAllForMatriculaFechaAndDesrepara($matricula, $fecha, $desrepara)
    {
        $reparations = Reparations::query()
            ->where('matricula', $matricula)
            ->where('fecha', $fecha)
            ->where('desrepara', 'LIKE', "%{$desrepara}%")
            ->orderBy('matricula')
            ->get();
        return $reparations;
    }
    public function getAllForMatriculaAndDesrepara($matricula, $desrepara)
    {
        $reparations = Reparations::query()
            ->where('matricula', $matricula)
            ->where('desrepara', 'LIKE', "%{$desrepara}%")
            ->ordertBy('matricula')
            ->get();
        return $reparations;
    }
    public function getAllForFechaAndDesrepara($fecha, $desrepara)
    {
        $reparations = Reparations::query()
            ->where('fecha', $fecha)
            ->where('desrepara', 'LIKE', "%{$desrepara}%")
            ->orderBy('matricula')
            ->get();
        return $reparations;
    }
    public function getAllForMatriculaAndFechaAndDesrepara($matricula, $fecha, $desrepara){
        $reparations = Reparations::query()
            ->where('matricula',$matricula)
            ->where('fecha', $fecha)
            ->where('desrepara', 'LIKE', "%{$desrepara}%")
            ->orderBy('matricula')
            ->get();
        return $reparations;

    }
    public function editById($id, Request $request)
    {
        $reparacion = Reparations::find($id);
        $reparacion->fill($request->all())->save();
        return $reparacion;
    }
    public function deleteById($id)
    {
        $reparacion = Reparations::find($id);
        $reparacion->delete();
        return $reparacion;
    }
}
