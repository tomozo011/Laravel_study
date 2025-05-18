<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

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
}
