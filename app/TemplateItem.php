<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateItem extends Model
{
    //
    protected $fillable=[
        'priority','feature_name','type'
    ];

    public function details()
    {
        return $this->hasMany('App\Details');
    }
}
