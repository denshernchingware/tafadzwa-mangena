@extends('layout')
@section('content')
    <section
        class="full-screen magic-cursor ipad-top-space-margin md-p-0 round-cursor bg-base-color bg-sliding-line overflow-hidden position-relative md-h-850px sm-h-750px"
        id="home">
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 15,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#000000", "#000000", "#000000", "#000000", "#000000"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.3,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <!-- <img src="https://placehold.co/435x468" class="position-absolute top-35 left-minus-100px left-img d-none d-md-block" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt=""> -->

        @foreach ($heroes as $hero)
            {{-- additional_image here --}}
            <img src="{{ asset('storage/' . $hero->additional_image) }}"
                class="position-absolute top-35 left-minus-100px left-img d-none d-md-block"
                data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                alt="{{ $hero->role }} additional image">
            <div class="container h-100">
                <div class="row align-items-start align-items-lg-center h-100">
                    <div class="col-xl-6 col-lg-8 md-pt-15"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="fs-100 sm-fs-80 lh-110 text-white fw-700 ls-minus-5px"><span
                                class="text-outline">Tafadzwa</span><i
                                class="bi bi-arrow-up-right icon-very-medium lh-0 ms-5px"></i></div>
                        <div class="ps-20">
                            <div class="fs-100 sm-fs-80 text-white fw-700 ls-minus-5px">Mangena</div>
                            <div class="top-minus-40px sm-top-minus-20px right-minus-3px sm-right-0px position-relative">
                                {{-- role here --}}
                                <span
                                    class="text-white fs-13 lh-36 fw-500 bg-black ps-20px pe-20px text-uppercase d-inline-block ls-1px mb-25px ms-5px mt-20px">
                                    {{ $hero->role }}</span>

                                {{-- description here --}}
                                <div class="fs-15 lh-26 text-black fw-500 w-65 md-w-70 sm-w-100">{{ $hero->description }}

                                    <span class="fw-700 text-decoration-line-bottom-medium text-black"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="position-absolute right-100px bottom-minus-100px w-55 md-w-60 xs-w-100 md-right-150px xs-right-0px">
                        <img src="images/demo-freelancer-03.png" class="position-absolute top-20 right-minus-50px"
                            alt="" data-bottom-top="transform: translateY(-150px)"
                            data-top-bottom="transform: translateY(150px)">
                        <img src="images/demo-freelancer-04.png"
                            class="position-absolute top-50 left-150px z-index-9 animation-float" alt=""
                            data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                        <div data-atropos-offset="-5" class="position-absolute left-0px right-0px">
                                            <img src="images/demo-freelancer-01.png" alt="">
                                        </div>
                                        <!-- <img data-atropos-offset="5" class="position-relative" src="https://placehold.co/1030x1100" alt=""> -->

                                        {{-- main image here --}}
                                        <img data-atropos-offset="5" class="position-relative "
                                            src="{{ asset('storage/' . $hero->main_image) }}"
                                            alt="{{ $hero->role }} hero image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="about" class="big-section bg-gradient-top-very-light-gray pb-0 sm-pt-0">
        <div class="overlap-section mb-2 top-minus-40px position-relative z-index-9 md-mb-0">
            <div class="fs-335 text-white fw-700 ls-minus-10px md-ls-minus-5px text-end text-shadow-large">Analyst</div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-6"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-10">
                            <span class="text-base-color fw-700 text-uppercase fs-14 ls-05px">About Tafadzwa Mangena</span>
                        </div>
                        <div class="col-2 text-end">
                            <span class="text-base-color fs-14 fw-700">01</span>
                        </div>
                        <div class="col-12 mt-5px">
                            <div class="separator-line-2px w-100 d-block bg-base-color"></div>
                        </div>
                    </div>
                    @foreach ($abouts as $about)
                        <div class="row mb-6">
                            <div class="col-xl-4 col-lg-5"
                                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                                {{-- title here --}}
                                <h4 class="fw-700 ls-minus-1px mb-20px">{{ $about->title }}</h4>

                                {{-- description 1 here --}}
                                <p class="w-85 lg-w-100">{{ $about->description1 }}</p>

                                <a href="storage/cvs/Ngoni-Sendama-Laravel-Developer-CV.pdf" download
                                    class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                                    Download CV
                                    <span class="text-white bg-orient-blue">
                                        <i class="feather icon-feather-download icon-small"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-xl-8 col-lg-7"
                                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div
                                    class="row align-items-center border-bottom border-color-light-medium-gray mb-30px pb-30px">

                                    <div class="col-md-9 last-paragraph-no-margin">
                                        <p>{{ $about->description2 }}</p>
                                    </div>
                                </div>
                                <div
                                    class="row align-items-center border-bottom border-color-light-medium-gray mb-30px pb-30px">

                                    <div class="col-md-9 last-paragraph-no-margin">
                                        <p>{{ $about->description3 }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="work" class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center mb-6"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-10">
                            <span class="text-base-color fw-700 text-uppercase fs-14 ls-05px">Latest Projects</span>
                        </div>
                        <div class="col-2 text-end">
                            <span class="text-base-color fs-14 fw-700">02</span>
                        </div>
                        <div class="col-12 mt-5px">
                            <div class="separator-line-2px w-100 d-block bg-base-color"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <p class="section-desc mb-5">

                            </p>
                        </div>
                    </div>
                    <div class="row g-4">

                        @foreach ($projects as $project)
                            <div class="col-12 col-sm-6 col-lg-4 project-col">
                                <div class="project-card">

                                    <div class="card-front">
                                        <img src="{{ asset('storage/' . $project->image) }}"
                                            alt="{{ $project->title }}" />
                                        <span class="img-tag">{{ $project->subtitle }}</span>
                                    </div>

                                    <div class="card-back">
                                        <span class="back-category">{{ $project->subtitle }}</span>
                                        <h3 class="back-title">{{ $project->title }}</h3>
                                        <p class="back-desc">{{ $project->description }}</p>
                                        <a href="{{ route('project') }}" class="view-btn">
                                            View Project
                                            <svg width="13" height="13" fill="none" stroke="currentColor"
                                                stroke-width="2.2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M13 6l6 6-6 6" />
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="mobile-card-body">
                                        <div class="m-category">{{ $project->subtitle }}</div>
                                        <div class="m-title">{{ $project->title }}</div>
                                        <p class="m-desc">{{ $project->description }}</p>
                                        <a href="{{ route('project') }}" class="read-more">Read More <svg width="11"
                                                height="11" fill="none" stroke="currentColor" stroke-width="2.5"
                                                viewBox="0 0 24 24">
                                                <path d="M5 12h14M13 6l6 6-6 6" />
                                            </svg></a>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div><!-- /row -->

                    <!-- ── All Projects CTA ────────────────────────────────────────────── -->
                    <div class="text-center mt-5 pt-2">
                        <a href="#" class="all-projects-btn">
                            View all projects
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden position-relative half-section overlap-height pb-0">
        <div class="container-fluid overlap-gap-section">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto text-center pb-30px sm-pb-0px"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":60, "speed": 8000, "loop": true, "autoplay": { "delay":0, "disableOnInteraction": false }, "allowTouchMove": false, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                branding.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                graphic.</div>
                        </div>
                        <!-- end client item -->
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                Data.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                Visualization.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                Programming.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                Analysis.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                development.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-180 xl-fs-120 sm-fs-80 text-extra-medium-gray fw-600 ls-minus-8px sm-ls-minus-4px word-break-normal">
                                Stastics.</div>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-base-color bg-sliding-line position-relative pb-0">
        <div class="container-fluid overlap-section">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto text-center pb-30px sm-pb-0px"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":50, "speed": 8000, "loop": true, "autoplay": { "delay":0, "disableOnInteraction": false, "reverseDirection": true }, "allowTouchMove": false, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                Excel.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                Adninistration.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                digital.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                Analyst.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                development.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                Python.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                Statistics.</div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-150 xl-fs-120 sm-fs-80 text-black fw-600 ls-minus-5px sm-ls-minus-4px word-break-normal">
                                digital.</div>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
        <div id="expertise" class="container overflow-y-hidden">
            <div class="row align-items-end flex-column-reverse flex-lg-row">
                <div class="col-lg-7 position-relative overflow-hidden">
                    <div class="outside-box-bottom-2 outside-box-left-5">
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center overflow-visible">
                                        <div data-atropos-offset="-1" class="position-absolute left-0px right-0px">
                                            <img src="images/demo-freelancer-01.png" class="w-70" alt="">
                                        </div>
                                        <!-- <img data-atropos-offset="5" class="position-relative" src="https://placehold.co/750x672" alt=""> -->
                                        <img data-atropos-offset="5" class="position-relative" src="images/SKILL.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-6 mt-6 md-mb-0"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h4 class="fw-600 text-white mb-20px ls-minus-1px">Skills and Certifications</h4>
                    @foreach ($skills as $skill)
                        <p class="w-90 text-black xl-w-100">{{ $skill->description }}</p>
                        <div class="progress-bar-style-01 mt-14 d-block">
                            <!-- start progress bar item -->
                            <div class="progress mb-12 sm-mb-20 bg-transparent">
                                <div class="progress-bar-title d-inline-block text-black text-uppercase fs-14 fw-600">
                                    {{ $skill->skill }}</div>
                                <div class="progress-bar bg-black" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" aria-label="{{ $skill->skill }}">
                                    <span
                                        class="progress-bar-percent text-center bg-black fs-11 lh-12 text-white">80%</span>
                                </div>
                            </div>
                            <!-- end progress bar item -->

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="awards" class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center mb-6"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-10">
                            <span class="text-base-color fw-700 text-uppercase fs-14 ls-05px">Education and Work
                                Experience</span>
                        </div>
                        <div class="col-2 text-end">
                            <span class="text-base-color fs-14 fw-700">03</span>
                        </div>
                        <div class="col-12 mt-5px">
                            <div class="separator-line-2px w-100 d-block bg-base-color"></div>
                        </div>
                    </div>

                    <div class="container">

                        <!-- ══════════════ EDUCATION ══════════════ -->
                        <div class="row align-items-start g-5">

                            <!-- Left: heading -->
                            <div class="col-12 col-md-4">
                                <p class="section-label">Academic</p>
                                <h2 class=" fw-700 ls-minus-1px mb-20px">Education<br>background.</h2>
                                <p class="col-md-9 last-paragraph-no-margin">Foundations built through rigorous study in
                                    design, technology, and human-centred systems.</p>
                            </div>

                            <!-- Right: table -->
                            <div class="col-12 col-md-8">
                                <table class="timeline-table">
                                    <tbody>
                                        @foreach ($educations as $education)
                                            <tr>
                                                <td class="col-count">{{ $education->program }}</td>
                                                <td class="col-divider"></td>
                                                <td class="col-info">
                                                    <p class="entry-title">{{ $education->description }}</p>
                                                    <p class="entry-sub">{{ $education->institution_name }}</p>
                                                </td>
                                                <td class="col-year">{{ $education->year_from }} -
                                                    {{ $education->year_to }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>


                            <hr class="section-divider" />



                            <!-- ══════════════ EXPERIENCE ══════════════ -->
                            <div class="row align-items-start g-5">

                                <!-- Left: heading -->
                                <div class="col-12 col-md-4">
                                    @if ($experiences->isNotEmpty())
                                        <p class="section-label">Career</p>
                                        <h2 class="fw-700 ls-minus-1px mb-20px">Work<br>experience.</h2>
                                        <p class="col-md-9 last-paragraph-no-margin ">Currently improving user experience
                                            and
                                            interface design as lead designer director at Crafto Theme Agency.</p>
                                    @endif

                                </div>

                                <!-- Right: table -->
                                <div class="col-12 col-md-8">
                                    <table class="timeline-table">
                                        <tbody>
                                            @forelse ($experiences as $experience)
                                                <tr>
                                                    <td class="col-count">9×</td>
                                                    <td class="col-divider"></td>
                                                    <td class="col-info">
                                                        <p class="entry-title">
                                                            <strong>{{ $experience->company_name }}</strong>
                                                        </p>
                                                        <p class="entry-sub">{{ $experience->description }}
                                                        </p>
                                                    </td>
                                                    <td class="col-year">{{ $experience->year }}</td>
                                                @empty
                                                    <div class="alert alert-secondary text-center" role="alert">
                                                        No experience uploaded yet.
                                                    </div>
                                            @endforelse
                                            </tr>

                                        </tbody>
                                    </table>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- end section -->
@endsection
