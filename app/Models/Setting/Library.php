<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    //
	
	
	public function sections() 
	{
		return $this->hasMany(Section::class);
	}
}
