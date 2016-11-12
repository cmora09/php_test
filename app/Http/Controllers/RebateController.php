<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rebate;

class RebateController extends Controller
{
    public function create()
    {
    	return view('home');
    }
    public function store(Request $request)
    {
    	$this->validate($request, array(
    		'fname' => 'required',
    		'lname' => 'required',
    		'address1' => 'required',
    		'city' => 'required',
    		'state' => 'required',
    		'zip' => 'required|max:5',
    		'contact_phone' => 'required',
    		'email' => 'required|email',
    		'comp_info' => 'required',
    		'comp_name' => 'required',
    		'comp_address' => 'required',
    		'comp_city' => 'required',
    		'comp_state' => 'required',
    		'comp_zip' => 'required|max:5',
    		'comp_phone' => 'required',
    		'pdf_file_path' => 'required|mimes:pdf'
    	));
    	$rebate = new Rebate;

    	$rebate->fname = $request->fname;
    	$rebate->lname = $request->lname;
    	$rebate->address1 = $request->address1;
    	$rebate->address2 = $request->address2;
    	$rebate->city = $request->city;
    	$rebate->state = $request->state;
    	$rebate->zip = $request->zip;
    	$rebate->contact_phone = $request->contact_phone;
    	$rebate->email = $request->email;
    	$rebate->comp_info = $request->comp_info;
    	$rebate->comp_name = $request->comp_name;
    	$rebate->comp_address = $request->comp_address;
    	$rebate->comp_city = $request->comp_state;
    	$rebate->comp_zip = $request->comp_zip;
    	$rebate->comp_phone = $request->comp_phone;
    	$rebate->pdf_file_path = $request->pdf_file_path;

    	$rebate->save();
    	return Redirect::back()->withSuccess('Your rebate has been sent. An admin will review your submission.');
    }

}
