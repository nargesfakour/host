@extends('layout.dashboard')
@section('content')

    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ویژگی جدید </h4>
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="">
                    @csrf
                    <div class="form-group">

                        <label for="feature_name">عنوان ویژگی
                            <input id="feature_name" type="text" name="feature_name" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="priority">اولویت نمایش
                            <input id="priority" type="number" name="priority" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="type">نوع
                            <select name="type" class="form-control form-control-sm" id="type">
                                <option  value="1">عدد</option>
                                <option  value="2">متن</option>
                            </select>
                        </label>
                    </div>
                    <input class="btn btn-primary btn-fill px-5" value="ثبت" type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
