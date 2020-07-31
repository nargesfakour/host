<?php

namespace App\Http\Controllers;

use App\TemplateItem;
use Illuminate\Http\Request;

class TemplateItemController extends Controller
{
    //

    //==================>>>>>>>>>>>> create template item
    public function create(Request $request)
    {

        if (isset($request['feature_name'])) {

            $template = TemplateItem::create([
                'priority' => $request['priority'],
                'feature_name' => $request['feature_name'],
                'type' => $request['type'],
            ]);
        }

        return view('template_items.create');
    }
}
