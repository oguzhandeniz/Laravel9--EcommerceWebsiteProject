<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        //
        $product = Product::find($pid);
        //$images = Image::where('product_id', $pid);
        $images = DB::table('images')->where('product_id', $pid)->get();

        return view('admin.image.index', [
            'product' => $product,
            'images' => $images
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pid)
    {
        //
        $data = new Image();
        $data->product_id = $pid;
        $data->title = $request->title;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index', ['pid' => $pid]);
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
    public function update(Request $request, $pid, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid, $id)
    {
        //
        $data = Image::find($id);
        if ($data->img && Storage::disk('public')->exists($data->img)) {
            Storage::delete($data->img);
        }
        $data->delete();
        return redirect()->route('admin.image.index', ['pid' => $pid]);
    }
}
