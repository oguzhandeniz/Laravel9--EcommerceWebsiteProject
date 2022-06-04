<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Order::all();
        return view('admin.orders.index', ['datalist' => $datalist]);
    }

    public function list($status)
    {
        $datalist = Order::where('status',$status)->get();
        return view('admin.orders.index', ['datalist' => $datalist]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        $data = Order::find($id);
        $datalist = Orderitem::where('order_id', $id)->get();
        return view('admin.orders.show', ['data' => $data , 'datalist' => $datalist]);
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
    public function update(Request $request, Order $order, $id)
    {
        $data = Order::find($id);
        $data->status = $request -> input('status');
        $data->note = $request -> input('note');
        $data->save();
        return redirect()->back()->with('Success','Order Updated');
    }

    public function itemupdate(Request $request, Order $order, $id)
    {
        $data = Orderitem::find($id);
        $data->status = $request -> input('status');
        $data->note = $request -> input('note');
        $data->save();
        return redirect()->back()->with('Success','Order Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
