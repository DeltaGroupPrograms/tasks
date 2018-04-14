@extends('tasks')
@section('content')
    <div class="col-md-6 ChangePasswordForm" >
    <form action="{{ route('changepass') }}" method="post">
        <div class="form-group">
            {{ csrf_field() }}
            @include('error')
            <div class="">
                <br/>
                <input type="password" class="form-control" name="pass" placeholder=" لطفا رمز عبور را وارد نمایید" aria-describedby="basic-addon1"/>
                {{--<span class="input-group-addon" id="basic-addon2">رمز عبور</span>--}}
            </div>
            <div class="form-sub-w3">
                <br/>
                <input type="password" class="form-control" placeholder="تکرار رمز عبور خود را وارد نمایید" name="repass"/><br/>
            </div><br/>
            <input type="submit" class="btn btn-default" value="تغییر رمز عبور"/>
        </div>
    </form>
    </div>
@stop



