@extends('product.layou')

@section('content')
@if(session('LoggedUser'))
<div class="navbar">
    <img src='/images/logo2.jpg' class="logo">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products" >side effict</a></li>
        <li><a href="/logout">Logout</a></li>

        <li><a href="/mylist">my list</a></li>
        <li><a href="#contact">Contact</a></li>

    </ul>
</div>
@else
<div class="navbar">
    <img src='/images/logo2.jpg' class="logo">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products">side effict</a></li>
        <li><a href="/login">Login</a></li>

        <li><a href="/mylist">my list</a></li>
        <li><a href="#contact">Contact</a></li>

    </ul>
</div>
@endif
<div class="jumbotron container">
  <h1 class="display-4"> Drugs Side Effects</h1>
  <p>A side effect is usually regarded as an undesirable secondary effect which occurs in addition to the desired therapeutic effect of a drug or medication.
  Side effects may vary for each individual depending on the person's disease state, age, weight, gender, ethnicity and general health.A side effect is usually regarded as an undesirable secondary effect which occurs in addition to the desired therapeutic effect of a drug or medication. Side effects may vary for each individual depending on the person's disease state, age, weight, gender, ethnicity and general health. Side effects can occur when commencing, decreasing/increasing dosages, or ending a drug or medication regimen. Side effects may also lead to non-compliance with prescribed treatment. When side effects of a drug or medication are severe, the dosage may be adjusted or a second medication may be prescribed. Lifestyle or dietary changes may also help to minimize side effects.

  </p>

</div>
<div class="container" style="padding-top: 2%;">
<form action="" method="GET">
<div class="input-group mb-3">
  <input type="text" name="Search" required value="<?php if(isset($_GET['Search'])){echo $_GET['Search'];} ?>" class="form-control" placeholder="Search medicine" >
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
 </div>
</div>

<div class="container" style="padding-top: 2%;">
<table class="table table=boardered">
  <thead>
    <tr>
      <th>ID</th>
      <th >Medicine Name</th>
      <th >Side Effect</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con =mysqli_connect("localhost","root","","drugs");
    if(isset($_GET['Search'])){
      $filtervalues =$_GET['Search'];
      $query="SELECT * FROM medicines WHERE CONCAT(medicine_name,side_effect) LIKE '%$filtervalues%' " ;
      $query_run =mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $items){
          ?>
          <tr>
          <td><?= $items['id']; ?></td>
            <td><?= $items['medicine_name']; ?></td>
            <td><?= $items['side_effect']; ?></td>
          </tr>
          <?php
        }
      }
      else{
        ?>
        <tr>
          <td colspan='3'>No Record Found</td>
        </tr>
        <?php
      }
    }
    ?>
    </tbody>
</table>
</div>
@endsection



