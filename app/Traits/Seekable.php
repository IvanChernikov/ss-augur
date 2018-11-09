<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2018-11-08
 * Time: 10:21 PM
 */

namespace App\Traits;

/**
 * Trait Seekable
 * @package App\Traits
 * @property string $reference
 */
trait Seekable
{
    /**
     * @return string
     */
    abstract protected function getReferenceAttribute();

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $reference
     * @return \Illuminate\Database\Eloquent\Builder
     */
    final public function scopeByReference($query, $reference) {
        return $query->where($this->reference, $reference);
    }

}