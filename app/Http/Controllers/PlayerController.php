<?php
/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 07/12/16
 * Time: 8:45 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function control(Request $request, $key) {
        $params = $request->input();

        if(!isset($params['heading']) || !isset($params['move'])) {
            return response()->json(['message' => 'Invalid parameters'], 422);
        }

        $angle = $params['heading'];
        $speed = $params['move'] ? 1 : 0;

        $angle = intval($angle) % 360;

        if ($angle < 0 || !is_numeric($angle)) {
            return response()->json(['message' => 'Invalid angle'], 422);
        }

        $team = DB::table('teams')->where('key', $key)->first();

        if (!$team) {
            return response()->json(['message' => 'Team not found'], 400);
        }

        DB::table('teams')
            ->where('key', $key)
            ->update(['angle'   => $angle,
                    'speed'     => $speed]);

        return response('', 200);
    }

    public function radar($key) {
        $team = DB::table('teams')->where('key', $key)->first();

        if (is_null($team)) {
            return response()->json([
                'message' => 'Team not found',
            ], 400);
        }

        return response()->json([
            'x' => $team->cordX,
            'y' => $team->cordY,
            'closest' => $team->radar,
        ]);

    }

    public function balls($key) {
        $round = DB::table('capture')->where('key', $key)->orderBy('time', 'desc')->first();

        if ($round == null) {
            return response()->json([
                'message' => 'Team not found',
            ], 400);
        }

        $balls = DB::table('capture')->where('round', $round->round)->get();

        return response()->json(['balls' => count($balls)]);
    }
}