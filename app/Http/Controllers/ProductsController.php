<?php

namespace App\Http\Controllers;

use post;
use App\Product;
use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;


class ProductsController extends Controller
{
    public function index()
    {
        WebhookCall::create()
        ->url('https://webhook.site/cd375033-dae2-49bf-af51-1b37658fd0ae')
        ->payload([
            'products'=>Product::all()
        ])
        ->useSecret('sign-using-this-secret')
        ->dispatch();

        return Product::all();

        
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request-> name;
        $product->description = $request-> description;
        $product->price = $request-> price;
        $product->save();

        
        return 'producto creado';
        
    }

    public function show( $id)
    {
        $product = Product::select('products.*',
        'product_categories.name as name_category'
        )
        
        ->leftjoin('product_categories','product_categories.id','=','products.category_id')
        ->where('products.id','=',$id)
        ->first();
                
        return $product;
    }

  
    public function update(Request $request, $id)
    {
        
        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return $product;
    }
    public function destroy(Request $request)
    {
        $product = Product::destroy($request->id);
        return $product;
        
    }


    
}
