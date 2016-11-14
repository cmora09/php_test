@extends('layouts.app')

@section('content')
	
	<div class="col-md-8 col-md-offset-2">
			@if($rebate->approved)
				<h3 class="text-center alert alert-success">This rebate has been approved.</h3>
			@endif
		{!! Form::model($rebate, ['route' => ['rebate.update', $rebate->id], 'method' => 'PUT']) !!}
			<h4 class="text-center">User information</h4>
			<a href="{{$path}}"><h4>Invoice</h4></a>
			<div class="form-group">
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
			    <h4 class="text-center">Company information</h4>
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
	
			    <br>
			    {{ Form::label('approved', 'Approved: ') }}
			    {{Form::hidden('approved', 0)}}
			    {{ Form::checkbox('approved', 1, ['class' =>'checkbox-inline']) }}
			    <span>Leave blank if not approved</span>
			    <br>
			    {!!Form::submit('Update Rebate', array('class'=> 'btn btn-info'))!!}
			</div>
		{!! Form::close() !!}
	</div>


@endsection