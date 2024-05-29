
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
<h2 class="mb-8 ">Contact Us</h2>
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
<p>You can reach out to us, using different approach that is convenient to you.</p>
</div>
</div>
<div class="row d-flex contact-info mb-5">
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
<div class="align-self-stretch box p-4 text-center bg-light">
<div class="icon d-flex align-items-center justify-content-center">
<span class="icon-map-signs"></span>
</div>
<h3 class="mb-4">Address</h3>
<p>198 West 21th Street, Suite 721 New York NY 10016</p>
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
<p><a href="/cdn-cgi/l/email-protection#94fdfaf2fbd4edfbe1e6e7fde0f1baf7fbf9"><span class="__cf_email__" data-cfemail="5831363e371821372d2a2b312c3d763b3735">[email&#160;protected]</span></a></p>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.862029253818!2d30.092222317382813!3d-1.967778099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ce138a4475%3A0x6646c2a34133be11!2sGoodlife%20Health%20and%20Beauty%20Ltd!5e0!3m2!1sen!2srw!4v1716985665655!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</div>
</section>

@include('includes.footer')

</body>
</html>
@endsection