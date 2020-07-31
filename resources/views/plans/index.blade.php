@extends('layout.dashboard')
@section('content')


    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">پلن جدید </h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان </th>
                        <th scope="col">قیمت ماهانه</th>
                        <th scope="col">قیمت سه ماهه</th>
                        <th scope="col">قیمت شش ماهه</th>
                        <th scope="col">قیمت سالانه</th>
                        <th scope="col">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <th scope="row"></th>
                            <td>{{$plan['name']}}</td>
                            <td>{{$plan['price_monthly']}}</td>
                            <td>{{$plan['price_quarterly']}}</td>
                            <td>{{$plan['price_semiannually']}}</td>
                            <td>{{$plan['price_annually']}}</td>
                            <td>
                                <a class="btn btn-info btn-sm mx-2" href="{{route('plan_show',['id'=>$plan['id']])}}">مشاهده</a>
                                <a class="btn btn-primary btn-sm mx-2" href="{{route('plan_edit',['id'=>$plan['id']])}}">ویرایش</a>
                                <a class="btn btn-danger btn-sm mx-2" href="{{route('plan_delete',['id'=>$plan['id']])}}">حذف</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
