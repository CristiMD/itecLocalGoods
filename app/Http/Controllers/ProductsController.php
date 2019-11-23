<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    /**
     * All products.
     *
     * @return void
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Create product.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
       // $user = $request->user();
       // $user->userid;
        
        
        $data = [
            //'user_id'                   => $user->userid,
            'name'                      => $request->name,
            'price'                     => $request->price,
            'units'                     => $request->units,
            'description'               => $request->description,
            'address'                   => $request->address,
            'product_id'                => bcrypt(time()),
            'category'                  => $request->category,
            'subcategory'               => $request->subcategory,
            'status'                    => 0,
        ];
        
        $product = Product::create($request->$data);
        return response()->json($product);
    }

    /**
     * Vlidate user product.
     *
     * @return void
     */
    public function valid(Product $product)
    {
        
        $product->update(array('status' => '1'));
        return response()->json($product);
    }
    

    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update category.
     *
     * @return void
     */
    public function update(Request $request, Product $product)
    {

        $product->update($request->all());

        return response()->json($product);
    }

    /**
     * Delete category.
     *
     * @return void
     */
    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
