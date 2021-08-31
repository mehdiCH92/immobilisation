@extends('lyout')
@section('content')

<section class="hero-section set-bg search-result" data-setbg="img/bg.jpg">
    <div class="container hero-text text-white">
        <h2>Search Results</h2>
    </div>
</section>
<!-- Hero Section End -->
<!-- Filter Search Section Begin -->

<!-- Filter Search Section End -->
<!-- Map Section Begin -->
<div class="map-section">
    <div class="container-fluid">
        <div class="row">
            <div class="map">
                @if ($Loc == 'US')
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd" allowfullscreen></iframe>-->
                @endif
                @if ($Loc == 'London')
                <iframe width="800" height="100" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                @endif
                @if ($Loc == 'UAE')
                <iframe width="800" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=DUBAI&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                 @endif
            </div>
        </div>
    </div>
</div>
<!-- Map Section End -->
<!-- Hotel Room Section Begin -->
<section class="hotel-rooms spad-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-45">
                <div class="found-items">
                    <h4>We found <span>6</span> properties</h4>
                    <select class="date-select">
                        <option value="0">Date New to Old</option>
                        <option value="1">Old</option>
                        <option value="2">New</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/1.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                        Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/2.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                        Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/3.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                        Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/4.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                        Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/5.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                        Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/6.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                        Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hotel Room Section End -->
<!-- Footer Section Begin -->




@endsection