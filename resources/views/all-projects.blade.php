@extends('layout')
@section('content')
 <!-- start section -->
             <section class="h-500px magic-cursor ipad-top-space-margin md-p-0 round-cursor bg-base-color bg-sliding-line overflow-hidden position-relative md-h-700px sm-h-400px" id="home">
            <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 15,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#000000", "#000000", "#000000", "#000000", "#000000"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.3,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>

            <div class="container ">
                <div class="row align-items-start align-items-lg-center h-100">
                    <div class="col-xl-6 col-lg-8 md-pt-15" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="fs-100 sm-fs-80 lh-110 text-white fw-700 ls-minus-5px"><span class="text-outline">All projects</span><i class="bi bi-arrow-up-right icon-very-medium lh-0 ms-5px"></i></div>
                        <div class="ps-20">
                            <div class="fs-100 sm-fs-80 text-white fw-700 ls-minus-5px"></div>
                            <div class="top-minus-40px sm-top-minus-20px right-minus-3px sm-right-0px position-relative">


                            </div>
                        </div>
                    </div>
                    <div class="position-absolute right-100px bottom-minus-100px w-55 md-w-60 xs-w-100 md-right-150px xs-right-0px">
                        <img src="images/demo-freelancer-03.png" class="position-absolute top-20 right-minus-50px" alt="" data-bottom-top="transform: translateY(-150px)" data-top-bottom="transform: translateY(150px)">
                        <img src="images/demo-freelancer-04.png" class="position-absolute top-50 left-150px z-index-9 animation-float" alt="" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                        <div class="atropos" data-atropos>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                        <div data-atropos-offset="-5" class="position-absolute left-0px right-0px">
                                            <img src="images/demo-freelancer-01.png" alt="">
                                        </div>
                                        <!-- <img data-atropos-offset="5" class="position-relative" src="https://placehold.co/1030x1100" alt=""> -->
                                           <img data-atropos-offset="5" class="position-relative " src="images/all-projects-hero.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <!-- start section -->
   <!-- start section -->
        <section id="work" class="pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row align-items-center mb-6" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
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

      @foreach($projects as $project)
      <div class="col-12 col-sm-6 col-lg-4 project-col">
        <div class="project-card">

          <div class="card-front">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"/>
            <span class="img-tag">{{ $project->subtitle }}</span>
          </div>

          <div class="card-back">
            <span class="back-category">{{ $project->subtitle }}</span>
            <h3 class="back-title">{{ $project->title }}</h3>
            <p class="back-desc">{{ $project->description }}</p>
            <a href="{{ route('project') }}" class="view-btn">
              View Project
              <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>

          <div class="mobile-card-body">
            <div class="m-category">{{ $project->subtitle }}</div>
            <div class="m-title">{{ $project->title }}</div>
            <p class="m-desc">{{ $project->description }}</p>
            <a href="{{ route('project') }}" class="read-more">Read More <svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>

        </div>
      </div>
      @endforeach

    </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
