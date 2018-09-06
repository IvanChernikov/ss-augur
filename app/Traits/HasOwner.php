<?php
namespace App\Traits;

use App\Models\User;

trait HasOwner {
	
	public function owner() {
		return $this->belongsTo(User::class, 'user_id');
	}
	
}