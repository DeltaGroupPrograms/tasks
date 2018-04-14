@if(count($errors)>0)
<div class="row BMitra">
    <div class="col-md-12  col-sm-12 col-xs-12 alert-info text-center">
        @foreach($errors->all() as $error)
        <span class="col-xs-12 font text-danger ">{{$error }}</span>
        @endforeach
    </div>
</div>
@endif