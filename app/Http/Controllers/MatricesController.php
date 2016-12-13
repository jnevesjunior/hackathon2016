<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use DateTime;

/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 21/11/16
 * Time: 8:45 AM
 */
class MatricesController extends Controller
{
    public function create($idMaps)
    {
        try {
            $idMatrice = DB::table('matrices')->insertGetId([
                'idMaps' => $idMaps,
                'active' => 1,
            ]);
            return response()->json(['Id Matrix' => $idMatrice]);
        } catch (Exception $e) {

        }
    }
}