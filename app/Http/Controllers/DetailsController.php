<?php

namespace App\Http\Controllers;

use App\Details;
use App\templateItem;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    public function create(Request $request)
    {
        if (isset($request['plan_id'])) {
            $tempItems = templateItem::all();
            foreach ($tempItems as $tempItem) {
                $value = $request[$tempItem['id']];
                if (isset($value)) {
                    $detail = Details::create([
                        'plan_id' => $request['plan_id'],
                        'template_item_id' => $tempItem['id'],
                        'value' => $value

                    ]);
                }
            }
        }
        return redirect()->route('plan_show',['id'=>$request['plan_id']]);
    }
}
