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

}

?>