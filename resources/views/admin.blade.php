@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Rebates</h3>
	<ul class="list-group">
		@foreach ($rebates as $rebate)
			@if ($rebate->approved)
				<li class="list-group-item"> {{$rebate->comp_name}} <a href="{{ url('/rebate/edit/' . $rebate->id) }}">Review rebate <span class="alert-success">(Approved)</span></a> </li>
			@else
				<li class="list-group-item"> {{$rebate->comp_name}} <a href="{{ url('/rebate/edit/' . $rebate->id) }}">Review rebate</a> </li>
			@endif
		@endforeach	
	</ul>

</div>

@endsection