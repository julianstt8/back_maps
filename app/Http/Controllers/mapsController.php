<?php

namespace App\Http\Controllers;

use App\Models\mapsModel;
use Illuminate\Http\Request;

class mapsController extends Controller
{
    /**
     * Se encarga de insertar un nuevo punto
     */
    public function addMarker(Request $request)
    {
        try {
            $insertMarker = [
                'latitud' => +$request->lat,
                'longitud' => +$request->lon
            ];
            mapsModel::insert($insertMarker);
            return response()->json(['status' => 1]);
        } catch (\Throwable $th) {
            if ($th->getMessage() !== null) {
                return response()->json(['status' => 0, 'message' => $th->getMessage() . " en la línea " . $th->getLine()]);
            } else {
                return response()->json(['status' => 0, 'message' => $th]);
            }
        }
    }

    /** ELiminamos un punto especifico
     * !se recibe id_marker
     */
    public function deleteMarker(Request $request)
    {
        try {
            mapsModel::where('id_marker', $request->id_marker)->delete();
            return response()->json(['status' => 1]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 0, 'message' => $th]);
        }
    }

    /** Editar punto existente */
    public function editMarker(Request $request)
    {
        try {
            mapsModel::where('id_marker', $request->id_marker)->update(['latitud' => +$request->lat, 'longitud' => +$request->lon]);
            return response()->json(['status' => 1]);
        } catch (\Throwable $th) {
            return response()->json(['stauts' => 0, 'message' => $th]);
        }
    }

    /**
     * Consulta todos los puntos
     */
    public function getMarker()
    {
        try {
            $res = mapsModel::all();
            return response()->json(['status' => 1, 'message' => $res]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 0, 'message' => $th]);
        }
    }

    /** Trae punto segun el
     * *id_marker
     * enviadoo
     */
    public function getMarkerById(Request $request)
    {
        try {
            $res = mapsModel::find($request->id_marker);
            return response()->json(['status' => 1, 'message' => $res]);
        } catch (\Throwable $th) {
            return response()->json(['status' => 0, 'message' => $th]);
        }
    }
}
