<?php
/**
 * Created by PhpStorm.
 * User: joseneves
 * Date: 08/12/16
 * Time: 7:07 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function view($privateKey) {
        $this->validatePrivateKey($privateKey);
        return view('view');
    }

    public function ajax($privateKey) {
        $this->validatePrivateKey($privateKey);
        $teams = DB::table('teams')->get();

        return response()->json($teams);
    }

    public function score($privateKey){
        $this->validatePrivateKey($privateKey);
        return view('score');
    }

    public function ajaxScore($privateKey) {
        $this->validatePrivateKey($privateKey);
        $teams = DB::table('teams')->where('id', '<>','10')->orderBy('score', 'desc')->get();

        return response()->json($teams);
    }

    private function validatePrivateKey($privateKey) {
        if ($privateKey == '209503e0c0e803979fd1e75ec4051f98') {
            return true;
        }
        exit();
    }

}