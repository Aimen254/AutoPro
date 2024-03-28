<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FinanceRequest;
use App\Models\Finance;
use App\Models\GeneralSetting;
use App\Models\Listing;
use App\Models\PageOtherItem;
use Illuminate\Http\Request;

class FinanceController extends Controller
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
        $maritalStatusOptions = [
            'single' => 'Single',
            'married' => 'Married',
            'divorced' => 'Divorced',
            'widowed' => 'Widowed',
        ];
        $residentStatusOptions = [
            'owner' => 'Owner',
            'tenant' => 'Tenant',
            'living_with_parents' => 'Living With Parents',
            'living_with_partners' => 'Living With Partners',
        ];
        $listings = Listing::get();
        return view('front.finance.create', compact('listings','page_other_item','g_setting','maritalStatusOptions','residentStatusOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FinanceRequest $request)
    {
        $finance = new Finance();
        $finance->vehicle_id = $request->input('vehicle');
        $finance->title = $request->input('title');
        $finance->first_name = $request->input('first_name');
        $finance->last_name = $request->input('last_name');
        $finance->marital_status = $request->input('marital_status');
        $finance->dob = $request->input('dob');
        $finance->license_no = $request->input('license_no');
        $finance->dependents = $request->input('dependent');
        $finance->mobile = $request->input('mobile');
        $finance->landline = $request->input('landline');
        $finance->email = $request->input('email');
        $finance->address = $request->input('house_no') . ', ' .$request->input('street') . ', ' .$request->input('town') . ', ' .
               $request->input('country');
        $finance->postcode = $request->input('postal_code');
        $finance->residential_status = $request->input('residential_status');
        $finance->time_at_address_year = $request->input('adress_year');
        $finance->time_at_address_month = $request->input('adress_month');
        $finance->occupation = $request->input('occupation');
        $finance->employer_name = $request->input('employer_name');
        $finance->employer_address = $request->input('employer_address');
        $finance->employer_postcode = $request->input('emp_postal_code');
        $finance->employer_mobile = $request->input('emp_mobile');
        $finance->employer_telephone = $request->input('emp_telephone');
        $finance->weekly_income = $request->input('weekly_income');
        $finance->time_with_employer_year = $request->input('emp_year');
        $finance->time_with_employer_month = $request->input('emp_month');
        $finance->bank_name = $request->input('bank_name');
        $finance->branch = $request->input('branch');
        $finance->account_name = $request->input('account_name');
        $finance->account_number = $request->input('account_number');
        $finance->short_code = $request->input('shortcode');
        $finance->account_type = $request->input('account_type');
        $finance->time_with_bank_year = $request->input('bank_year');
        $finance->time_with_bank_month = $request->input('bank_month');
        $finance->save();

        return redirect()->back()->with('success', SUCCESS_ACTION);
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
