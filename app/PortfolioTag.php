<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioTag extends Model
{
    public function Portfolio(){
        return $this->hasMany('App\Portfolio');
    }
}
