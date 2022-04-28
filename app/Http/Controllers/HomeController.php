<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*

     Normal veri çekmek için kullanılır:
     $sliderdata=Product::limit(1)->get();

     Random veri çekmek için kullanılır:
     $sliderdata=Product::inRandomOrder()
                                ->limit(1)
                                ->get();

     Random veri çekmek için kullanılır:
      User::all()->random(10);



     */
    public function index()
    {
        $sliderdata = Product::inRandomOrder()
            ->limit(1)
            ->get();

        $productlist1 = Product::inRandomOrder()
            ->limit(6)
            ->get();
        return view('home.index', [

            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
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
