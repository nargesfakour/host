@extends('layout.dashboard')
@section('content')

    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">مشخصات پلن  {{$plan['name']}}   </h4>
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="{{route('detail_create')}}">
                    @csrf

                        <input id="plan_id" type="number" name="plan_id" class="form-control" hidden value="{{$plan['id']}}">

                    @foreach($templateItems as $templateItem)
                        <div class="form-group">
                            <label for="{{$templateItem['id']}}">{{$templateItem['feature_name']}}
                                @if($templateItem['type']==1)
                                <input id="{{$templateItem['id']}}" type="number" name="{{$templateItem['id']}}" class="form-control">
                                @else
                                    <input id="{{$templateItem['id']}}" type="text" name="{{$templateItem['id']}}" class="form-control">
                                @endif
                            </label>
                        </div>
                    @endforeach

                    <input class="btn btn-primary btn-fill px-5" value="ثبت" type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
