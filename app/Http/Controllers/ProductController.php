<?php
use App\Products;
namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = DB::select('select * from products');
        //return view('/listProducts',['product'=>$product]);
        //$products = Product::all();
        //return view('products.index', compact('products'));
        //$product =DB::select('select * from products');
       return view('products.listProducts',['product'=>$product]);
     // return \View::make('products.product_insert');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.product_insert');
        //return view('products.edit');
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
       $product = product::create($request->all());
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
        //$product =DB::select('select * from products');
        //return view ('/listProducts');
    }

    public function getProducts()
    {
        $products = product::all();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $products = product::find($id);
        $products->name =  $request->get('name');
        $products->category = $request->get('category');
        $products->slug = $request->get('slug');
        $products->description = $request->get('description');
        $products->price = $request->get('price');
        $products->save();

        return redirect('/products')->with('success', 'product updated!');
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
