<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
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
        return view('products.index', [
            'products' => $products,
            'user' => 'loic'
        ]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'description' => ['required'],
            'quantity' => ['required', 'integer'],
        ]);

        dd($request);

        return view('products.index');
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
