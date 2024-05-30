
@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('includes.header')

<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg'); background-repeat: no-repeat" data-section="home" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
<div class="col-md-6 pt-5 ftco-animate">
<div class="mt-5">
<span class="heading" style="color:white; font-weight:bold">Welcome to Goodlife</span>
<h2 class="mb-4" style="color:white; font-weight:bold">Retail Health and Personal Care Products.</h2>
<p class="mb-4">Goodlife Health and Beauty is a leading retail, pharmaceutical and cosmetic group in Rwanda.</p>
<p><a href="/branches" class="btn btn-primary py-3 px-4">Visit our branches</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
<div class="container">
<div class="row d-flex">
<div class="col-md-6 col-lg-5 d-flex">
<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_about.png);">
</div>
</div>
<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
<div class="py-md-5">
<div class="row justify-content-start pb-3">
<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
<h2 class="mb-4">We Are <span>Goodlife</span></h2>
<p>We take pride in being Rwanda's premier pharmacy, health, and 
beauty retailer, dedicated to ensuring our customers enjoy a 
delightful shopping experience.</p>
<p><a href="#" class="btn btn-primary py-3 px-4">Learn More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-intro img" style="background-image: url('images/bg_3.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-9 text-center">
<h2>Your Service is Our Priority</h2>
<p>
Our goal is to provide a comprehensive destination where you can 
find a wide range of top-quality health and beauty products, all in 
one convenient place.

</p>
<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb" id="service-section">
<div class="container-fluid px-0">
<div class="row no-gutters">
<div class="col-md-4 d-flex">
<div class="img img-dept align-self-stretch" style="background-image: url(images/bg_about.png);"></div>
</div>
<div class="col-md-8">
<div class="row no-gutters">
<div class="col-md-4">
<div class="service-wrap p-4 ftco-animate">
<div class="text p-2 text-center">
<div class="icon">
<span class="flaticon-stethoscope"></span>
</div>
<h3><a href="#">Accessibility</a></h3>
<p>
Accessibility of quality generics and branded 
generics on premises, at competitive prices often 
1/10th the cost of name brands
</p>
</div>
</div>
<div class="service-wrap p-4 ftco-animate">
<div class="text p-2 text-center">
<div class="icon">
<span class="flaticon-stethoscope"></span>
</div>
<h3><a href="#">Provision of generics and branded generics</a></h3>
<p>
Provision of generics and branded generics and 
quality environmentally-friendly fast moving 
consumer goods such as Cinnabar Green refillable 
lotion, shampoo, conditioner
</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="service-wrap p-4 ftco-animate">
<div class="text p-2 text-center">
<div class="icon">
<span class="flaticon-stethoscope"></span>
</div>
<h3><a href="#">Coordinated follow-up</a></h3>
<p>
Coordinated follow-up of patients with chronic 
disease medications.
</p>
</div>
</div>
<div class="service-wrap p-4 ftco-animate">
<div class="text p-2 text-center">
<div class="icon">
<span class="flaticon-stethoscope"></span>
</div>
<h3><a href="#">Optimize public health with all points-of call
</a></h3>
<p>Far far away, behind the word mountains</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
<div class="container">
<div class="row d-flex">
<div class="col-md-7 py-5">
<div class="py-lg-5">
<div class="row justify-content-center pb-5">
<div class="col-md-12 heading-section ftco-animate">
<h2 class="mb-3">Our Services</h2>
</div>
</div>
<div class="row">
<div class="col-md-6 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-flex">
<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-first-aid-kit"></span></div>
<div class="media-body pl-md-4">
<h3 class="heading mb-3">Pharmacy </h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
</div>
<div class="col-md-6 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services d-flex">
<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-health"></span></div>
<div class="media-body pl-md-4">
<h3 class="heading mb-3"> Health and beauty</h3>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-5 d-flex">

</div>
</div>
</div>
</section>
<section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-md-5 heading-section heading-section-white">
<span class="subheading">facts</span>
<h2 class="mb-4">
    Goodlife Health and Beauty is a leading retail, pharmaceutical and cosmetic group in Rwanda.
</h2>
<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Learn more</a></p>
</div>
<div class="col-md-7">
<div class="row pt-4">
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="strong" data-number="2">2</strong>
<span>Years of Experienced</span>
</div>
</div>
</div>
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="strong" data-number="5">7</strong>
<span>Branches</span>
</div>
</div>
</div>
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="strong" data-number="84">7</strong>
<span>Number of Branches</span>
</div>
</div>
</div>
<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="strong" data-number="50">20</strong>
<span>employees</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section" id="doctor-section">
<div class="container-fluid px-5">
<div class="row justify-content-center mb-5 pb-2">
<div class="col-md-8 text-center heading-section ftco-animate">
<h2 class="mb-4">Our  Branches</h2>
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
<section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 class="mb-4">Our Team</h2>
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
<section class="ftco-section contact-section" id="contact-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section text-center ftco-animate">
<h2 class="mb-4">Contact Us</h2>
<p>You can reach out to us, using different approach that is convenient to you.</p>
</div>
</div>
<div class="row justify-content-center d-flex contact-info mb-5">
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-map-signs"></span>
</div>
<h3 class="mb-4">Address</h3>
<p>	Silverback Mall, Sonatube , Kigali 24J3+V2 Kigali, RW</p>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-phone2"></span>
</div>
<h3 class="mb-4">Contact Number</h3>
<p><a href="tel://1234567920">+  250791232245</a></p>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-paper-plane"></span>
</div>
<h3 class="mb-4">Email Address</h3>
<p><a href="mail:info@goodlife.rw"><span class="__cf_email__" data-cfemail="5831363e371821372d2a2b312c3d763b3735">
info@goodlife.rw</span></a></p>
</div>
</div>

</div>
<div class="row no-gutters block-9">
<div class="col-md-6 order-md-last d-flex">
<form action="#" class="bg-light p-5 contact-form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name id cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
</div>
</form>
</div>
<div class="col-md-6 d-flex">
<div class="bg-white">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.862029253818!2d30.092222317382813!3d-1.967778099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ce138a4475%3A0x6646c2a34133be11!2sGoodlife%20Health%20and%20Beauty%20Ltd!5e0!3m2!1sen!2srw!4v1716985665655!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>
</section>

@include('includes.footer')

</body>
</html>
@endsection