@extends('tasks')
@section('content')
    <h1>{{ $user->name }}</h1>
    <form action="{{ route('update') }}" method="post">
        {{ csrf_field() }}
        نام: <input type="text" value="{{ $user->name }}" name="fname"/><br/>
        نام کاربری: <input type="text" value="{{ $user->family }}" name="lname"/><br/>
        پست الکترونیک: <input type="text" value="{{$user->email}}" name="email"/><br/>
        <input type="submit" value="Submit"/>
    </form>
@stop