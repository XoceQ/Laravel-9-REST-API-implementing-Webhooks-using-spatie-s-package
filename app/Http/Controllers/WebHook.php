<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;

class WebHook extends Controller
{
    public function send(Request $request)
    {
        $product = new Product();
        $product->name = $request-> name;
        $product->description = $request-> description;
        $product->price = $request-> price;
        $product->save();

        
        $product = Product::get();
       
        
    }

 
   
    
}
