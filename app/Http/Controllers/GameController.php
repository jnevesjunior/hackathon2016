<?php
/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 07/12/16
 * Time: 9:35 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function game(Request $request, $privateKey) {
        $this->validatePrivateKey($privateKey);
        $teams = $request->input();

        foreach ($teams as $team) {
            DB::table('teams')
                ->where('key', $team['key'])
                ->update([  'cordX' => $team['cordX'],
                            'cordY' => $team['cordY'],
                            'radar' => $team['radar']
                ]);
        }

        $teamsUp = DB::table('teams')->get();
        $json['c2dictionary'] = true;

        foreach ($teamsUp as $teamUp) {
            $json['data'][$teamUp->id] = $teamUp->speed.','.$teamUp->angle;
        }

        return response()->json($json);
    }

    public function balls($roud, $key, $ball) {
        $team = DB::table('teams')->where('key', $key)->first();

        $score = DB::table('capture')
            ->where('round', $roud)
            ->where('ball_id', $ball)
            ->get();

        switch (count($score)) {
            case 0: $scoreValue = 10;
                break;
            case 1: $scoreValue = 8;
                break;
            case 2: $scoreValue = 6;
                break;
            default: $scoreValue = 4;
                break;
        }

        DB::table('teams')
            ->where('key', $key)
            ->update(['score' => $team->score + $scoreValue]);


        DB::table('capture')->insert([
            'round'   =>  $roud,
            'key' =>  $key,
            'ball_id'   =>  $ball,
        ]);
    }

    public function config($privateKey) {
        $this->validatePrivateKey($privateKey);
        $config = DB::table('config')->get();

        return response()->json($config);
    }

    public function clear($privateKey) {
        $this->validatePrivateKey($privateKey);

        DB::table('capture')->truncate();
        DB::table('teams')->update(['score' => '0']);

        return response()->json(['status' => 'ok']);
    }

    public function score($privateKey, $key, $scoreValue) {
        $this->validatePrivateKey($privateKey);

        $team = DB::table('teams')->where('key', $key)->first();

        DB::table('teams')
            ->where('key', $key)
            ->update(['score' => $team->score + $scoreValue]);
    }

    public function zero($privateKey) {
        $this->validatePrivateKey($privateKey);

        DB::table('teams')->update(['speed' => 0]);
    }

    private function validatePrivateKey($privateKey) {
        if ($privateKey == '209503e0c0e803979fd1e75ec4051f98') {
            return true;
        }
        exit();
    }
}