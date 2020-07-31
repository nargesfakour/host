<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //

    protected $fillable=[
      'template_item_id','plan_id','value'
    ];


    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

    public function templateItem(){
        return $this->belongsTo('App\TemplateItem');
    }

}
