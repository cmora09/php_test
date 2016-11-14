<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rebate extends Model
{
	protected $casts =[
		'approved' => 'boolean'
	];
	protected $attributes = [
	   'approved' => false
	];
}
