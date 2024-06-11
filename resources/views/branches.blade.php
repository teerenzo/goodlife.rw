
@extends('layouts.master')
@section('title', 'Homepage')
@section('content')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

@include('includes.header')
<section class="ftco-section1 img" style="background:#692c91;">
<div class="overlay"></div>
<div class="container">
<div class="to-hide row d-flex align-items-center justify-content-end flex-column  pb-3">
<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
<h2 class="mb-4">Our  Branches</h2>
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
@php
    $branches = [
    [
        'name' => 'Head Office',
        'address' => 'Sonatube, Kicukiro',
        'phone' => '+250 791 232 266 (Reception)',
        'email' => 'info@goodlife.rw'
    ],
    [
        'name' => 'Silverback branch',
        'address' => 'Sonatube, Kicukiro',
        'phone' => [
            'Pharmacy' => '+250 791 232 150',
            'Frontshop' => '+250 791 232 245'
        ],
        'email' => 'goodlifepharma@goodlife.rw',
    ],
    [
        'name' => 'Mundi center branch',
        'address' => 'RwandEx KN 3rd, Mundi center',
        'phone' => '+250 798 666 605',
        'email' => 'mundipharma@goodlife.rw',
    ],
    [
        'name' => 'EZA Kisimenti branch',
        'address' => 'Kisimenti, 19 KG 1 Ave',
        'phone' => '+250 781 661 716',
        'email' => 'ezapharma@goodlife.rw',
    ],
    [
        'name' => 'Town M Peace branch',
        'address' => 'Town City, Makuza Peace Plaza, KN 48 Street',
        'phone' => [
            'Pharmacy' => '+250 794 766 133',
            'Frontshop' => '+250 794 775 329'
        ],
        'email' => 'nyarugengepharma@goodlife.rw',
    ],
    [
        'name' => 'Gacuriro branch',
        'address' => 'Gacuriro KG 14 Ave, SIMBA CENTER',
        'phone' => '+250 793 767 068 (Pharmacy & Frontshop)',
        'email' =>'gacuriropharma@goodlife.rw',
    ],
    [
        'name' => 'Nyakabanda branch',
        'address' => 'Nyakabanda KN 20 Ave, EGEN Station near the sector',
        'phone' => [
            'Pharmacy' => '+250 794 764 235',
            'Frontshop' => '+250 791 232 242'
        ],
        'email' =>'nyakabandapharma@goodlife.rw',
    ],
    [
        'name' => 'Musanze branch',
        'address' => 'Musanze, NM 6 ST, across from Gaiko Building',
        'phone' => [
            'Pharmacy' => '+250 791 232 460',
            'Frontshop' => '+250 791 232 152'
        ],
        'email' => 'musanzepharma@goodlife.rw',

    ],
    [
        'name' => 'Kimironko branch',
        'address' => 'Kimironko, across Igihozo Supermarket',
        'phone' => '+250 787 934 551 (Pharmacy & Frontshop)',
        'email' => 'technipharma2@goodlife.rw'
    ],
    [
        'name' => 'Gisenyi branch',
        'address' => 'Gisenyi, across from Heroes GYM',
        'phone' => '+250 783 523 248 (Pharmacy)',
        'email' => 'rafipharma@goodlife.rw'
    ],
    [
        'name' => 'Nyamirambo branch',
        'address' => 'Nyamirambo, KN 2 Ave',
        'phone' => '+250 788 688 505 (Pharmacy)',
        'email' => 'medplusnyamirambo@goodlife.rw'
    ],
    [
        'name' => 'Gisozi branch',
        'address' => 'Gisozi, KG 14 Ave',
        'phone' => '+250 787 475 154 (Pharmacy)',
        'email' => 'medplusgisozi@goodlife.rw'
    ],
    [
        'name' => 'Kanombe branch',
        'address' => 'Kanombe, KK 80 Street, across from Kanombe Military Hospital',
        'phone' => '+250 787 070 694 (Pharmacy)',
        'email' => 'kanombepharma@goodlife.rw'
    ]
];
    @endphp
    
    @foreach($branches as $branch)
    @php
        // Use the branch name to create a suitable image name
        $imageName = strtolower(str_replace(' ', '_', $branch['name'])) . '.jpg';
        $phoneNumbers = is_array($branch['phone']) ? implode(', ', $branch['phone']) : $branch['phone'];
        // Format the email addresses for display
        $emailAddresses = is_array($branch['email']) ? implode(', ', $branch['email']) : $branch['email'];
    @endphp
    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/sonatube.jpg)"></div>
            </div>
            <div class="text pt-3 text-center">
                <h3 class="mb-2">{{ $branch['name'] }}</h3>
                <span class="position mb-2">{{ $branch['address'] }}</span>
                <span class="position mb-2">{{ $phoneNumbers }}</span>


                <div class="faded">
                    <p></p>
                    <!-- <ul class="ftco-social text-center">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul> -->
                    <p><a href="mailto:{{ $branch['email'] }}" class="btn btn-primary">contact</a></p>

                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
</div>
</section>

@include('includes.footer')

</body>
</html>
@endsection