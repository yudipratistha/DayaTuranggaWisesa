<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function PortfolioTag(){
        return $this->belongsTo('App\PortfolioTag');
    }
}
