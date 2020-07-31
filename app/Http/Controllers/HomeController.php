<?php

namespace App\Http\Controllers;

use App\Plan;
use App\TemplateItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $plans = Plan::all();

        $details = DB::table('template_items')
            ->Join('details', function ($join){
                $join->on('template_items.id', '=', 'details.template_item_id')
                   ;
            }) ->get();
//        dd($tempItems);
        return view('index',[
            'plans'=>$plans,
            'details'=>$details,
            'tempItems'=>TemplateItem::all()
        ]);
    }
}
