@extends('tasks')
@section('content')
<div class="col-md-6 " >
        {{csrf_field()}}
    <div class="form-caption">مشاهده لیست اعضا</div>
        <table class="hor-minimalist-b">
            <thead>
            <tr>
                <th >نام</th>
                <th>نام خانوادگی</th>
                <th >پست الکترونیک</th>
                <th >شماره همراه</th>
                <th >سطح دسترسی</th>
                <th >وضعیت</th>
            </tr>
            </thead>
            <tbody>
            @if (isset($user) && $user && count($user) > 0)
            @foreach ($user as $users)
            <tr>
                <td>{{ $users['name'] }}</td>
                <td>{{ $users['family'] }}</td>
                <td>{{ $users['email'] }}</td>
                <td>{{ $users['mobile'] }}</td>
                <td>{{ $users['permission'] }}</td>
                <td>{{ $users['status'] }}</td>
                <td><span class="slider" _ngcontent-c7=""></span> </td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
</div>

@stop
