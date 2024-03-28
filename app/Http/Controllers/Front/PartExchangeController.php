<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartExchangeRequest;
use App\Models\GeneralSetting;
use App\Models\Listing;
use App\Models\PageOtherItem;
use App\Models\PartExchange;
use Illuminate\Http\Request;

class PartExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $g_setting = GeneralSetting::where('id', 1)->first();
        $page_other_item = PageOtherItem::where('id',1)->first();
        $listings = Listing::get();
        return view('front.partexchange.create', compact('listings','page_other_item','g_setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartExchangeRequest $request)
    {
            $partExchange = new PartExchange();
            $partExchange->vehicle_id = $request->input('vehicle');
            $partExchange->title = $request->input('title');
            $partExchange->first_name = $request->input('first_name');
            $partExchange->last_name = $request->input('last_name');
            $partExchange->email = $request->input('email');
            $partExchange->mobile = $request->input('mobile');
            $partExchange->color = $request->input('color');
            $partExchange->make = $request->input('make');
            $partExchange->model = $request->input('model');
            $partExchange->registeration = $request->input('registeration');
            $partExchange->mileage = $request->input('mileage');
            $partExchange->owners = $request->input('owners');
            $partExchange->fuel_type = $request->input('fuel_type');
            $partExchange->transmissions = $request->input('transmissions');
            $partExchange->save();
    
            return redirect()->back()->with('success', PART_SUCCESS_ACTION);
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
