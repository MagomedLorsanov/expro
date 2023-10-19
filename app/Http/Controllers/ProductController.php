<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => '1',
                'article' => 'md201',
                'name' => 'headphones for macbook',
                'status' => 'available',
                'data' => [
                    'color' => 'white',
                    'size' => 'L'
                ]
            ],
            [
                'id' => '2',
                'article' => 'md202',
                'name' => 'iphone 15 pro max 128gb',
                'status' => 'available',
                'data' => [
                    'color' => 'black'
                ]
            ]
        ];

        return view('index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:10',
            'article' => [
                'required',
                'regex:/^[a-zA-Z0-9\s]+$/',
                // Rule::unique('product')->ignore($request->id)
            ]
        ]);
        dd($data);
    }

    public function show($id)
    {
        $products = [
            [
                'id' => '1',
                'article' => 'md201',
                'name' => 'headphones for macbook',
                'status' => 'available',
                'data' => [
                    'color' => 'white',
                    'size' => 'L'
                ]
            ],
            [
                'id' => '2',
                'article' => 'md202',
                'name' => 'iphone 15 pro max 128gb',
                'status' => 'available',
                'data' => [
                    'color' => 'black'
                ]
            ]
        ];
        $product = $products[$id];
        return view('show',compact('product'));
    }

    public function edit($id)
    {
        $products = [
            [
                'id' => '1',
                'article' => 'md201',
                'name' => 'headphones for macbook',
                'status' => 'available',
                'data' => [
                    'color' => 'white',
                    'size' => 'L'
                ]
            ],
            [
                'id' => '2',
                'article' => 'md202',
                'name' => 'iphone 15 pro max 128gb',
                'status' => 'available',
                'data' => [
                    'color' => 'black'
                ]
            ]
        ];
        $product = $products[0];
        return view('product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
