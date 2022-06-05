<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserSalesController extends Controller
{
    /*
      $list = DB::table('orderitems')
                            ->join('products', 'products.id', '=' ,'orderitems.product_id' )
                            ->where('orderitems.user_id' , '=' , 1)
                            ->get();

     $list = Orderitem::where('product_id', Auth::id())->get();

     $datalist = Order::all();
        return view('admin.orders.index', ['datalist' => $datalist]);

     $listname = Order::select('name')->get();

     $datalist = Orderitem::where('user_id', Auth::id())->where('order_id', $id)->get();


    $users = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();

    $users = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();

     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $list = DB::table('products')
            ->join('orderitems', 'orderitems.product_id', '=', 'products.id')
            ->join('users', 'users.id', '=', 'orderitems.user_id')
            ->where('products.user_id', '=', Auth::id())
            ->get();

        return view('home.user.sales', [
            'list' => $list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
