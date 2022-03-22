<?php


namespace App\Accessors;

trait defaultAccessors
{
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }
    public function getTitleAndBodyAttribute()
    {
        return $this->title . ' - ' . $this->body;

    }
}
