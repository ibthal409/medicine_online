@extends('product.layout')

@section('content')
<div class="container" style="padding-top: 12%;">
<div class="card">

  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="container" style="padding-top: 2%;">
<form action="{{route('products.store')}}"method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">name</label>
    <input type="text"  name="name" class="form-control" id="exampleFormControlInput1" placeholder="product.name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">details</label>
    <input type="text"  name="details" class="form-control" id="exampleFormControlInput1" placeholder="product.details">
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-info">save</button>
  </div>
  
</form>
</div>




@endsection