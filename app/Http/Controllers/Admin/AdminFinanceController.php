<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Finance;
use Illuminate\Http\Request;

class AdminFinanceController extends Controller
{
    public function __construct() {
        $this->middleware('auth.admin:admin');
    }
    public function index(){
        $reviews = Finance::orderBy('id', 'asc')->get();
        return view('admin.finance.index', compact('reviews'));
    }

    public function show($id){
        $finance = Finance::findOrFail($id);
        return view('admin.finance.show', compact('finance'));
    }
    public function delete($id){
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Finance::findOrFail($id);
        $obj->delete();
        return Redirect()->back()->with('success', SUCCESS_ACTION);
    }
}
