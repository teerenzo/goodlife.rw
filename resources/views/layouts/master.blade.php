
<!DOCTYPE html>
<html lang="en">
<head>
<title>Goodlife</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/teams/team-1/assets/css/team-1.css" />
<link rel="stylesheet" type="text/css" href="lightbox2/dist/css/lightbox.min.css">
     <script src="lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    @yield('header')
    @yield('content')        
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script  >

<style>
  .to-hide{
    height: 200px;
    padding: 10px;
  }
  .mobile-post{
    display: hidden;
  }
  @media (max-width: 768px) {
    .to-hide{
      height: 50px;
    }
    .desktop-post{
    display: hidden;
    }
  }

  .about-img
        {
            display: none;
        }
      
    @media (max-width: 768px) {
 
        .map-home{
        height: 400px;
        width: 100%;
      }
    }
</style>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88a8f2c8ec1273b2","version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>