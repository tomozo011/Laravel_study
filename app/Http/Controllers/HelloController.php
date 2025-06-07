<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use config\sample;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => $request->hello,
        ];

        return view('chpter1.other', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye
        ];

        return view('chpter1.other', $data);
    }

    public function person(Person $person)
    {
        $data = [
            'msg' => $person,
        ];

        return view('chpter1.other', $data);
    }

    public function sampleConfig()
    {
        $sample_msg = config('sample.message');
        $sample_data = config('sample.data');
        $datas = [
            'msg' => $sample_msg,
            'numbers' => $sample_data,
        ];

        return view('chpter1.config', $datas);
    }
}
