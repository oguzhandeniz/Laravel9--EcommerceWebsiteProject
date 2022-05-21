<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

     $productlist2 = Product::limit(4)->get();

    $orders = DB::table('orders')
                ->select('department', DB::raw('SUM(price) as total_sales'))
                ->groupBy('department')
                ->havingRaw('SUM(price) > ?', [2500])
                ->get();

     */

    public function index()
    {
        $page = 'home';
        $sliderdata = Product::inRandomOrder()->limit(3)->get();
        $productlist1 = Product::inRandomOrder()->limit(6)->get();
        $productlist2 = Product::limit(4)->get();
        $setting = Setting::first();
        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1,
            'productlist2' => $productlist2
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

    public function faq()
    {

        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'datalist' => $datalist,
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

    public function storecomment(Request $request)
    {
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('product', ['id' => $request->input('product_id')])->with('info', 'Your comment has been sent, Thank You.');
    }

    public function product($id)
    {
        $data = Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        $reviews = Comment::where('product_id', $id)->where('status', 'True')->get();
        return view('home.product', [
            'data' => $data,
            'images' => $images,
            'reviews' => $reviews
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('home');
    }

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
