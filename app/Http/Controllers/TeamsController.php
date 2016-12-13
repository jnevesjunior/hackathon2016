<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 21/11/16
 * Time: 3:04 PM
 */


class TeamsController extends Controller
{
    public function move($key, $speed, $angle)
    {
        DB::table('teams')
            ->where('key', $key)
            ->update(['angle' => $angle,
                    'speed' => $speed]);

    }
}