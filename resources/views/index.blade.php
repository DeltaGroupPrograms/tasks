@extends('main')
@section('context')
<!--header-->
<div class="header-w3l">
    <h1>تسکولو</h1>
</div>
<!--//header-->
<!--main-->
<div class="main-w3layouts-agileinfo">
    <!--form-stars-here-->
    <div class="wthree-form">
        <form action="{{ route('signin') }}" method="post">
            {{ csrf_field() }}
            @include('error')
            <div class="form-sub-w3">
                <input type="text" name="username" placeholder="Username " />
                <div class="icon-w3">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-sub-w3">
                <input type="password" name="password" placeholder="Password" />
                <div class="icon-w3">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                </div>
            </div>
            <label class="anim">
                <input type="checkbox" class="checkbox">
                <span>من را برای ۳۰ روز به یاد داشته باش</span>
                <a href="{{ route('register_user') }}" >عضویت</a>
            </label>
            <div class="clear"></div>
            <div class="submit-agileits">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    <!--//form-ends-here-->
</div>
<!--//main-->
<!--footer-->
<div class="footer">
    <p>&copy; 1396 Glassy Login Form. All rights reserved | File Source <a href="http://psdfa.com">psdfa</a></p>
</div>
<!--//footer-->
    @stop