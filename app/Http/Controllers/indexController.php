<?php
namespace App\Http\Controllers;

use App\MyClass\MyServices;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(MyServices $myservice, int $id = -1) {
        // $myservice->setId($id);
        $myservice = app()->makeWith('app\MyClass\MyServices', ['$id' => $id]);

        $msg = $myservice->say($id);
        $datas = $myservice->alldata();

        return view('index', compact('msg', 'datas'));
    }

    public function hello()
    {
        return redirect()->route('Hello');
    }
}
