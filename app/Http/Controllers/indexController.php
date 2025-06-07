<?php
namespace App\Http\Controllers;

use App\MyClass\MyServices;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(MyServices $myservice, int $id = -1) {
        // $myservice->setId($id);
        // $myservice = app()->makeWith('app\MyClass\MyServices', ['$id' => $id]);

        // $msg = $myservice->say($id);
        // $datas = $myservice->alldata();
    }

    public function hello()
    {
        return redirect()->route('Hello');

    }
    public function where($id)
    {
        $data = [
            'msg' => 'id'. $id,
        ];
        return view('chpter1.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye
        ];

        return view('chpter1.other', $data);
    }
}
