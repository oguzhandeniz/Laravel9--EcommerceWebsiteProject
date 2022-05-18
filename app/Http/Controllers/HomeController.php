<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
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
        $sliderdata = Product::inRandomOrder()->limit(3)->get();
        $productlist1 = Product::inRandomOrder()->limit(6)->get();
        $setting = Setting::first();
        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting
        ]);
    }

    public function storemessage(Request $request)
    {
      //  dd($request);

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank You.');
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

    public function categoryproducts($id)
    {
        $category = Category::find($id);
        $products = DB::table('products')->where('category_id', $id)->get();
        return view('home.categoryproducts', [
            'category' => $category,
            'products' => $products
        ]);
    }

    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

}
