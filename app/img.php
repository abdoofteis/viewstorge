<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class img extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
}}
