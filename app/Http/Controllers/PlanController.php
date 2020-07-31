<?php

namespace App\Http\Controllers;

use App\Details;
use App\Plan;
use App\templateItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    //==================>>>>>>>>>>>> index page (show and manage all plans )
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', [
            'plans' => $plans
        ]);
    }

    //==================>>>>>>>>>>>> create new plans
    public function create(Request $request)
    {
        if (isset($request['name'])) {
            $plan = Plan::create([
                'name' => $request['name'],
                'priority' => $request['priority'],
                'price_monthly' => $request['price_monthly'],
                'price_quarterly' => $request['price_quarterly'],
                'price_semiannually' => $request['price_semiannually'],
                'price_annually' => $request['price_annually'],
            ]);

            // redirect to page details
            return view('details.create', [
                'plan' => $plan,
                'templateItems' => templateItem::all()]);
        }

        return view('plans.create');
    }

    //==================>>>>>>>>>>>> show plan

    public function show($id)
    {

        $plan = Plan::findOrFail($id);

        $tempItem = DB::table('template_items')
            ->leftJoin('details', function ($join) use ($id) {
                $join->on('template_items.id', '=', 'details.template_item_id')
                    ->where('details.plan_id', $id);
            })
            ->addselect('template_items.id', 'template_items.feature_name', 'details.value')
            ->orderBy('template_items.priority')
            ->get();

        return view('plans.show', [
            'plan' => $plan,
            'tempItems' => $tempItem
        ]);
    }

    //==================>>>>>>>>>>>> edit plan and details

    public function edit(Request $request, $id)
    {

        //================>>>>>>> update info plan
        if (isset($request['name'])) {
            $plan = Plan::where('id', $id)
                ->update(
                    [
                        'name' => $request['name'],
                        'priority' => $request['priority'],
                        'price_monthly' => $request['price_monthly'],
                        'price_quarterly' => $request['price_quarterly'],
                        'price_semiannually' => $request['price_semiannually'],
                        'price_annually' => $request['price_annually'],
                    ]);
            $detail = DB::table('Details')->where('plan_id', $id)
                ->delete();
            $tempItems = templateItem::all();
            foreach ($tempItems as $tempItem) {

                $value = $request[$tempItem['id']];

                if (isset($value)) {
                    $value = $request[$tempItem['id']];
                    $detail = Details::create([
                        'plan_id' => $id,
                        'template_item_id' => $tempItem['id'],
                        'value' => $value

                    ]);
                }
            }

            return  redirect()->route('plan_index');
        }


        //========>>>>> select and show info plan

        $plan = Plan::findOrFail($id);

        $tempItem = DB::table('template_items')
            ->leftJoin('details', function ($join) use ($id) {
                $join->on('template_items.id', '=', 'details.template_item_id')
                    ->where('details.plan_id', $id);
            })
            ->addselect('template_items.id', 'template_items.feature_name', 'details.value')
            ->orderBy('template_items.priority')
            ->get();

        return view('plans.edit', [
            'plan' => $plan,
            'tempItems' => $tempItem
        ]);


    }


    //===============>>>>>>>>> delete plan

    public function delete($id)
    {
       DB::table('Details')->where('plan_id', $id)
            ->delete();
       DB::table('plans')->where('id', $id)
           ->delete();

       return back();

    }
}
