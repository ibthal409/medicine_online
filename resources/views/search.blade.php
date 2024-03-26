<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>medicines</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/bbb393de5a.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="banner">
    @if(session('LoggedUser'))
        <div class="navbar">
            <img src='/images/logo2.jpg' class="logo">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/products">side effict</a></li>
                <li><a href="/logout">Logout</a></li>
                <li><a href="/mylist" target="_blank">my list</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>

        </div>
        @else
        <div class="navbar">
            <img src='/images/logo2.jpg' class="logo">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/products">side effict</a></li>
                <li><a href="/login">login</a></li>
                <li><a href="/mylist" target="_blank">my list</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
@endif

        <div class="result">
            @if(session('status'))
            <div class="alert alert-info">{{session('status')}}</div>
            @endif
                    @foreach($medicine_name as $items)

                    <table class="table table-bordered">

                        <tr>
                            <th>Summary: </th>
                            <td>{{$items->summary}}</td>
                        </tr>
                        <tr>
                            <th>Brand Names: </th>
                            <td>{{$items->brand_ames}}</td>
                        </tr>
                        <tr>
                            <th>Generic Name: </th>
                            <td>{{$items->generic_name}}</td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <th>Absorption: </th>
                            <td>{{$items->Absorption}}</td>
                        </tr>
                        <tr>
                            <th>Drug Alternatives:  </th>
                            <td>{{$items->drug_alternatives}}</td>
                        </tr>

                    </table>
                    @endforeach
        </div>
            <footer class="mfoorer">

                <div class="column">
                    <div class="footercolumn">
                        <h4>Contact Us</h4>
                        <a id="phone" href="tel:0038622342137">+386 (2) 234 21 37</a>
                        <br>
                        <a id="email" href="clic1983@mail.com">clic1983@mail.com</a>
                        <br>
                        <a id="address" href="https://goo.gl/maps/UVhRVnfRsvu2EvQL9">Blackshaw Rd, <br>London SW17 0QT</a>

                    </div>


                    <div id="contact" class="footercolumn">
                        <h4>Services</h4>
                        <a href="/"> Home</a>
                        <br>
                        <a href="/products">side effict</a>
                        <br>
                        <a href="/mylist">my list</a>
                        <br>
                        <a>Contact</a>

                    </div>
                    <div class="footercolumn">
                        <h4>Information</h4>
                        <a href="/#section1">About Us</a>
                        <br>
                        <a>Privacy Policy</a>
                        <br>
                        <a>Terms& Condations</a>
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

</body>

</html>
