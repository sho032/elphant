<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function getData()
    {
        return $this->check;
    }
}
