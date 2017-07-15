<?php

namespace App;

use \Esensi\Model\Model;


//Model for Event object

class Event extends Model
{
	protected $rules = [
		//'account_id' => ['required'],
		'event_name' => ['required'],
		'event_start_date' => ['required'],
		//'event_start_time' => ['required'],
	];

	// access comp_tickets using, e.g., $event->comp_tickets
	public function comp_tickets() {
		return $this->hasMany('App\Comp_ticket');
	}
	//command to order results: ->orderBy('created_at', 'desc')

}

?>