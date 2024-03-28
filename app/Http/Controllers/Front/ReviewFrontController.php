<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FinanceRequest;
use App\Models\Finance;
use App\Models\GeneralSetting;
use App\Models\Listing;
use App\Models\PageOtherItem;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ReviewFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g_setting = GeneralSetting::where('id', 1)->first();
        $page_other_item = PageOtherItem::where('id', 1)->first();
        $faq = DB::table('page_faq_items')->where('id', 1)->first();
        $reviews = Review::orderBy('id', 'asc')->where('agent_type', 'Customer')->paginate(3);
        return view('front.review.index', compact('page_other_item','faq','reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $g_setting = GeneralSetting::where('id', 1)->first();
        $page_other_item = PageOtherItem::where('id', 1)->first();
        $faq = DB::table('page_faq_items')->where('id', 1)->first();
        $listings = Listing::get();
        return view('front.review.create', compact('page_other_item','faq','listings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required'
        ]);
        $user_id = Auth::id();
        $agent_id = $user_id ? $user_id : 1;
        $obj = new Review;
        $obj->listing_id = $request->listing_id;
        $obj->agent_id = $agent_id;
        $obj->agent_type = 'Admin';
        $obj->rating = $request->rating;
        $obj->review = $request->review;
        $obj->save();
        return redirect()->back()->with('success', SUCCESS_REVIEW_CREATE);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit(Finance $finance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finance $finance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finance $finance)
    {
        //
    }
}
