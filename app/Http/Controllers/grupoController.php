<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupo;

class grupoController extends Controller
{
    public function Crear(Request $request)
    {
        if ($request->has("nombre") && $request->has("descripcion")) {


            $grupo = new grupo();
            $grupo->nombre = $request->post("nombre");
            $grupo->descripcion = $request->post("descripcion");
            $grupo->save();
            return $grupo;
        }
        return response()->json(["error mesage" => "sos un salame"]);
    }

    public function ListarTodas(Request $request)
    {
        return grupo::all();
    }

    public function ListarUna(Request $request, $id)
    {
        return grupo::findOrFail($id);
    }

    public function Eliminar(Request $request, $id)
    {
        $grupo = grupo::findOrFail($id);
        $grupo->delete();
        return ['mensaje' => 'grupo eliminado'];
    }

    public function Modificar(Request $request, $id)
    {
        $grupo = grupo::findOrFail($id);
        $grupo->nombre = $request->post("nombre");
        $grupo->descripcion = $request->post("descripcion");
        $grupo->save();
        return $grupo;
    }
}
