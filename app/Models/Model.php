<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

abstract class Model extends EloquentModel {
	/**
	 * Returns a snake_case prefix based on the model's namespace
	 */
	private function getTablePrefix() {
		$full = explode('\\', get_class($this));
		$slice = array_splice($full, 2, -1);
		return strtolower(implode('_', $slice));
	}
	/**
	 * Override default table magic method to include prefix
	 */
	public function getTable() {
		return sprintf('%s_%s', $this->getTablePrefix(), parent::getTable());
	}
}
