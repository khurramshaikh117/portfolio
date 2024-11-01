@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-caption">
                        <div class="hero-caption-full">
                            <h5>{{ $portFolioData->greeting }}</h5>
                            <p>{{ $portFolioData->line2 }}</p>
                            <div class="hero-caption-btn mt-20 mb-20">
                                <a href="{{ asset('assets/resume_khurram.pdf') }}" class="button-2" style="margin-left: 0px;" target="_blank" rel="noopener noreferrer">Download Updated CV <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area pt-100 pb-100 section-bg" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-info">
                            <h5>About Me</h5>
                            <h2>{!! $portFolioData->aboutLine1 !!}</h2>
                            <p>{!! $portFolioData->aboutLine2 !!}</p>
                            <div class="about-social mt-20">
                                <span>Find Me :</span>
                                <ul>
                                    <li><a href="{{$portFolioData->fblink}}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$portFolioData->twlink}}" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$portFolioData->instalink}}" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$portFolioData->linkedinlink}}" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-counter-up mt-40">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="counter-box">
                                        <h2 class="counter">{{$portFolioData->exp}}</h2>
                                        <span>Total years of experience in the industry</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-area pt-100 pb-70" id="technologies">
            <div class="container">
                <!-- Section Headding -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-headding mb-50 text-center">
                            <h2>Technologies I have Worked With</h2>
                            <div class="title-divider"></div>
                            <p>{{$portFolioData->techintro}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($portFolioData->techArray as $tech)
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="services-box">
                                <div class="icon">
                                    <img src="{{ asset($tech['logo']) }}" alt="{{ $tech['name'] }} logo" width="150" height="150">
                                </div><br>
                                <h2>{{ $tech['name'] }}</h2>
                                <p>{{ $tech['text'] }}</p> 
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="resume-area pt-100 pb-70 section-bg" id="tools">
            <div class="container">
                <!-- Section Headding -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-headding mb-50 text-center">
                            <h2>Tools I have used in my career :</h2>
                            <div class="title-divider"></div>
                            <p>
                                <img src="assets/img/git.png" alt="git" width="75" height="50" style="margin:5px">
                                <img src="assets/img/bit.png" alt="bit" width="75" height="50" style="margin:5px">
                                 <img src="assets/img/jenkins.png" alt="jenkins" width="75" height="50" style="margin:5px"> <br>
                                 <img src="assets/img/vis.png" alt="vs" width="75" height="50" style="margin:5px">
                                 <img src="assets/img/sub.png" alt="sub" width="75" height="50" style="m                                                   argin:5px"> 
                                  <img src="assets/img/and.jpeg" alt="and" width="75" height="50" style="margin:5px">  <br>
                                  <img src="assets/img/postman.png" alt="and" width="75" height="50" style="margin:5px"> 
                                  <img src="assets/img/npm.png" alt="and" width="75" height="50" style="margin:5px">
                                  <img src="assets/img/chrome.jpeg" alt="and" width="75" height="50" style="margin:5px"> <br>
                                   <img src="assets/img/fox.jpeg" alt="and" width="75" height="50" style="margin:5px">
                                     <img src="assets/img/wk.jpeg" alt="and" width="75" height="50" style="margin:5px">
                                     <img src="assets/img/hs.png" alt="and" width="75" height="50" style="margin:5px">
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Education -->
                <div class="row">
                    <div class="resume-title mb-40 text-center">
                        <h2>My Education</h2>
                    </div>
                @foreach($portFolioData->education as $education)
                 <div class="col-lg-4 col-md-6 mb-30">
                    <div class="resume-item-box">
                        <span>{{ $education['duration'] }}</span>
                        <h2>{{ $education['degree'] }}</h2>
                        <h4>{{ $education['university'] }}</h4>
                        <p>{{ $education['description'] }}</p>
                     </div>
                </div>
                @endforeach

                </div>
                <!-- Education -->
                <div class="row mt-40" id="experience">
                    <div class="resume-title mb-40 text-center">
                        <h2>My Experience</h2>
                    </div>
                   @foreach($portFolioData->experience as $experience)
         <div class="col-lg-4 col-md-6 mb-30">
        <div class="resume-item-box">
            <span>{{ $experience['duration'] }}</span>
            <h2>{{ $experience['designation'] }}</h2>
            <h4>{{ $experience['organization'] }}</h4>
            <p>{{ $experience['role_description'] }}</p>
        </div>
    </div>
@endforeach

                </div>
            </div>
        </section>
        
     
@endsection
