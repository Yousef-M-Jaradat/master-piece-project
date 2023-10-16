<?php

namespace App\Http\Controllers;

use App\Models\shipments;
use App\Models\orders;
use App\Models\orderItems;
// use App\Models\orderItems;
use App\Models\carts;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = auth()->user()->id;
        if (auth()->user()) {
            return view('template.checkout.checkout');
        } else {
            return redirect()->back()->with('you have to login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iduser = auth()->user()->id;
        $cart = Carts::where('customerId', $iduser)->with('product')->get();

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }

        // dd($totalPrice);
        $shipment = shipments::create([
            'customerId' => auth()->user()->id,
            'shipmentDate' => now()->format('Y-m-d'),
            'country' => $request->country,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        $order = orders::create([
            'orderDate' => now()->format('Y-m-d'),
            'customerId' => auth()->user()->id,
            'totalPrice' => $totalPrice,
            'shipmentId' => $shipment->id,

        ]);

// dd($item->product);
        foreach ($cart as $item){
            orderItems::create([
                'customerId' => auth()->user()->id,
                'orderId' => $order->id,
                'productId' => $item->productId,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
        ]);
        }

        carts::where('customerId', $iduser)->delete();
        


        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function show(shipments $shipments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function edit(shipments $shipments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shipments $shipments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function destroy(shipments $shipments)
    {
        //
    }
}
