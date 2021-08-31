<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $rq){

        $location = $rq->input('Location');
        $Property = $rq->input('Property');
        $room = $rq->input('room');
        $broom= $rq->input('bathroom');
        return view('serch',['Loc' => $location]);

    }
}
