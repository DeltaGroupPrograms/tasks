@extends('tasks')
@section('content')
    <h1>تعریف پروژه</h1>
    <div class="col-md-6 ChangePasswordForm" >
        <form action="{{ route('create_project') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                @include('error')
                <div >
                    <br/>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام پروژه" aria-describedby="basic-addon1"/>
                </div>
                <div >
                    <br/>
                    <input type="text" class="form-control" name="family" id="family" placeholder="لطفا نام خانوادگی خود را وارد نمایید" aria-describedby="basic-addon1"/>
                </div>
                <div class="">
                    <br/>
                    <input type="password" class="form-control" name="password" id="password" placeholder="لطفا رمز عبور خود را وارد نمایید" aria-describedby="basic-addon1"/>
                </div>
                <div class="">
                    <br/>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="لطفا شماره همراه خود را وارد نمایید" aria-describedby="basic-addon1"/>
                </div>
                <div class="">
                    <br/>
                    <input type="text" class="form-control"  name="email" id="email" placeholder="پست الکترونیک خود را وارد نمایید"  aria-describedby="basic-addon1"/><br/>
                </div><br/>
                <input type="submit" class="btn btn-default" value="ثبت نام">
            </div>
        </form>
    </div>
@stop
