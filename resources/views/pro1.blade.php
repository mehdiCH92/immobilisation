@extends('lyout')
@section('content')

<section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg">
    <div class="container hero-text text-white">
        <h2>Property Page</h2>
    </div>
</section>
<!-- Hero Section End -->
<!-- Filter Search Section Begin -->
<div class="filter-search">
    <div class="container ">
        <form class="filter-form">
            <div class="location">
                <p>Location</p>
                <select class="filter-location">
                    <option value="">London</option>
                    <option value="">US</option>
                    <option value="">UAE</option>
                </select>
            </div>
            <div class="search-type">
                <p>Property Type</p>
                <select class="filter-property">
                    <option value="">House</option>
                    <option value="">Resort</option>
                    <option value="">Hotel</option>
                </select>
            </div>
            <div class="price-range">
                <p>Price</p>
                <div class="range-slider">
                    <div id="slider-range">
                        <span tabindex="0"
                            class="ui-slider-handle ui-corner-all ui-state-default slider-left">50k</span>
                        <span tabindex="0"
                            class="ui-slider-handle ui-corner-all ui-state-default slider-right">300k</span>
                    </div>
                </div>
            </div>
            <div class="bedrooms">
                <p>Bedrooms</p>
                <div class="room-filter-pagi">
                    <div class="bf-item">
                        <input type="radio" name="room" id="room-1">
                        <label for="room-1">1</label>
                    </div>
                    <div class="bf-item">
                        <input type="radio" name="room" id="room-2">
                        <label for="room-2">2</label>
                    </div>
                    <div class="bf-item">
                        <input type="radio" name="room" id="room-3">
                        <label for="room-3">3</label>
                    </div>
                    <div class="bf-item">
                        <input type="radio" name="room" id="room-4">
                        <label for="room-4">4+</label>
                    </div>
                </div>
            </div>
            <div class="bathrooms">
                <p>Bathrooms</p>
                <div class="room-filter-pagi">
                    <div class="bf-item">
                        <input type="radio" name="bathroom" id="bathroom-1">
                        <label for="bathroom-1">1</label>
                    </div>
                    <div class="bf-item">
                        <input type="radio" name="bathroom" id="bathroom-2">
                        <label for="bathroom-2">2</label>
                    </div>
                    <div class="bf-item">
                        <input type="radio" name="bathroom" id="bathroom-3">
                        <label for="bathroom-3">3</label>
                    </div>
                    <div class="bf-item">
                        <input type="radio" name="bathroom" id="bathroom-4">
                        <label for="bathroom-4">4+</label>
                    </div>
                </div>
            </div>
            <div class="search-btn">
                <button type="submit"><i class="flaticon-search"></i>Search</button>
            </div>
        </form>
    </div>
</div>
<!-- Filter Search Section End -->
<!-- Single Property Section Begin -->
<div class="single-property">
    <div class="container">
        <div class="row spad-p">
            <div class="col-lg-12">
                <div class="property-title">
                    <h3>Country Style House with beautiful garden and terrace</h3>
                    <a href="#"><i class="fa flaticon-placeholder"></i> 101 Independence Avenue, S.E.Washington, D.C. 20559-6000</a>
                </div>
                <div class="property-price">
                    <p>For Sale</p>
                    <span>$345,000</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="property-img owl-carousel">
                    <div class="single-img">
                        <img src="img/rooms/1.jpg" alt="">
                    </div>
                    <div class="single-img">
                        <img src="img/rooms/1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Property End -->
<!-- Single Property Deatails Section Begin -->
<section class="property-details">
    <div class="container">
        <div class="row sp-40 spt-40">
            <div class="col-lg-8">
                <div class="p-ins">
                    <div class="row details-top">
                        <div class="col-lg-12">
                            <div class="t-details">
                                <div class="register-id">
                                    <p>Registered ID: <span>0D05426FF1</span></p>
                                </div>
                                <div class="popular-room-features single-property">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="property-description">
                                <h4>Description</h4>
                                <p>This 1,523 square foot single-family home has 3 bedrooms and 3.0 bathrooms. It is located at "101 Independence Avenue, S.E.Washington, D.C. 20559-6000". </p>
                            </div>
                            <div class="property-features">
                                <h4>Property Features</h4>
                                <div class="property-table">
                                    <table>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Home theater</td>
                                            <td><img src="img/check.png" alt=""> Carpeting</td>
                                            <td><img src="img/cros.png" alt=""> Attic fans</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Media room</td>
                                            <td><img src="img/cros.png" alt=""> Concrete</td>
                                            <td><img src="img/check.png" alt=""> Ceiling fans</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/cros.png" alt=""> Family room</td>
                                            <td><img src="img/check.png" alt=""> Bamboo</td>
                                            <td><img src="img/check.png" alt=""> Thermostats</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Gym/workout room</td>
                                            <td><img src="img/cros.png" alt=""> Stone</td>
                                            <td><img src="img/check.png" alt=""> Single flush toilets</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Library</td>
                                            <td><img src="img/check.png" alt=""> Tile</td>
                                            <td><img src="img/cros.png" alt=""> Window shutters</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Butler's pantry</td>
                                            <td><img src="img/cros.png" alt=""> Laminate</td>
                                            <td><img src="img/check.png" alt=""> Solar heat</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Sunroom</td>
                                            <td><img src="img/check.png" alt=""> Cork</td>
                                            <td><img src="img/cros.png" alt=""> Solar plumbing</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Downstairs's bedroom</td>
                                            <td><img src="img/cros.png" alt=""> Vinyl / linoleum</td>
                                            <td><img src="img/check.png" alt=""> Solar Screens</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Basement</td>
                                            <td><img src="img/check.png" alt=""> Manufactured wood</td>
                                            <td><img src="img/check.png" alt=""> Storm windows</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Guest quarters</td>
                                            <td><img src="img/check.png" alt=""> Marble</td>
                                            <td><img src="img/cros.png" alt=""> Tankless water heater</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/check.png" alt=""> Wine storage</td>
                                            <td><img src="img/check.png" alt=""> Wood</td>
                                            <td><img src="img/check.png" alt=""> Skylights or sky tubes</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="location-map">
                                <h4>Location</h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row pb-30">
                    <div class="col-lg-12">
                        <div class="contact-service">
                            <img class="rounded-circle" src="img/moi.jpg" alt="">
                            <p>Listed by</p>
                            <h5>CHOUTRI Mehdi</h5>
                            <table>
                                <tr>
                                    <td>Office : <span>021 84 60 08</span></td>
                                </tr>
                                <tr>
                                    <td>Mobile : <span>+213 779 60 83 39</span></td>
                                </tr>
                                <tr>
                                    <td>Fax : <span>+213 779 60 83 3</span></td>
                                </tr>
                                <tr>
                                    <td>WhatsApp : <span>+213 779 60 83 3</span></td>
                                </tr>
                                <tr>
                                    <td>Email : <span>mehdi.kadi.chou@gmail.com</span></td>
                                </tr>
                            </table>
                            <a href="#" class="site-btn list-btn">View More Listings</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
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
                                        <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show
                                                on Map</span></a>
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
        </div>
    </div>
</section>
<!-- Single Property Deatails Section End -->



@endsection
