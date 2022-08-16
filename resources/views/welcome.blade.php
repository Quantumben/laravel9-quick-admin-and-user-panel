<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokenCoin - Buy & Sell Your Cryptocurrency</title>
    <link rel="stylesheet" type="text/css" href="{{asset('front-page/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-page/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-page/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-page/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-page/css/custom.css')}}">
</head>
<body>
<div id="header-holder">
    <div class="cloud-bg"></div>
    <nav id="nav" class="navbar navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="{{asset('front-page/images/logo2x.png')}}" alt="TokenCoin"></a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                            <ul class="nav navbar-nav navbar-nav-centered">
                                <li class="nav-item"><a class="nav-link" href="">Home</a></li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}">Register</a>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right other-navbar">
                                <li class="nav-item">
                                    <a class="nav-link btn-client-area" href="{{route('dashboard')}}"><img src="{{asset('front-page/images/lock.svg')}}" alt="">Client Area</a>
                                    <div class="chat-info"><i class="hstb hstb-right-arrow"></i>Chat Available</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="{{asset('front-page/images/slide-img1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Outstanding service<br>all for you.</div>
                                    <div class="m-text">Buy your cryptocurrency <span class="bold">as low as $5</span></div>
                                    <a href="{{route('register')}}" class="hbtn hbtn-primary hbtn-lg">Get started</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Create your first<br>website today.</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Create now</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="images/slide-img3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Build your site<br>with page builder</div>
                                    <div class="m-text">Starting at only <span class="bold">$2.38/mo*</span></div>
                                    <a href="#" class="hbtn hbtn-primary hbtn-lg">Learn more</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="slide">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="main-domain-search-holder">
                                        <div class="b-text">User-friendly, affordable<br>fast payment</div>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- <div class="input-items">
                                                        <input type="text" class="form-control domain-input" name="domain" placeholder="My domain name" autocapitalize="none" />
                                                        <span class="input-items-btn">
                                                            <input type="submit" class="btn search" value="Search" />
                                                            <input type="submit" name="transfer" class="btn transfer" value="Transfer" />
                                                        </span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </form>
                                        <div class="m-text">As Low As<span class="bold"> $5*</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="features container-fluid">
    <div class="container">
        <div class="row rtl-row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="{{asset('front-page/images/feature1.png')}}" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">Let make you happy</div>
                    <div class="feature-text">Our services are quite easy and affordable to use, a trial will convince you.</div>
                    <div class="feature-link"><a href="{{route('register')}}" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="{{asset('front-page/images/feature2.png')}}" alt="">
                </div>
            </div>
            <div class="col-sm-7 def-aligned">
                <div class="feature-info">
                    <div class="feature-title">In a hurry? let’s start!</div>
                    <div class="feature-text">Our services are top-notch when it comes to cryptocurrency.</div>
                    <div class="feature-link"><a href="{{route('register')}}" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
        <div class="row rtl-row">
            <div class="col-sm-5">
                <div class="img-holder">
                    <img src="{{asset('front-page/images/feature3.png')}}" alt="">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="feature-info">
                    <div class="feature-title">Grow with us</div>
                    <div class="feature-text">Are you a newbie ? don't worry we are ready to carry you on our shoulder.</div>
                    <div class="feature-link"><a href="{{route('register')}}" class="hbtn hbtn-default">Get Started!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Our services</div>
            </div>
        </div>
        <div class="row custom-padding">
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Buy Cryptocurrency</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{{asset('front-page/images/server1.svg')}}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>We buy from all customers</li>
                            <li>We don't select customers</li>
                            <li>We buy as low as $5</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Are you ready to buy ?</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">5</span><span class="duration"> Crypto</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="">Get Started!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Sell Cryptocurrency</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{{asset('front-page/images/server4.svg')}}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>We sell to all customers</li>
                            <li>We don't select customers</li>
                            <li>We sell as low as $5</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Are you ready to sell ?</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">5</span><span class="duration"> Crypto</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="{{route('register')}}">See Plans</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">We Pick DigitalCurrency</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="{{asset('front-page/images/server2.svg')}}" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Up to 2X Faster</li>
                            <li>4X More Scalable</li>
                            <li>Fast Payment</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">You want to recieve money ?</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">5</span><span class="duration"> Funds</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="">Know more</a>
                    </div>
                </div>
            </div>

            <!-- the ones i don't need  -->

            <!-- <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">VPS Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server3.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Dedicated Control</li>
                            <li>Full Root Access</li>
                            <li>Scalable Resources</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">20.40</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="vpshosting.html">Get Started!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Dedicated Hosting</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server5.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>Full root access</li>
                            <li>4 core CPU | 8GB RAM | 1TB disk</li>
                            <li>Unmetered bandwith</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">22.80</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="dedicatedhosting.html">See Plans</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box">
                    <div class="pricing-title">Domain names</div>
                    <div class="pricing-icon">
                        <div class="icon"><img src="images/server6.svg" alt=""></div>
                    </div>
                    <div class="pricing-details">
                        <ul>
                            <li>User-friendly building tools</li>
                            <li>Host unlimited domains</li>
                            <li>Perfect for small sites/blogs</li>
                        </ul>
                    </div>
                    <div class="pricing-price">
                        <div class="price-info">Starting at only</div>
                        <div class="price">
                            <span class="currency">$</span><span class="num">50.22</span><span class="duration">/mo</span>
                        </div>
                    </div>
                    <div class="pricing-button">
                        <a href="domains.html">Know more</a>
                    </div>
                </div>
            </div> -->

            <!-- the ones i don't need  ends-->

        </div>
    </div>
