@extends('mylist.layout')
@section('content')
<div class="container" style="padding-top:5%">
<div class="card ">
  <div class="card-body">
   <p class="card-text"> <span><a href="{{route('mylist.index')}}"> back</a></span>  Medecine name: {{ $mylist-> medecine_name}}</p>
</div>
</div>

<div class="container" style="padding-top: 2%">


  <div class="form-group" style="padding-bottom:15px">
    <label for="exampleFormControlInput1">{{ $mylist-> medecine_name}}</label>

  </div>
  <div class="form-group" style="padding-bottom: 15px">
    <label for="exampleFormControlInput1">{!! $mylist-> details !!}</label>

  </div>




</div>

@endsection
