<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $page = 'home';
        $sliderdata = Product::inRandomOrder()->limit(1)->get();
        $productlist1 = Product::limit(6)->get();
        return view('home.index', [
            'page' => $page,
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

    public function product($id)
    {

        $data = Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('home.product', [
            'data' => $data,
            'images' => $images
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
