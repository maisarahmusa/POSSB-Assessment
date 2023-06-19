<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Purchase;
use Illuminate\Http\Request;


class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }

    public function purchase_create(Request $request)
    {
        // $purchase = new Purchase();
        $purchase = $request->all();
        // $purchase = $request->all();
        // $purchase->name = $request->name;
        // $purchase->email = $request->email;
        // $purchase->mobile_number = $request->mobile_number;
        // json_encode($request->input('items'));

        $purchase['items'] = json_encode($purchase['items']);
        Purchase::create($purchase);

        // $purchase->save();
        // dd($purchase);

        return redirect('/purchase-create');
    }

    public function purchase_details()
    {
        return view('purchase.create');
    }

    public function purchase_show()
    {
        return view('purchase.show',
        ['purchase'=>Purchase::all()]
        );
    }
}
