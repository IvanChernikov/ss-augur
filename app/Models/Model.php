<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

abstract class Model extends EloquentModel {
	private function getTablePrefix() {
		$full = explode('\\', get_class($this));
		$slice = array_splice($full, 2, -1);
		return strtolower(implode('_', $slice));
	}
	public function getTable() {
		return sprintf('%s_%s', $this->getTablePrefix(), parent::getTable());
	}
}
