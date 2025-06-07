<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $rewuest) {
        $data = [
            'msg' => 'SAMPLE-index'
        ];

        return view('chpter1.other', $data);
    }

    public function other(Request $rewuest) {
        $data = [
            'msg' => 'SAMPLE-other'
        ];

        return view('chpter1.other', $data);
    }
}
