@extends('layout.dashboard')
@section('content')
    
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$plan['name']}}  </h4>
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="{{route('plan_edit',['id'=>$plan['id']])}}">
                    @csrf
                    @method('put')
                    <div class="form-group">

                        <label for="name">عنوان پلن
                            <input id="name" required type="text" name="name" class="form-control" value="{{$plan['name']}} " >
                        </label>
                    </div>
                    <div class="form-group">

                        <label for="price_monthly">قیمت ماهانه
                            <input id="price_monthly" type="number" name="price_monthly" class="form-control" value="{{$plan['price_monthly']}}">
                        </label>
                    </div>
                    <div class="form-group">

                        <label for="price_quarterly">قیمت سه ماهه
                            <input id="price_quarterly" type="number" name="price quarterly" class="form-control" value="{{$plan['price_quarterly']}}" >
                        </label>
                    </div>
                    <div class="form-group">

                        <label for="price_semiannually">قیمت شش ماهه
                            <input id="price_semiannually" type="number" name="price_semiannually" class="form-control" value="{{$plan['price_semiannually']}}" >
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="price_annually">قیمت سالانه
                            <input id="price_annually" type="number" name="price_annually" class="form-control" value="{{$plan['price_annually']}}">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="priority">اولویت نمایش
                            <input id="priority" type="number" name="priority" class="form-control" >
                        </label>
                    </div>

                    @foreach($tempItems as $tempItem)
                        <div class="form-group">
                            <label for="{{$tempItem->id}}">{{$tempItem->feature_name}}
                                <input id="{{$tempItem->id}}" type="number" name="{{$tempItem->id}}" class="form-control" value="{{$tempItem->value}}">
                            </label>
                        </div>
                    @endforeach

                    <input class="btn btn-primary btn-fill px-5" value="ثبت" type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
