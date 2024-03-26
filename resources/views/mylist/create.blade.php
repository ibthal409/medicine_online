@extends('mylist.layout')
@section('content')
<div class="container" style="padding-top:5%">
<div class="card ">
  <div class="card-body " style="background-color: #577cf5;">
    Your new medecine
  </div>
</div>
</div>

<div class="container" style="padding-top: 2%">

<form action="{{ route('mylist.store'  )}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Your medecine name</label>
    <input type="text" name="medecine_name" class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Details</label>
    <input type="text" name="details" class="form-control"  >
  </div>



  <div class="form-group" style="padding-top: 2%">
  <button type="supmit" class="btn btn-primary"> Save </button>
  </div>
</form>
</div>

@endsection
