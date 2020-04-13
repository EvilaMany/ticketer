<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function messages() {
		return $this->hasMany('App\TicketMessage');
	}

	public function creator() {
		return $this->belongsTo('App\User');
	}
}
