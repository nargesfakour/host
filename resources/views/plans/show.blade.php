@extends('layout.dashboard')
@section('content')


    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> پلن {{$plan['name']}}  </h4>
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
                            <td>{{$tempItem->value}}</td>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

@endsection
