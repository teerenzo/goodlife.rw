
@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('includes.header')
<section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 class="mb-4">Our  Branches</h2>
</div>
</div>
<div class="row ftco-animate justify-content-center">
<div class="col-md-12">
<div class="carousel-testimony owl-carousel ftco-owl">
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section" id="doctor-section">
<div class="container-fluid px-5">
<div class="row justify-content-center mb-5 pb-2">
<div class="col-md-8 text-center heading-section ftco-animate">
<p> 
    these are our branches in different places in Rwanda where you can get our services.
</p>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-3 ftco-animate">
<div class="staff">
<div class="img-wrap d-flex align-items-stretch">
<div class="img align-self-stretch" style="background-image: url(images/sonatube.jpg);"></div>
</div>
<div class="text pt-3 text-center">
<h3 class="mb-2">Sonatube</h3>
<span class="position mb-2">Silverback mall</span>
<div class="faded">
<p></p>
<ul class="ftco-social text-center">
<li class="ftco-animate"><a href="#"><span class="fa-location"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
</ul>
<p><a href="#" class="btn btn-primary">see more</a></p>
</div>
</div>
</div>
</div>

<div class="col-md-6 col-lg-3 ftco-animate">
    <div class="staff">
    <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(images/mundi.jpg);"></div>
    </div>
    <div class="text pt-3 text-center">
    <h3 class="mb-2">Mundi center</h3>
    <span class="position mb-2">Rwandex</span>
    <div class="faded">
    <p></p>
    <ul class="ftco-social text-center">
    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
    <p><a href="#" class="btn btn-primary">see more</a></p>
    </div>
    </div>
    </div>
    </div>

    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
        <div class="img align-self-stretch" style="background-image: url(images/sonatube.jpg);"></div>
        </div>
        <div class="text pt-3 text-center">
        <h3 class="mb-2">Gacuriro</h3>
        <span class="position mb-2">Simba Center</span>
        <div class="faded">
        <p></p>
        <ul class="ftco-social text-center">
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
        <p><a href="#" class="btn btn-primary">see more</a></p>
        </div>
        </div>
        </div>
        </div>

        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/sonatube.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
            <h3 class="mb-2">Nyakabanda</h3>
            <span class="position mb-2">Engine station</span>
            <div class="faded">
            <p></p>
            <ul class="ftco-social text-center">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
            <p><a href="#" class="btn btn-primary">see more</a></p>
            </div>
            </div>
            </div>
            </div>

            
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/sonatube.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
            <h3 class="mb-2">Musanze town</h3>
            <span class="position mb-2">Silverback</span>
            <div class="faded">
            <p></p>
            <ul class="ftco-social text-center">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
            <p><a href="#" class="btn btn-primary">see more</a></p>
            </div>
            </div>
            </div>
            </div>
</div>
</div>
</section>

@include('includes.footer')

</body>
</html>
@endsection