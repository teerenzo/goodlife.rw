
@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('includes.header')

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
<p><a href="#" class="btn btn-primary py-3 px-4">Learn More</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
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