</div>
<div class="latest-news container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row-title">
                    Latest news from our blog
                </div>
            </div>
            <div class="col-sm-4">
                <div class="main-btn-holder">
                    <a href="" class="hbtn hbtn-default">View more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="post-box blue-bg">
                    <div class="post-img"></div>
                    <span class="badge badge-danger">Hot</span>
                    <div class="post-title">How to send cryptocurrency to our staff</div>
                    <div class="post-link"><a href="#">Learn more</a></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="post-box grey-bg">
                    <div class="post-img"></div>
                    <span class="badge badge-info">Hot</span>
                    <div class="post-title">How to buy DigitalCurrency from our staff</div>
                    <div class="post-link"><a href="#">Learn more</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="post-box yellow-bg">
                    <div class="post-img"></div>
                    <span class="badge badge-dark">Hot</span>
                    <div class="post-title">Check out our reviews</div>
                    <div class="post-link"><a href="#">Learn more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- the ones i don't need  -->

<!-- <div class="domain-search-holder container-fluid">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lgmd-4"><div class="title">Search a domain</div></div>
                <div class="col-sm-8 col-md-5 col-lgmd-6">
                    <input class="domain-input" type="text" placeholder="Domain name">
                </div>
                <div class="col-sm-4 col-md-3 col-lgmd-2">
                    <button type="submit">Search now</button>
                </div>
            </div>
        </form>
    </div>
</div> -->
<!-- the ones i don't need  -->

<div class="support-links container-fluid">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="{{asset('front-page/images/info.svg')}}" alt=""></div>
                <a href="tel:+2347088844808" class="link">Let’s talk</a>
                <div class="text">You can talk to us via our hotline.</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="{{asset('front-page/images/chat.svg')}}" alt=""></div>
                <a href="{{route('login')}}" class="link">Go to support center</a>
                <div class="text">Are you finding it difficult reaching us ? you can drop a message with us and we are going to reply asap.</div>
            </div>
        </div>
    </div>
</div>
<div class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <!-- <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="blog.html">Press & Media</a></li>
                        <li><a href="blog.html">News & Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Hosting</h4>
                    <ul>
                        <li><a href="webhosting.html">Web Hosting</a></li>
                        <li><a href="wordpresshosting.html">Wordpress Hosting</a></li>
                        <li><a href="cloudhosting.html">Cloud Hosting</a></li>
                        <li><a href="vpshosting.html">VPS Hosting</a></li>
                        <li><a href="dedicatedhosting.html">Dedicated Hosting</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Domains</h4>
                    <ul>
                        <li><a href="domains.html">Register Domains</a></li>
                        <li><a href="domains.html">Transfer Domains</a></li>
                        <li><a href="domains.html">Manage Domains</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="footer-menu">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="">Client area</a></li>
                        <li><a href="#">Blog</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="footer-menu">
                    <h4>Contact us</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li> -->
                    </ul>
                    <ul>
                        <li>Tel: +(234) 7088844808</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="copyright">© Copyright 2022 TokenCoin.com.ng, All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('front-page/js/jquery.min.js')}}"></script>
<script src="{{asset('front-page/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-page/js/slick.min.js')}}"></script>
<script src="{{asset('front-page/js/main.js')}}"></script>
</body>


</html>
