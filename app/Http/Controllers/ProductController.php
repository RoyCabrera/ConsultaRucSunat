<?php

namespace App\Http\Controllers;

use App\Product;
use App\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsCollection;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index(Request $request)
    {
        $products=Product::paginate(15);
        if($request->wantsJson())
        {
//            return $products->toJson();
            return new ProductsCollection($products);
        }
        return view('products.index')->with(compact('products','shopping_cart'));
    }


    public function create()
    {
        //
        $product = new Product();
        return view('products.create')->with(compact('product'));
    }


    public function store(Request $request)
    {
        //
        $options=[
            'title'=>$request->title,
            'description'=>$request->description,
            'price' => $request->price
        ];

        if (Product::create($options))
        {
            return redirect('/productos');
        }
        else
        {
            return view('products.create');
        }

//        $producto= new ProductsCollection();
//        $producto->title=$request->title;
//        $producto->description=$request->description;
//        $producto->price=$request->price;
//        $producto->save();
    }

    public function show($id)
    {
        //
    $product=Product::find($id);
    return view('products.show')->with(compact('product'));
    }


    public function edit($id)
    {
        //
        $product= Product::find($id);

        //Primera manera de enviar la instancia a la vista
        return view("products.edit",["product"=>$product]);
        //Segunda Manera de enviar la instancia a la vista
        //return view("products.edit")->with(compact('product'));
    }


    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;

        if($product->save())
        {
            return redirect('/productos');
        }
        else
        {
            return view('products.edit')->with(compact('product'));
        }
    }


    public function destroy($id)
    {
        //
        Product::destroy($id);
        return redirect('/productos');
    }
}
