<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //

    protected $fillable =[
        'name','priority','price_monthly','price_quarterly','price_semiannually','price_annually',
    ];

    public function details()
    {
        return $this->hasMany('App\Details');
    }

    public function findTemplateItem($id)
    {
        $tempItem = DB::table('template_items')
            ->leftJoin('details', function ($join) use($id){
                $join->on('template_items.id', '=', 'details.template_item_id')
                    ->where('details.plan_id',$id);
            }) ->get();
    }
}
