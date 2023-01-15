@extends('layouts.app-login')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
    <h1 class="text-white">Welcome to NetWorth Estate System</h1>
    <h2 class="text-white">We provide the best solution for you to check your house price based on market volatility</h2>
    <a href="{{route('login')}}" class="btn-get-started scrollto">Get Started</a>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="margin-top:12rem;">
    <div class="container-fluid">

        <div class="section-title">
        <h2>About</h2>
        <p class="mx-5">NetWorth Estate System (NwES) was established in 2022 with the mission to deliver quality real estate services for all. 
            With a humble beginning in Estate Agency services, we have now expanded our solutions to encompass 
            Industrial Property, Asset Management, Valuation & Consultancy Services, 
            Training services.</p>
        </div>

        <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch py-5 px-lg-5">
            <h3>Vision</h3>
            <p>To Be The Most Admired Real Estate Firm In The Region.</p>

            <h3 class="mt-5">Mission</h3>

            <div class="icon-box">
            <div class="icon"><i class="bi bi-house-heart"></i></div>
            <h4 class="title"><a href="">Integrity</a></h4>
            <p class="description">"To be a leading brand and name synonymous with real estate services."</p>
            </div>

            <div class="icon-box">
            <div class="icon"><i class="bi bi-house-heart"></i></div>
            <h4 class="title"><a href="">Reliability</a></h4>
            <p class="description">"To excel in becoming the industry's premier role model." </p>
            </div>

            <div class="icon-box">
            <div class="icon"><i class="bi bi-house-heart"></i></div>
            <h4 class="title"><a href="">Persistency</a></h4>
            <p class="description">"To deliver best value, exceptional service and satisfaction for our clients and associates."</p>
            </div>

            <div class="icon-box">
            <div class="icon"><i class="bi bi-house-heart"></i></div>
            <h4 class="title"><a href="">Creativity</a></h4>
            <p class="description">"To embrace changes and innovation for continual improvements in all our business solutions."</p>
            </div>

            <div class="icon-box">
            <div class="icon"><i class="bi bi-house-heart"></i></div>
            <h4 class="title"><a href="">Teamwork</a></h4>
            <p class="description">"To cultivate a positive, energised and productive working atmosphere."</p>
            </div>

            <div class="icon-box">
            <div class="icon"><i class="bi bi-house-heart"></i></div>
            <h4 class="title"><a href="">Commitment</a></h4>
            <p class="description">"To transform and enrich the lifestyle of the employees and agents."</p>
            </div>

        </div>
        </div>

    </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
    <div class="container">

        <div class="section-title">
        <h2>Home Listing</h2>
        <h3>We Offer Comprehensive House NetWorth AI Prediction</h3>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house1.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house2.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">  
                    <img src="{{asset('img/house3.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">    
                    <img src="{{asset('img/house4.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house5.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house6.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house7.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house8.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <div class="icon-box">
                    <img src="{{asset('img/house9.png')}}" class="mx-auto d-flex" style="width:420px; height:370px">
                </div>
            </div>

        </div>

    </div>
    </section><!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
    <div class="container">

        <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
        <ul>
            <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How do I use the AI System? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Just register your credentials on register page and log in. Click System and key in the data asked.
                </p>
            </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Can I create a listing without using the system? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Yes, our website previously are meant to be used as a platform for buyer to find a seller. The AI System are there to help the seller create house listing without worrying about what price to put.
                </p>
            </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Can I delete the created listing? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Yes, you can delete the listing whenever you want.
                </p>
            </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How do I access the previous data generated by the AI System?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                Our website provide history page where user can access all their previous data that is auto generated by the AI. They also can create a listing based on the data generated by the System from the history page.
                </p>
            </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Can I edit my credentials if I accidentally put or want to change the information? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Yes you can, just log in and click on your profile name and click profile settings.
                </p>
            </div>
            </li>

        </ul>
        </div>

    </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->

@endsection