<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('admin.dataproducts.product', compact('products'));
    }

   public function addproducts(){
        return view('admin.dataproducts.addproducts');
    }
    
    public function insertproducts(Request $request){
        $request->validate([
            'brand' => 'required',
            'weight' => 'required',
            'type_weight' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required|image'
            
        ]);
        $path = $request->image->store('public');
        $input = $request->all();
        unset($input['image']);

        Products::create(array_merge($input, ['image' => str_replace('public/', '', $path)]));
        return redirect()->route('product');
    }

    public function changeproducts($products_id){
        $products = Products::find($products_id);

        return view('admin.dataproducts.changeproducts', compact('products'));
    }

    public function updateproducts(Request $request, $products_id){
        $products = Products::find($products_id);
        $products->update($request->all());
        return redirect()->route('product');
    }

    public function deleteproducts($products_id){
        $products = Products::find($products_id);
        $products->delete();
        DB::statement('ALTER TABLE products AUTO_INCREMENT = + 1');
        return redirect()->route('product');
    }
}
