<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rebate;
use Illuminate\Support\Facades\Input;

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
            'g-recaptcha-response' => 'required|recaptcha',
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
    	$rebate->comp_city = $request->comp_city;
    	$rebate->comp_state = $request->comp_state;
    	$rebate->comp_zip = $request->comp_zip;
    	$rebate->comp_phone = $request->comp_phone;

        $token = $request->input('g-recaptcha-response');

        $storagePath = storage_path('app/public');

        $uploadedPdf = $request->file('pdf_file_path');

        $pdfName = $uploadedPdf->getClientOriginalName();
        
        $uploadedPdf-> move($storagePath,$pdfName);
        $rebate->pdf_file_path = $pdfName;
    	$rebate->save();

    	return redirect('home')->with('message','Your rebate has been submitted!');
    }

}
