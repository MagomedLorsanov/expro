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

        return view('index',compact('products'));
    }

    public function store()
    {
        // $request->validate([
        //     'name' => 'required|min:10',
        //     'article' => [
        //         'required',
        //         'regex:/^[a-zA-Z0-9\s]+$/',
        //         Rule::unique('product')->ignore($request->id)]
        //     ]);
    }
}
