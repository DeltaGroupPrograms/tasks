@extends('tasks')
@section('content')
<div class="col-md-6 ChangePasswordForm" >
    {{csrf_field()}}
    <div class="form-caption">لیست پروژه های انجام شده</div>
    <table class="hor-minimalist-b">
        <thead>
        <tr>
            <th >ایجاد کننده</th>
            <th >عنوان</th>
            <th>نوع</th>
            <th >تاریخ شروع</th>
            <th >تاریخ پایان</th>
            <th >وضعیت</th>
            <th >مبلغ</th>
        </tr>
        </thead>
        <tbody>
        @if (isset($pro) && $pro && count($pro) > 0)
            @foreach ($pro as $pros)
                <tr>
                    <td>{{ $pros['created_at'] }}</td>
                    <td>{{ $pros['protitle'] }}</td>
                    <td>{{ $pros['prokind'] }}</td>
                    <td>{{ $pros['begindate'] }}</td>
                    <td>{{ $pros['enddate'] }}</td>
                    <td>{{ $pros['status'] }}</td>
                    <td>{{ $pros['price'] }}</td>
                </tr>
        @endforeach
        @endif
    </table>



</div>


</div>
@stop

