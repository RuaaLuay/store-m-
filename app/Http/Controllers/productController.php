<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function create () {
        $products = DB::table('product')->join('category','category_id','id')
                                        ->select('product.name as proName', 'category.name as catName',
                                                    'product.id as proId','description', 'price', 'fileInput',
                                                    'quantity')->get();
        return view('admin.products')->with('products', $products);
    }

    public function store (Request $request) {
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $fileInput = $_POST['fileInput'];
        $quantity = $_POST['quantity'];


        $result = DB::table('products')->insert(([
            'name' => $name,
            'description' => $desc,
            'price' => $price,
            'quantity' => $quantity,
            'image' => $fileInput,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s")
        ]));

        return redirect()->back();
    }


    public function index () {
        $products = DB::table('product')->join('category','product.category_id','category.id')
                                        ->select('product.name as proName', 'category.name as catName',
                                                    'product.id as proId','description', 'price', 'image',
                                                    'quantity')->get();
        return view('admin.products')->with('products', $products);
    }


    public function update (Request $request, $id) {
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $fileInput = $_POST['fileInput'];
        $quantity = $_POST['quantity'];

        $result = DB::table('products')
        		->where('id', '=', $id)
		        ->update([
                    'name' => $name,
                    'description' => $desc,
                    'price' => $price,
                    'quantity' => $quantity,
                    'image' => $fileInput,
                    'updated_at' => date("Y-m-d h:i:s")
                ]);

        return redirect()->back();
    }

    public function edit ($id) {

        $product = DB::table('product')
        		->select('*')
        		->where('id', $id)
        		->limit(1)
        		->first();



        $categories = DB::table('category')
        		->select('*')
        		->get();
        return view('Admin.edit-product')->with('id', $id)->with('Product', $product)->with('categories', $categories);
    }

    public function destroy ($id) {

    	$result = DB::table('product')
    				->where('id', $id)
    				->delete();
                    return redirect()->back();
    }

}
