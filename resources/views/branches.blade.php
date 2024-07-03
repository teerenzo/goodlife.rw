
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
                'email' => 'info@goodlife.rw',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.465507318202!2d30.099947074967098!3d-1.9677780980144137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ce138a4475%3A0x6646c2a34133be11!2sGoodlife%20Health%20and%20Beauty%20Ltd!5e0!3m2!1sen!2srw!4v1718314715108!5m2!1sen!2srw',
                'image' => 'SB.jpeg'
            ],
            [
                'name' => 'Silverback',
                'address' => 'Sonatube, Kicukiro',
                'phone' => [
                    'Pharmacy' => '+250 791 232 150',
                    'Frontshop' => '+250 791 232 245'
                ],
                'email' => 'goodlifepharma@goodlife.rw',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.465507318202!2d30.099947074967098!3d-1.9677780980144137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ce138a4475%3A0x6646c2a34133be11!2sGoodlife%20Health%20and%20Beauty%20Ltd!5e0!3m2!1sen!2srw!4v1718314715108!5m2!1sen!2srw',
                'image' => 'SB.jpg'

            ],
            [
                'name' => 'Mundi center',
                'address' => 'RwandEx KN 3rd, Mundi center',
                'phone' => '+250 798 666 605',
                'email' => 'mundipharma@goodlife.rw',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.461878375412!2d30.085246274725975!3d-1.9692951980128774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca701a3b9b2df%3A0xb77eb3825a669ca9!2sGoodLife%20Health%20%26%20Beauty%20-%20Mundi%20Center%20Branch!5e0!3m2!1sen!2srw!4v1718315063066!5m2!1sen!2srw',
                'image' => 'Mundi.jpg'
            ],
            [
                'name' => 'EZA Kisimenti',
                'address' => 'Kisimenti, 19 KG 1 Ave',
                'phone' => '+250 781 661 716',
                'email' => 'ezapharma@goodlife.rw',
                'map'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4831741912285!2d30.105513324725987!3d-1.9603755980218724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7e90a7ee7f3%3A0xc5de66f954a843ad!2sGoodlife%20Health%20%26%20Beauty%20-%20Kisimenti%20branch!5e0!3m2!1sen!2srw!4v1718315191616!5m2!1sen!2srw',
                'image' => 'kisimenti.jpg'
            ],
            [
                'name' => 'Town M Peace',
                'address' => 'Town City, Makuza Peace Plaza, KN 48 Street',
                'phone' => [
                    'Pharmacy' => '+250 794 766 133',
                    'Frontshop' => '+250 794 775 329'
                ],
                'email' => 'nyarugengepharma@goodlife.rw',
                'map'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5162081952903!2d30.057110374726022!3d-1.9464586980358856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca55ef2a050ab%3A0xf65474ad70d8c8cd!2sGoodlife%20Health%20%26%20Beauty%20-%20Town%20branch!5e0!3m2!1sen!2srw!4v1718315302047!5m2!1sen!2srw',
                'image' => 'M Peace Plaza - Town.jpg'
            ],
            [
                'name' => 'Gacuriro',
                'address' => 'Gacuriro KG 14 Ave, SIMBA CENTER',
                'phone' => '+250 793 767 068 (Pharmacy & Frontshop)',
                'email' =>'gacuriropharma@goodlife.rw',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5700429355225!2d30.092325974725867!3d-1.9235629980589621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca1e2d60d75ad%3A0x793b7eb7138056b5!2sGoodlife%20Health%20%26%20Beauty%20-%20Gacuriro%20branch!5e0!3m2!1sen!2srw!4v1718315363011!5m2!1sen!2srw',
                'image' => 'Gacuriro.jpg'
            ],
            [
                'name' => 'Nyakabanda',
                'address' => 'Nyakabanda KN 20 Ave, EGEN Station near the sector',
                'phone' => [
                    'Pharmacy' => '+250 794 764 235',
                    'Frontshop' => '+250 791 232 242'
                ],
                'email' =>'nyakabandapharma@goodlife.rw',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4516558913865!2d30.045987574726006!3d-1.9735624980085826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca59f6ab96315%3A0xac52af7540d08bb6!2sGoodlife%20health%20%26%20beauty%20-%20Nyakabanda%20branch!5e0!3m2!1sen!2srw!4v1718315408208!5m2!1sen!2srw',
                'image' => 'Nyakabanda.jpg'

            ],
            [
                'name' => 'Musanze',
                'address' => 'Musanze, NM 6 ST, across from Gaiko Building',
                'phone' => [
                    'Pharmacy' => '+250 791 232 460',
                    'Frontshop' => '+250 791 232 152'
                ],
                'email' => 'musanzepharma@goodlife.rw',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4350243024355!2d29.64051497472481!3d-1.5087982984770494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dc5ba7db3870fd%3A0xa6d31a33fd1fd3d7!2sGoodLife%20Health%20%26%20Beauty%20-%20Musanze%20Branch!5e0!3m2!1sen!2srw!4v1718315470163!5m2!1sen!2srw',
                'image' => 'Musanze2.jpg'
        
            ],
            [
                'name' => 'Kimironko',
                'address' => 'Kimironko, across Igihozo Supermarket',
                'phone' => '+250 787 934 551 (Pharmacy & Frontshop)',
                'email' => 'technipharma2@goodlife.rw',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5078829540953!2d30.121479174725998!3d-1.9499753980323438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7ed24fb2a37%3A0xf91ac524ece95268!2sGoodLife%20Health%20%26%20Beauty%20-%20Kimironko%20Branch!5e0!3m2!1sen!2srw!4v1718315504475!5m2!1sen!2srw',
                'image' => 'TechniPharma.jpg'
            ],
            [
                'name' => 'Gisenyi',
                'address' => 'Gisenyi, across from Heroes GYM',
                'phone' => '+250 783 523 248 (Pharmacy)',
                'email' => 'rafipharma@goodlife.rw',
                'map'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31904.627687538752!2d29.224762474316403!3d-1.6921307999999922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dd056871c2dc61%3A0xa300b0c3941421f3!2sGoodlife%20Health%20%26%20Beauty%20-%20Rubavu%20branch!5e0!3m2!1sen!2srw!4v1718315588656!5m2!1sen!2srw',
                'image' => 'Rubavu1.jpg'
            ],
            [
                'name' => 'Nyamirambo',
                'address' => 'Nyamirambo, KN 2 Ave',
                'phone' => '+250 788 688 505 (Pharmacy)',
                'email' => 'medplusnyamirambo@goodlife.rw',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31899.718935018274!2d30.058149338712937!3d-1.968045922902061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5294db60a7b%3A0x65602a21a47f6d75!2sGoodLife%20Health%20%26%20Beauty%20-%20MedPlus%20Nyamirambo!5e0!3m2!1sen!2srw!4v1718315625963!5m2!1sen!2srw',
                'image' => 'nyamirambo.jpg'
            ],
            [
                'name' => 'Gisozi',
                'address' => 'Gisozi, KG 14 Ave',
                'phone' => '+250 787 475 154 (Pharmacy)',
                'email' => 'medplusgisozi@goodlife.rw',
                'map'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31900.48980656872!2d30.018286774316397!3d-1.92733149999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca53e2011ddeb%3A0xdf431fc27fd1a966!2sGoodLife%20Health%20%26%20Beauty%20-%20MedPlus%20Gisozi!5e0!3m2!1sen!2srw!4v1718315680443!5m2!1sen!2srw',
                'image' => 'gisozi.jpg'
            ],
            [
                'name' => 'Kanombe',
                'address' => 'Kanombe, KK 80 Street, across from Kanombe Military Hospital',
                'phone' => '+250 787 070 694 (Pharmacy)',
                'email' => 'kanombepharma@goodlife.rw',
                'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.444399591217!2d30.166287374725897!3d-1.9765859980055331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19db59f28da2aafb%3A0xb50ef22fff7d2ce2!2sGoodlife%20Health%20%26%20Beauty%20-%20Kanombe%20branch!5e0!3m2!1sen!2srw!4v1718315722599!5m2!1sen!2srw',
                'image' => 'SB.jpeg'
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
                <div class="img align-self-stretch" style="background-image: url('{{ asset('images/stores/' . $branch['image']) }}')"></div>
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
                    <!-- <p><a href="mailto:{{ $branch['email'] }}" class="btn btn-primary">contact</a> -->
                    &nbsp; <a href="{{ route('branches.show', $branch['name']) }}" class="btn btn-secondary">View More</a></p>

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