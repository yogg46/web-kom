<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
title tag
-->
    <title>KOMINFO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
favicon
-->
    <link rel="apple-touch-icon" sizes="180x180" href="/asset/images/Kominfo3.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/asset/images/Kominfo3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/asset/images/Kominfo3.png">
    <link rel="manifest" href="/publik/assets/images/favicon/site.webmanifest">

    <!--
stylesheets
-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/publik/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/publik/assets/css/glightbox.min.css">
    <link rel="stylesheet" href="/publik/assets/css/all.min.css">
    <link rel="stylesheet" href="/publik/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="/publik/assets/css/overlay-scrollbars.min.css">
    <link rel="stylesheet" href="/publik/assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="/publik/assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <!--
    preloader - start
    -->

        <!--
    preloader - end
    -->

        <!--
    navigation - start
    -->
        {{-- <div class="navigation navigation-1">
            <div class="navigation-wrapper">
                <div class="container">
                    <div class="navigation-inner">
                        <div class="navigation-logo">
                            <a class="logo" href="index.html">
                                <img src="/publik/assets/images/logo.png" alt="orions-logo">
                            </a>
                            <a class="logo-white" href="index.html">
                                <img src="/publik/assets/images/logo-white.png" alt="orions-logo">
                            </a>
                        </div>
                        <div class="navigation-menu">
                            <div class="mobile-header">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="/publik/assets/images/logo-white.png" alt="image">
                                    </a>
                                </div>
                                <ul>
                                    <li class="close-button">
                                        <i class="fas fa-times"></i>
                                    </li>
                                </ul>
                            </div>
                            <ul class="parent">
                                <li>
                                    <a href="index.html" class="link-underline link-underline-1">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="has-child">
                                    <a href="about.html" class="link-underline link-underline-1">
                                        <span>About</span>
                                    </a>
                                    <div class="child">
                                        <ul>
                                            <li>
                                                <a href="about.html" class="link-underline">
                                                    <span>About</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="privacy-policy.html" class="link-underline">
                                                    <span>Privacy Policy</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child">
                                    <a href="features-1.html" class="link-underline link-underline-1">
                                        <span>Features</span>
                                    </a>
                                    <div class="child">
                                        <ul>
                                            <li>
                                                <a href="features-1.html" class="link-underline">
                                                    <span>Features Style 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="features-2.html" class="link-underline">
                                                    <span>Features Style 2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="feature-detail-1.html" class="link-underline">
                                                    <span>Feature Detail 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="feature-detail-2.html" class="link-underline">
                                                    <span>Feature Detail 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-child">
                                    <a href="blog-1.html" class="link-underline link-underline-1">
                                        <span>Blog</span>
                                    </a>
                                    <div class="child">
                                        <ul>
                                            <li>
                                                <a href="blog-1.html" class="link-underline">
                                                    <span>Blog Style 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-2.html" class="link-underline">
                                                    <span>Blog Style 2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-1.html" class="link-underline">
                                                    <span>Blog Detail Style 1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-detail-2.html" class="link-underline">
                                                    <span>Blog Detail Style 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="pricing.html" class="link-underline link-underline-1">
                                        <span>Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" class="link-underline link-underline-1">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="social">
                                <h6>Follow</h6>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="background-pattern">
                                <div class="background-pattern-img background-loop"
                                    style="background-image: url(/publik/assets/images/patterns/pattern.jpg);"></div>
                                <div class="background-pattern-gradient"></div>
                            </div>
                        </div>
                        <div class="navigation-bar">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--
    navigation - end
    -->

        <!--
    page header - start
    -->
        <div class="page-header ">
            <div class="page-header-wrapper">
                <div class="page-header-inner">
                    <div class="container ">
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                                <!--
                              contact form - start
                             -->


                                <div class="contact-form drop-shadow-2">
                                    <div class="contact-form-wrapper">
                                        <div class="section-heading section-heading-2 center">
                                            <div class="sub-heading c-green upper ls-1">
                                                <img class=" h-10" src="/asset/images/Kominfo.png" style="height: 85px"
                                                    alt="">
                                            </div>
                                            {{-- <div class="main-heading c-dark">
                                                <h1>Write message</h1>
                                            </div> --}}
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-floating">
                                                <input class="input form-control" id="email" type="email"
                                                    type="text" placeholder="Email" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                <label for="name-field">Email</label>

                                            </div>

                                            <div class="form-floating">

                                                @error('email')

                                                        <strong style="margin-left: 10px"class="text ml-8 text-danger">{{ $message }}</strong>

                                                @enderror
                                            </div>
                                            <div class="form-floating">
                                                <input class="input form-control" id="password" type="password"
                                                    type="password" placeholder="Email address" name="password" required
                                                    autocomplete="current-password">
                                                <label for="email-field">Password
                                                </label>

                                            </div>

                                            <div class="form-floating">

                                                @error('password')

                                                        <strong style="margin-left: 10px" class="text text-danger">{{ $message }}</strong>

                                                @enderror
                                            </div>

                                            {{-- <div class="form-floating">
                                                <input class="input form-control" id="message-field" type="text"
                                                    placeholder="Message">
                                                <label for="message-field">Message</label>
                                            </div> --}}
                                            <button type="submit" class="button button-2">
                                                <span class="button-inner">
                                                    <span class="button-content">
                                                        <span class="text">Login</span>
                                                    </span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col">

                            </div>
                            <!--

                        contact form - end
                        -->
                        </div>
                    </div>
                </div>
                <div class="background-pattern background-pattern-1">
                    <div class="background-pattern-img background-loop"
                        style="background-image: url(/publik/assets/images/patterns/pattern.jpg);"></div>
                    <div class="background-pattern-gradient"></div>
                    <div class="background-pattern-bottom">
                        <div class="image" style="background-image: url(/publik/assets/images/patterns/pattern-1.jpg)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    page header - end
    -->

        <!--
    contact details - start
    -->
        <div class="contact-details">
            <div class="contact-details-wrapper">
                <div class="container">

                    <!--
                contact details heading - start
                -->
                    {{-- <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="section-heading center width-55">
                                <div class="sub-heading c-green upper ls-1">
                                    <i class="las la-handshake"></i>
                                    <h5>get in touch</h5>
                                </div>
                                <div class="main-heading c-dark">
                                    <h1>Many ways to reach us today.</h1>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--
                contact details heading - end
                -->
                    <!--
                contact details row - start
                -->
                    {{-- <div class="row gx-5 details-row">
                        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="app-feature-single app-feature-single-1">
                                <div class="app-feature-single-wrapper">
                                    <div class="icon">
                                        <i class="las la-phone-volume"></i>
                                    </div>
                                    <h3 class="c-dark">Call Us</h3>
                                    <p class="c-grey">
                                        Phone:
                                        <a href="tel:+123456789" class="link-underline link-underline-1">
                                            <span>+123 456 789</span>
                                        </a>
                                    </p>
                                    <p class="c-grey">
                                        Fax:
                                        <a href="tel:+123456789" class="link-underline link-underline-1">
                                            <span>+123 456 789</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="app-feature-single app-feature-single-1">
                                <div class="app-feature-single-wrapper">
                                    <div class="icon">
                                        <i class="las la-envelope-open"></i>
                                    </div>
                                    <h3 class="c-dark">Email Us</h3>
                                    <p class="c-grey">
                                        <a href="mailto:media@orions.com" class="link-underline link-underline-1">
                                            <span>media@orions.com</span>
                                        </a>
                                    </p>
                                    <p class="c-grey">
                                        <a href="mailto:support@orions.com" class="link-underline link-underline-1">
                                            <span>support@orions.com</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="app-feature-single app-feature-single-1">
                                <div class="app-feature-single-wrapper">
                                    <div class="icon">
                                        <i class="las la-map-marked-alt"></i>
                                    </div>
                                    <h3 class="c-dark">Find Us</h3>
                                    <p class="c-grey">Orions, Inc.</p>
                                    <p class="c-grey">30 Aarhus, Denmark</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--
                contact details row - end
                -->
                </div>
            </div>
        </div>
        <!--
    contact details - end
    -->

        <!--
    contact form section - start
    -->
        {{-- <div class="contact-form-section">
            <div class="contact-form-section-wrapper">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <!--
                              contact form - start
                             -->
                            <div class="contact-form drop-shadow-2">
                                <div class="contact-form-wrapper">
                                    <div class="section-heading section-heading-2 center">
                                        <div class="sub-heading c-green upper ls-1">
                                            <i class="las la-envelope"></i>
                                            <h5>contact</h5>
                                        </div>
                                        <div class="main-heading c-dark">
                                            <h1>Write message</h1>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-floating">
                                            <input class="input form-control" id="name-field" type="text"
                                                placeholder="Full name">
                                            <label for="name-field">Full name</label>
                                        </div>
                                        <div class="form-floating">
                                            <input class="input form-control" id="email-field" type="text"
                                                placeholder="Email address">
                                            <label for="email-field">Email address</label>
                                        </div>
                                        <div class="form-floating">
                                            <input class="input form-control" id="message-field" type="text"
                                                placeholder="Message">
                                            <label for="message-field">Message</label>
                                        </div>
                                        <button type="submit" class="button button-2">
                                            <span class="button-inner">
                                                <span class="button-content">
                                                    <span class="text">Submit Reply</span>
                                                </span>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--
                        contact form - end
                        -->
                        </div>
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <!--
                            newsletter form - start
                            -->
                            <div class="contact-form contact-form-1 drop-shadow-2">
                                <div class="contact-form-wrapper">
                                    <div class="section-heading section-heading-2 center">
                                        <div class="sub-heading c-green upper ls-1">
                                            <i class="las la-envelope-open"></i>
                                            <h5>subscribe</h5>
                                        </div>
                                        <div class="main-heading c-dark">
                                            <h1>Our newsletter</h1>
                                        </div>
                                    </div>
                                    <div class="contact-form-icon">
                                        <i class="las la-envelope-open-text"></i>
                                    </div>
                                    <form>
                                        <div class="form-floating">
                                            <input class="input form-control" id="email-field-1" type="text"
                                                placeholder="Email address">
                                            <label for="email-field-1">Email address</label>
                                        </div>
                                        <button type="submit" class="button button-3">
                                            <span class="button-inner">
                                                <span class="button-content">
                                                    <span class="text">Subscribe</span>
                                                </span>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--
                            newsletter form - end
                            -->
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}
        <!--
    contact form section - end
    -->

        <!--
    instagram - start
    -->
        {{-- <div class="instagram">
            <div class="instagram-wrapper">
                <div class="instagram-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="instagram-slide">
                                    <img src="/publik/assets/images/instagram/instagram-img-1.jpg"
                                        alt="instagram-slide-image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="instagram-slide">
                                    <img src="/publik/assets/images/instagram/instagram-img-2.jpg"
                                        alt="instagram-slide-image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="instagram-slide">
                                    <img src="/publik/assets/images/instagram/instagram-img-3.jpg"
                                        alt="instagram-slide-image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="instagram-slide">
                                    <img src="/publik/assets/images/instagram/instagram-img-4.jpg"
                                        alt="instagram-slide-image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="instagram-slide">
                                    <img src="/publik/assets/images/instagram/instagram-img-5.jpg"
                                        alt="instagram-slide-image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="instagram-slide">
                                    <img src="/publik/assets/images/instagram/instagram-img-6.jpg"
                                        alt="instagram-slide-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrapper">
                    <a href="#" class="button button-basic">
                        <div class="button-inner">
                            <div class="button-content">
                                <i class="fab fa-instagram"></i>
                                <h4>Follow us on Instagram</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div> --}}
        <!--
    instagram - end
    -->

        <!--
    footer - start
    -->
        {{-- <footer class="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="footer-row">
                                <div class="footer-detail">
                                    <a href="#">
                                        <img src="/publik/assets/images/logo.png" alt="footer-logo">
                                    </a>
                                    <p class="c-grey-1">Orions is a universal app template that was designed to cater
                                        to most of the modern app landing page designs requirements.</p>
                                    <div class="links">
                                        <a class="link-underline" href="mailto:hello@orions.com">
                                            <span>hello@orions.com</span>
                                        </a>
                                        <a class="link-underline" href="tel:+1-234-567-890">
                                            <span>+1 234 567 890</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-list footer-social social-gradient">
                                    <h6>Follow</h6>
                                    <ul>
                                        <li class="twitter">
                                            <a href="#" class="link-underline">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                        <li class="facebook">
                                            <a href="#" class="link-underline">
                                                <i class="fab fa-facebook"></i>
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#" class="link-underline">
                                                <i class="fab fa-linkedin-in"></i>
                                                <span>Linkedin</span>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#" class="link-underline">
                                                <i class="fab fa-youtube"></i>
                                                <span>Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-list">
                                    <h6>Menu</h6>
                                    <ul>
                                        <li>
                                            <a href="about.html" class="link-underline">
                                                <span>About</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html" class="link-underline">
                                                <span>Our Team</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="features-1.html" class="link-underline">
                                                <span>Features</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-1.html" class="link-underline">
                                                <span>Blog</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html" class="link-underline">
                                                <span>How It Works</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="link-underline">
                                                <span>Contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-list">
                                    <h6>Explore</h6>
                                    <ul>
                                        <li>
                                            <a href="pricing.html" class="link-underline">
                                                <span>Pricing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html" class="link-underline">
                                                <span>Terms of Services</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html" class="link-underline">
                                                <span>Privacy Policy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="link-underline">
                                                <span>Help Center</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="footer-copyright c-grey-1">
                                <h6>&copy; GFXPARTNER</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-pattern"
                    style="background-image: url(/publik/assets/images/patterns/pattern-1.jpg)"></div>
            </div>
        </footer> --}}
        <!--
    footer - end
    -->

    </div>

    <!--
    scripts
    -->
    <script src="/publik/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/publik/assets/js/swiper-bundle.min.js"></script>
    <script src="/publik/assets/js/glightbox.min.js"></script>
    <script src="/publik/assets/js/overlay-scrollbars.min.js"></script>
    <script src="/publik/assets/js/gsap.min.js"></script>
    <script src="/publik/assets/js/main.js"></script>
</body>

</html>
