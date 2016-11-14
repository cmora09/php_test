<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rebate;
use File;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->only('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        $rebates = Rebate::all();
        return view('admin')->withRebates($rebates);
    }

    public function edit($id){

        $rebate = Rebate::find($id);
        $pdf = $rebate->pdf_file_path;
        $rebate = Rebate::find($id);
        return view('edit')->withRebate($rebate)->withPdf($pdf);
   
    }

    public function update(Request $request, $id){

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
            'approved' => 'required',
        ));

        $rebate = Rebate::find($id);

        $rebate->fname = $request->input('fname');
        $rebate->lname = $request->input('lname');
        $rebate->address1 = $request->input('address1');
        $rebate->address2 = $request->input('address2');
        $rebate->city = $request->input('city');
        $rebate->state = $request->input('state');
        $rebate->zip = $request->input('zip');
        $rebate->contact_phone = $request->input('contact_phone');
        $rebate->email = $request->input('email');
        $rebate->comp_info = $request->input('comp_info');
        $rebate->comp_name = $request->input('comp_name');
        $rebate->comp_address = $request->input('comp_address');
        $rebate->comp_city = $request->input('comp_city');
        $rebate->comp_state = $request->input('comp_state');
        $rebate->comp_zip = $request->input('comp_zip');
        $rebate->comp_phone = $request->input('comp_phone');
        $rebate->approved = $request->input('approved');

        $rebate->save();

        return redirect('admin');
    }
}
