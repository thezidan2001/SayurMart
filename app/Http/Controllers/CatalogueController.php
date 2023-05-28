<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        // dd($products);
        return view('catalogue', ['products' => $products]);
    }

    public function searchProduct(Request $request){
        $cari = $request->cari;
		$products = Product::where('product_name','like',"%".$cari."%")->paginate(10);
		return view('catalogue', ['products' => $products]);
    }

    public function showProduct($id){
        $product = Product::where('id',$id)->firstOrFail();
        return view('product', ['product' => $product]);
    }

    public function indexAdmin(){
        return view('product.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
        if (!empty($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $destinationPath = 'build/assets/images/items/';
            $request->image->move(public_path($destinationPath), $imageName);
            $product->image = $imageName;
        }
        $product->save();
        return redirect(route('admin.catalogue'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    public function edit($id)
    {
        $data = Product::where('id', $id)->first();
        return view('product.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
