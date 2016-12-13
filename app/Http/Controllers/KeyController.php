<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 20/11/16
 * Time: 1:14 PM
 */
class KeyController extends Controller
{
    public function key($key)
    {
        try {
            $team = DB::table('teams')->where('key', $key)->first();

            if ($team) {
                $json = ['Name' => $team->name];
            } else {
                $json = ['error' => 'Key not found'];
            }

            return response()->json($json);
        } catch (Exception $e) {

        }
    }
}