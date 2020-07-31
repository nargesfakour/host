@extends('layout.dashboard')
@section('content')

    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">پلن جدید </h4>
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="">
                    @csrf
                    <div class="form-group">

                        <label for="name">عنوان پلن
                            <input id="name" type="text" name="name" class="form-control" >
                        </label>
                    </div>
                    <div class="form-group">

                        <label for="price_monthly">قیمت ماهانه
                            <input id="price_monthly" type="number" name="price_monthly" class="form-control" >
                        </label>
                    </div>
                    <div class="form-group">

                        <label for="price_quarterly">قیمت سه ماهه
                            <input id="price_quarterly" type="number" name="price quarterly" class="form-control" >
                        </label>
                    </div>
                    <div class="form-group">

                        <label for="price_semiannually">قیمت شش ماهه
                            <input id="price_semiannually" type="number" name="price_semiannually" class="form-control" >
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="price_annually">قیمت سالانه
                            <input id="price_annually" type="number" name="price_annually" class="form-control" >
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="priority">اولویت نمایش
                            <input id="priority" type="number" name="priority" class="form-control" >
                        </label>
                    </div>
                    <input class="btn btn-primary btn-fill px-5" value="ثبت" type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
