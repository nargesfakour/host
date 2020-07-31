@extends('layout.dashboard')
@section('content')
    @foreach($plans as $plan)
    <div class="col-6">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$plan['name']}}  </h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>قیمت ماهانه</td>
                        <td>{{$plan['price_monthly']}}</td>
                    </tr>
                    <tr>
                        <td>قیمت سه ماهه</td>
                        <td>{{$plan['price_quarterly']}}</td>
                    </tr>
                    <tr>
                        <td>قیمت شش ماهه</td>
                        <td>{{$plan['price_semiannually']}}</td>
                    </tr>
                    <tr>
                        <td>قیمت سالانه</td>
                        <td>{{$plan['price_annually']}}</td>
                    </tr>
                    @foreach($tempItems as $tempItem)
                        <tr>
                            <td>{{$tempItem->feature_name}}</td>
                            @foreach($details as $detail)
                            @if($detail->plan_id ==$plan['id'] and $detail->template_item_id== $tempItem->id)
                            <td>{{$detail->value}}</td>
                            @endif
                            @endforeach
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

    </div>
    @endforeach
@endsection
