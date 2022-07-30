<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->shipped_date = $request->shipped_date;
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->customer_id = $request->customer_id;

        $order->save();
        return 'orden creada';

    }
    public function show(Request $request)
    {
       
        $order = Order::select(
            'orders.id',
            'orders.shipped_date',
            'customers.name as name_customer',
            DB::raw('(CASE WHEN orders.status = "apr" THEN "aprobado" WHEN orders.status = "rec" THEN "rechazado" END) as Estado'),
            DB::raw('(CASE WHEN orders.payment_method = "db" THEN "Depósito bancario" WHEN orders.payment_method = "ef" THEN "Efectivo" END) as Metodo_de_pago')
            )

        ->join('customers','customers.id','=','orders.customer_id')
        ->where('orders.id','=', $request->id)
        ->first();

        
        return $order;
      
    }
      
    

    public function update(Request $request)
    {
        $order = Order::find($request->id);

        $order->shipped_date = $request->shipped_date;
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->customer_id = $request->customer_id;

        $order->save();
        return $order;
    }

    

    public function destroy(Request $request)
    {
        $order = Order::destroy($request->id);

        return $order;
    }

}
