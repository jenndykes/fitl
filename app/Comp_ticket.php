<?php

namespace App;

use \Esensi\Model\Model;

class Comp_ticket extends Model
{

	protected $rules = [
		'last_name' => ['required'],
		'num_tickets' => ['required']
	];

	
    // access events using, e.g., $comp_tickets->events
	public function events() {
		return $this->belongsTo('App\Event');
	}
	//command to order results: ->orderBy('created_at', 'desc')
}
