<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $appends = ['name'];

    public function getNameAttribute()
    {
        $name = $this->attributes['first_name'].' '.$this->attributes['last_name'];

        return $name;
    }

}
