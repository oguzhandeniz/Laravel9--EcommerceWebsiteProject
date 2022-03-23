<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [

        ]);
    }
    public function test()
    {
        echo $this->test();
        exit();
    }

    public function show()
    {
        $university = " Karabuk University";
        $dept = " Computer Engineering";

        return view('show', [
            'university' => $university,
            'dept' => $dept
        ]);
    }

}
