
@extends('mylist.layout')
@section('content')




<div class="navbar">
    <img src='/images/logo2.jpg' class="logo">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products" target="_blank">side effict</a></li>
        <li><a href="/logout">Logout</a></li>
        <li><a href="/mylist">my list</a></li>
        <li><a href="#contact">Contact</a></li>

    </ul>
</div>
<div class="container ">
    <div class="card mb-3" style="width: 600px;height:210px;">
        <div class="row no-gutters">
            <div class="pic">
                <img src="/images/11.png" alt="...">
            </div>
            <div class="col-md-8 " style="border:none ;">

                <div class="card-body">
                    <p class="card-text"> Name: {{$user->name}}  </p>
                    <p class="card-text"> Age: {{$user->Age}} </p>

                </div>

            </div>
        </div>
    </div>

    <div class="text">
        <p class="text1"> My List</p>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">medecine name</th>

                <th scope="col" class="action1">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php

            $i=0;
            @endphp
            @foreach($b as $item)
                <tr>
                <th scope="row"> {{++ $i}}</th>
                <td>{{$item->medecine_name}}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                            <a class="btn btn-success" href="{{route('mylist.edit', $item->id )}}">Edit </a>
                        </div>
                        <div class="col-sm">
                            <a class="btn btn-primary" href="{{route('mylist.show', $item->id )}}">Show details </a>
                        </div>
                        <div class="col-sm">
                            <form action="{{route('mylist.destroy', $item->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Remove</button>
                            </form>
                        </div>
                    </div>

            </tr>




            @endforeach
        </tbody>
    </table>



    <span>
        <div class="col-md-12 text-center">

            <a class="btn btn-primary btn-lg" style="margin:10px" href="{{route('mylist.create' )}}" role="button">Add new medecine</a>
        </div>
    </span>


    <footer class="mfoorer">

        <div class="column">
            <div class="footercolumn">
                <h5>Contact Us</h5>
                <a id="phone" href="tel:0038622342137">+386 (2) 234 21 37</a>
                <br>
                <a id="email" href="clic1983@mail.com">clic1983@mail.com</a>
                <br>
                <a id="address" href="https://goo.gl/maps/UVhRVnfRsvu2EvQL9">Blackshaw Rd, <br>London SW17 0QT</a>

            </div>


            <div id="contact" class="footercolumn">
                <h5>Services</h5>
                <a href="/"> Home</a>
                <br>
                <a href="/products">side effict</a>
                <br>
                <a href="/mylist">my list</a>
                <br>
                <a href="">Contact</a>

            </div>
            <div class="footercolumn">
                <h5>Information</h5>
                <a href="/#section1">About Us</a>
                <br>
                <a href="">Privacy Policy</a>
                <br>
                <a href="">Terms& Condations</a>
                <br>
                <a href="/#section2">FAQ</a>
            </div>
            <div class="media">
                <ul>

                    <li>
                        <a href="https://fa-facebook.com/?lang=ar" class="fab fa-facebook"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/?lang=ar" class="fab fa-twitter"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
                    </li>
                </ul>
            </div>
        </div>

    </footer>

    @endsection
