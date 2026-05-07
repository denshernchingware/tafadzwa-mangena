<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('demos/freelancer/freelancer.css') }}" />

</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>

        @include('components.nav')

        <div class="push-menu hamburger-nav header-dark hamburger-menu-half bg-dark-gray md-w-60 sm-w-100"
            style="background-image: url({{ asset('images/demo-gym-and-fitness-menu-bg.jpg') }})">
            <span class="close-menu text-dark-gray bg-white"><i class="fa-solid fa-xmark"></i></span>
            <div class="d-flex flex-column justify-content-center h-100 ps-18 pb-12 xxl-p-12 sm-p-20px">
                <div class="hamburger-menu menu-list-wrapper w-80 lg-w-100 lg-no-margin sm-mt-auto sm-mb-auto"
                    data-scroll-options='{ "theme": "light" }'>
                    <ul class="menu-item-list fw-500 p-0">
                        <li class="menu-item"><a href="#home" class="inner-link nav-link">Home</a></li>
                        >
                        <li class="menu-item"><a href="#work" class="inner-link nav-link">All Projects</a></li>

                    </ul>
                </div>
                <div class="w-90 xxl-w-100 d-none d-lg-inline-block">
                    <div class="row row-cols-1 row-cols-xl-2 menu-address">
                        <div class="col">
                            {{-- <span class="text-white fs-16 ls-05px">Contact information</span>
                            <div class="h-1px w-90 lg-w-100 bg-white-transparent-extra-light mt-15px mb-15px"></div>
                            <p class="fs-15 lh-26 w-90 xl-w-100 text-white fw-300">28 New regent view road, New York,
                                USA</p> --}}
                        </div>
                        <div class="col">
                            {{-- <span class="text-white fs-16 ls-05px">Connect with us</span>
                            <div class="h-1px w-90 xxl-w-100 bg-white-transparent-extra-light mt-15px mb-15px"></div>
                            <p class="fs-15 lh-28 w-90 xxl-w-100 lg-mb-0 fw-300"><a href="mailto:info@yourdomain.com"
                                    class="d-block text-white text-white-hover">info@yourdomain.com</a><a
                                    href="tel:12345678910" class="text-white text-white-hover">+1 234 567 8910</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    @yield('content')
    @include('components.form')
    @include('components.chat')
    @include('components.footer')

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>
