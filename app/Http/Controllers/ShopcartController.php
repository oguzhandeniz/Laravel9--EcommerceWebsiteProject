<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Shopcart::where('user_id',Auth::id())->get();
        return view('home.user.shopcart',[
            'data'=>$data
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data = Shopcart::where('product_id',$id)->where('user_id', Auth::id())->first();
        if ($data)
        {
            $data->quantity = $data->quantity + $request->input('quantity');
        } else
        {
            $data=new Shopcart();
            $data->product_id=$id;
            $data->user_id=Auth::id();
            $data->quantity=$request->input('quantity');
        }
        $data->save();
        return redirect()->back()->with('success','Product Added to Shopcart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Shopcart $shopcart,$id)
    {
        $data=Shopcart::find($id);
        $data->quantity=$request->input('quantity');
        $data->save();
        return redirect()->back()->with('success','Product Updated to Shopcart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart ,$id)
    {
        $data = Shopcart::find($id);
        $data->delete();
        return redirect()->back()->with('success','Product deleted from cart');
    }
}
