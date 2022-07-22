<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {


        $user = $request->user();
        $products = Product::query()->where('user_id', $user->id)->get();

        return view('products.index', [
            'products' => $products

        ]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function save(Request $request)
    {

        $user = $request->user();
        $this->validate($request, [
            'name' => ['required', 'unique:products,name'],
            'description' => ['required'],
            'quantity' => ['required', 'integer'],
        ]);
        // dd($request->except(['_token']));
        //$request->except(['_token'])
        // [
        //     "name"=>"mague",
        //     "price"=>"200",
        //     "quantity"=>"100"
        // ]
        //         +
        // [
        //     "user_id" => $user->id
        // ]

        // [
        //     "name"=>"mague",
        //     "price"=>"200",
        //     "quantity"=>"100",
        //     "user_id" => $user->id
        // ]

        Product::query()->create(array_merge($request->except(['_token']), ["user_id" => $user->id]));
        // $product = new Product();
        // $product->name = $request->name;
        // $product->quantity = $request->quantity;
        // $product->description = $request->description;
        // $product->stock_min = $request->stock_min;
        // $product->price = $request->price;
        // $product->save();
        return  redirect(route('products.index'));
    }
    public function details($id)
    {
        $products = [
            [
                'id' => 1,
                'name' => "Mango",
                'price' => 200
            ],
            [
                'id' => 2,
                'name' => "Granut",
                'price' => 500
            ],
            [
                'id' => 3,
                'name' => "Bread",
                'price' => 120
            ]
        ];
        $product = collect($products)->where('id', $id)->first();


        return view('products.details', [
            'product' => $product
        ]);
    }
    public function edit()
    {
        return view('products.edit');
    }

    public function update()
    {
        //return view('products.index');
    }
    public function destroy()
    {
        return view('products.index');
    }
}
