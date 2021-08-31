@extends('lyout')
@section('content')
    
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->

<!-- Header Section End -->
<!-- Hero Section Begin -->
<section class="hero-section set-bg about-us" data-setbg="img/bg.jpg">
    <div class="container hero-text text-white">
        <h2>About Us</h2>
    </div>
</section>
<!-- Hero Section End -->
<!-- About Us Sectiion Begin -->
<section class="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 about-text-warp">
                <div class="about-text">
                    <h2>Welcome to <strong>ImmobSite</strong> The place where you can find your dream.</h2>
                    <p>is an independent, dynamic, friendly agency that is happy to offer you its services.
                        Our conception of the relationship is based on proximity and personalized advice to the client. A direct and privileged contact, guaranteeing a quality service.
                        
                        We put all our experience of the real estate agent profession to support you in all of your real estate projects and needs; purchase, sale, rental, goodwill. As a member of the FNAIM, we respect the code of ethics and professional conduct, guaranteeing transparency in our procedures. The "yellow cube" guarantees serious and rigorous customers.
                        In the heart of Dijon, place du théâtre, the ALTIOR IMMOBILIER Agency welcomes you: Monday to Friday from 9 a.m. to 12 p.m. and from 2 p.m. to 6 p.m., Saturdays and at any other time by appointment.</p>
                    <a href="#" class="site-btn a-btn">View our Listings</a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-img">
                    <img src="img/about-img/1.jpg" alt="">
                    <img class="l-img" src="img/about-img/2.jpg" alt="">
                    <img class="r-img" src="img/about-img/3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Sectiion End -->
<!-- Team Sectiion Begin -->
<section class="team-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title">
                    <h2><span>Meet out team</span><br />They are the best in the branch</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4" style="margin:auto">
                <div class="single-team">
                    <div class="membr-pic">
                        <img src="img/moi.jpg" alt="">
                    </div>
                    <div class="membr-info">
                        <h2>CHOUTRI MEHDI</h2>
                        <p>Realtor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Sectiion End -->
<!-- Count Sectiion Begin -->
<div class="counter-section">
    <div class="container">
        <div class="b-top">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter-icon/1.png" alt="">
                        </div>
                        <div class="counter-info">
                            <span>350</span>
                            <p>Apartments Sold</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter-icon/2.png" alt="">
                        </div>
                        <div class="counter-info">
                            <span>1278</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter-icon/3.png" alt="">
                        </div>
                        <div class="counter-info">
                            <span>25</span>
                            <p>Years of experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-counter">
                        <div class="counter-img">
                            <img src="img/counter-icon/4.png" alt="">
                        </div>
                        <div class="counter-info">
                            <span>17</span>
                            <p>Awards Wone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Count Sectiion End -->



@endsection