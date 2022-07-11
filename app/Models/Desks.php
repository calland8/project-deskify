<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desks extends Model
{
    use HasFactory;


    public function office()
    {

        return $this->belongsTo('App\models\Office');
    }
}
