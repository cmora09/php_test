@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Submit a new rebate</h2>
            {{Form::open(array('action' => 'RebateController@store', 'class' => 'form-horizontal'))}}
                <div class="form-group">
                    <h4 class="text-center">Enter your information</h4>
                    {{Form::label('fname', 'First Name: ')}}
                    {{Form::text('fname', null, array('class' => 'form-control'))}}

                    {{Form::label('lname', 'Last Name: ')}}
                    {{Form::text('lname', null, array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'Email: ')}}
                    {{Form::text('email', null, array('class' => 'form-control'))}}

                    {{Form::label('contact_phone', 'Phone number: ')}}
                    {{Form::text('contact_phone', null, array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    {{Form::label('address1', 'Address 1: ')}}
                    {{Form::text('address1', null, array('class' => 'form-control'))}}

                    {{Form::label('address2', 'Address 2: ')}}
                    {{Form::text('address2', null, array('class' => 'form-control'))}}

                    {{Form::label('city', 'City: ')}}
                    {{Form::text('city', null, array('class' => 'form-control'))}}

                    {{Form::label('state', 'State: ')}}
                    {{Form::text('state', null, array('class' => 'form-control'))}}

                    {{Form::label('zip', 'Zip Code: ')}}
                    {{Form::text('zip', null, array('class' => 'form-control'))}}
                </div>
                <div class="form-group">
                    <h4 class="text-center">Enter company information</h4>
                    {{Form::label('comp_name', 'Company Name: ')}}
                    {{Form::text('comp_name', null, array('class' => 'form-control'))}}

                    {{Form::label('comp_info', 'Company Information: ')}}
                    {{Form::text('comp_info', null, array('class' => 'form-control'))}}

                    {{Form::label('comp_address', 'Company Address: ')}}
                    {{Form::text('comp_address', null, array('class' => 'form-control'))}}

                    {{Form::label('comp_city', 'City: ')}}
                    {{Form::text('comp_city', null, array('class' => 'form-control'))}}

                    {{Form::label('comp_state', 'State: ')}}
                    {{Form::text('comp_state', null, array('class' => 'form-control'))}}

                    {{Form::label('comp_zip', 'Zip Code: ')}}
                    {{Form::text('comp_zip', null, array('class' => 'form-control'))}}

                    {{Form::label('comp_phone', 'Company Phone: ')}}
                    {{Form::text('comp_phone', null, array('class' => 'form-control'))}}

                    {{Form::label('pdf_file_path', "Invoice Attachment")}}
                    {{Form::file('pdf_file_path')}}
                    <br>
                    {{Form::submit('Send Rebate', array('class'=> 'btn btn-info'))}}
            {{Form::close()}}
        </div>
    </div>
</div>
@endsection
