<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::available()->get();
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $values = $request['values'];
        $data = [];
        if ($values) {
            foreach ($request['keys'] as $index => $key) {
                $data[$key] = $values[$index];
            }
        }
        $jsonData = json_encode($data);

        $request->validate(Product::rule($request));



        
        $product = [
            'article' => $request->article,
            'name' => $request->name,
            'status' => $request->status,
            'data' => $jsonData
        ];

        $products = Product::create($product);
        return redirect('products');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        if (auth()->check() && auth()->user()->is_admin == true) {
            $is_admin = true;
        } else {
            $is_admin = false;
        }

        $product = Product::find($id);
        return view('product.edit', compact('product', 'is_admin'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(Product::rule($request->all(), $id));
        $request = $request->all();

        $values = isset($request['values']) ? $request['values'] : '';
        $data = [];

        if ($values) {
            foreach ($request['keys'] as $index => $key) {
                $data[$key] = $values[$index];
            }
        }
        $jsonData = json_encode($data);

        $product = Product::find($id);
        $product->article = $request['article'];
        $product->name = $request['name'];
        $product->status = $request['status'];
        $product->data = $jsonData;
        $product->save();
        return redirect('products')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('products')->with('success', 'Product deleted successfully');
    }
}
