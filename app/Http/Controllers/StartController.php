<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 20/11/16
 * Time: 1:14 PM
 */
class StartController extends Controller
{
    public function start($idMatrices, $teamName)
    {
        try {
            $team = DB::table('teams')->insert([
                'idMatrices' => $idMatrices,
                'key' => md5($teamName . str_random(10)),
                'name' => $teamName,
                'cordX' => 1,
                'cordY' => 1,
                'angle' => 0,
                'speed' => 0,
                'active' => 1,
            ]);
            dd(DB::table('teams')->get(), $team);
        } catch (Exception $e) {

        }

    }
}