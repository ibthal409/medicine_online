@extends('main')
@section('css')
<link rel="stylesheet" href="/css/main.css">
@endsection
@section('main')
    <div class="search">
        <h1>search over drug product</h1>
        {{ csrf_field() }}
        <form action="/search" method="POST">
        @csrf
            <input type="text" placeholder=" Enter the drug" name='q' required>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-search" style=" font-size: 46px;
                margin-left: -21px;
                color:#e2e8f1;
                align-items: center;">
                </i>
                </i>
            </button>
        </form>
    </div>
    <br>
    <h3>medicines is offered to the public as a freely available resource</h3>
    <h5>Your Health from A to Z Easy-to-understand health information to help you discover medication. Find out what you need to know about side effects, comparisons, and treatment options to discuss with your doctor. Find out what to expect and how to prepare for successful results.</h5>
    <section id="section2" class="ar-section">
        <div class="articles">
            <div class="dd-media-list">
                <div class="dd-content">
                    <a href="https://www.webteb.com/articles/%D8%AD%D8%A8%D9%88%D8%A8-%D8%AD%D8%B3%D8%A7%D8%B3%D9%8A%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D9%81_32400"></a>
                    <div class="dd-image">
                        <a href="https://www.webteb.com/articles/%D8%AD%D8%A8%D9%88%D8%A8-%D8%AD%D8%B3%D8%A7%D8%B3%D9%8A%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D9%81_32400">
                            <img src="/images/1.jpg">
                        </a>
                    </div>
                    <div>
                        <h2 class="dd-title">
                            <a href="https://www.webteb.com/articles/%D8%AD%D8%A8%D9%88%D8%A8-%D8%AD%D8%B3%D8%A7%D8%B3%D9%8A%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D9%81_32400">Nose sensitivity pills and other tips for treatment</a>
                        </h2>
                        <p>There are many medications that help eliminate the symptoms of nasal sensitivity, including grain, and in this article, and in this article we will mention the types of nose sensitivity pills.</p>
                    </div>
                </div>
            </div>
            <div class="dd-media-list">
                <div class="dd-content">
                    <a href="https://www.webteb.com/articles/%D8%A7%D8%AF%D9%88%D9%8A%D8%A9-%D8%AA%D8%B3%D8%A8%D8%A8-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%88%D8%B2%D9%86_20989"></a>
                    <div class="dd-image">
                        <a href="https://www.webteb.com/articles/%D8%A7%D8%AF%D9%88%D9%8A%D8%A9-%D8%AA%D8%B3%D8%A8%D8%A8-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%88%D8%B2%D9%86_20989">
                            <img src="/images/2.jpg"></a>
                    </div>
                    <div>
                        <h2 class="dd-title">
                            <a href="https://www.webteb.com/articles/%D8%A7%D8%AF%D9%88%D9%8A%D8%A9-%D8%AA%D8%B3%D8%A8%D8%A8-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%88%D8%B2%D9%86_20989">Drugs cause weight gain: you know</a>
                        </h2>
                        <p>Maybe I wondered the antibiotic affects kidney? This article is specifically prepared to provide you with enough answer and other important information, so read</p>
                    </div>
                </div>
            </div>
            <div class="dd-media-list">
                <div class="dd-content">
                    <a href="https://baby.webteb.com/articles/%D9%85%D8%B1%D9%87%D9%85-%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D8%B7%D9%81%D8%AD-%D8%A7%D9%84%D8%AC%D9%84%D8%AF%D9%8A-%D9%84%D9%84%D8%A7%D8%B7%D9%81%D8%A7%D9%84_33980"></a>
                    <div class="dd-image">
                        <a href="https://baby.webteb.com/articles/%D9%85%D8%B1%D9%87%D9%85-%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D8%B7%D9%81%D8%AD-%D8%A7%D9%84%D8%AC%D9%84%D8%AF%D9%8A-%D9%84%D9%84%D8%A7%D8%B7%D9%81%D8%A7%D9%84_33980">
                            <img src="/images/3 .jpg"></a>
                    </div>
                    <div>
                        <h2 class="dd-title">
                            <a href="https://baby.webteb.com/articles/%D9%85%D8%B1%D9%87%D9%85-%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D8%B7%D9%81%D8%AD-%D8%A7%D9%84%D8%AC%D9%84%D8%AF%D9%8A-%D9%84%D9%84%D8%A7%D8%B7%D9%81%D8%A7%D9%84_33980">Ointment for skin rash treatment for children</a>
                        </h2>
                        <p>Was your child's rash infected by pain and pain? Learn about the ointment of the skin rash for children in this article.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="art">
            <div class="dd-media-list">
                <div class="dd-content">
                    <a href="https://www.webteb.com/articles/%D8%A7%D8%B3%D8%A8%D8%A7%D8%A8-%D8%AC%D8%B1%D8%AB%D9%88%D9%85%D8%A9-%D8%A7%D9%84%D9%85%D8%B9%D8%AF%D8%A9_32842"></a>
                    <div class="dd-image">
                        <a href="https://www.webteb.com/articles/%D8%A7%D8%B3%D8%A8%D8%A7%D8%A8-%D8%AC%D8%B1%D8%AB%D9%88%D9%85%D8%A9-%D8%A7%D9%84%D9%85%D8%B9%D8%AF%D8%A9_32842">
                            <img src="/images/4.png">
                        </a>
                    </div>
                    <div>
                        <h2 class="dd-title">
                            <a href="https://www.webteb.com/articles/%D8%A7%D8%B3%D8%A8%D8%A7%D8%A8-%D8%AC%D8%B1%D8%AB%D9%88%D9%85%D8%A9-%D8%A7%D9%84%D9%85%D8%B9%D8%AF%D8%A9_32842">Causes of stomach germ</a>
                        </h2>
                        <p>What are the causes of gastric germ? What are the risk factors? What are the possible treatment methods? Important details in this article.</p>
                    </div>
                </div>
            </div>
            <div class="dd-media-list">
                <div class="dd-content">
                    <a href="https://www.webteb.com/articles/%D8%A7%D8%AF%D9%88%D9%8A%D8%A9-%D8%AA%D8%B3%D8%A8%D8%A8-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%88%D8%B2%D9%86_20989"></a>
                    <div class="dd-image">
                        <a href="https://www.webteb.com/articles/%D8%A7%D8%AF%D9%88%D9%8A%D8%A9-%D8%AA%D8%B3%D8%A8%D8%A8-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%88%D8%B2%D9%86_20989">
                            <img src="/images/5.jpg"></a>
                    </div>
                    <div>
                        <h2 class="dd-title">
                            <a href="https://www.webteb.com/articles/%D8%A7%D8%AF%D9%88%D9%8A%D8%A9-%D8%AA%D8%B3%D8%A8%D8%A8-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D9%88%D8%B2%D9%86_20989">Treatment of rewind and diarrhea</a>
                        </h2>
                        <p>Do you want to know how to treat rewind and diarrhea? We gathered you the most important information in the following article, followed and know.</p>
                    </div>
                </div>
            </div>
            <div class="dd-media-list">
                <div class="dd-content">
                    <a href="https://www.webteb.com/articles/%D9%87%D9%84-%D8%A7%D9%84%D9%85%D8%B6%D8%A7%D8%AF-%D8%A7%D9%84%D8%AD%D9%8A%D9%88%D9%8A-%D9%8A%D8%A4%D8%AB%D8%B1-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%83%D9%84%D9%89_32833"></a>
                    <div class="dd-image">
                        <a href="https://www.webteb.com/articles/%D9%87%D9%84-%D8%A7%D9%84%D9%85%D8%B6%D8%A7%D8%AF-%D8%A7%D9%84%D8%AD%D9%8A%D9%88%D9%8A-%D9%8A%D8%A4%D8%AB%D8%B1-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%83%D9%84%D9%89_32833">
                            <img src="/images/6.jpg"></a>
                    </div>
                    <div>
                        <h2 class="dd-title">
                            <a href="https://www.webteb.com/articles/%D9%87%D9%84-%D8%A7%D9%84%D9%85%D8%B6%D8%A7%D8%AF-%D8%A7%D9%84%D8%AD%D9%8A%D9%88%D9%8A-%D9%8A%D8%A4%D8%AB%D8%B1-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%83%D9%84%D9%89_32833">Is the antibiotic affects kidneys?</a>
                        </h2>
                        <p>Is the antibiotic affects kidneys? What is the most important effects on kidneys? You will find the answer and other information interested in this article.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>


    <section id="section1" class="about-as">

        <div class="us">
            <div class="color">
                <h3>About US</h3>
                <ul>
                    <span>OUR TEAM</span>
                    <li>
                        <h5>Israa Ali</h5>
                        <img src="/images/israa.jpeg">
                        <br>
                        <p>Studies Medical informatics at Benha Faculty Of Computer And Information Science </p>
                        <br>
                        <p>level 3</p>
                        <br>
                        <p>Responsible for List Page </p>
                        <br>

                    </li>


                    <li>
                        <h5>Ibthal Mohammed</h5>

                        <img src="/images/ibthall.jpeg">
                        <br>
                        <p>Studies Medical informatics at Benha Faculty Of Computer And Information Science </p>
                        <br>
                        <p>level 3</p>
                        <br>
                        <p>Resposible for Home Page </p>
                        <br>
                    </li>

                    <li>
                        <h5>Asmaa Magdy</h5>

                        <img src="/images/asma.jpeg">
                        <p>Studies Medical informatics at Benha Faculty Of Computer And Information Science </p>
                        <br>
                        <p>level 3</p>
                        <br>
                        <p>Resposible for Login Page </p>
                        <br>

                    </li>
                    <li>
                        <h5>Thraa Ali</h5>
                        <img src="/images/thraa.jpeg">
                        <p>Studies Medical informatics at Benha Faculty Of Computer And Information Science </p>
                        <br>
                        <p>level 3</p>
                        <br>
                        <p>Resposible for Side effect Page </p>
                        <br>
                    </li>

                </ul>
            </div>
        </div>

    </section>
    </div>
@endsection
