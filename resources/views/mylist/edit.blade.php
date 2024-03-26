@extends('mylist.layout')
@section('content')
<div class="container" style="padding-top:5%">
<div class="card ">
  <div class="card-body">
  <p class="card-text"> <span><a href="{{route('mylist.index')}}"> back</a></span> Your medecine: {{ $mylist-> medecine_name}}</p>
  </div>
</div>
</div>

<div class="container" style="padding-top: 2%">
<form action="{{ route('mylist.update' , $mylist->id )}}" method="POST">
    @csrf

   @method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Your medecine name</label>
    <input type="text" name="medecine_name" value="{{ $mylist-> medecine_name}}"class="form-control"  placeholder="Your medecine name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Details</label>
    <input type="text" name="details" value="{{ $mylist-> details}}" class="form-control"  placeholder="details">
  </div>



  <div class="form-group" style="padding-top: 2%">
  <button type="supmit" class="btn btn-primary"> Save </button>
  </div>
</form>
</div>

@endsection
