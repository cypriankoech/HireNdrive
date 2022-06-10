@extends('layouts.app')

@section('content')

<section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> for <br>a car to rent</h1>
            <p>Try out our latest models from all brands to suit your needs at your own convience</p>
        </div>
    </section>

    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Hire With These Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>Anywhere you are, place it as your location.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Choose a date when the car will be brought to your doorstep.</p>
            </div>

            <div class="box">
                <i class='bx bxs-car'></i>
                <h2>Choose A Car</h2>
                <p>Pick any vehicle from our collection.</p>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Discover Our Best Deals <br> From All Car Ranges</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="images/4x4.png" alt="">
                </div>
                <p>2020</p>
                <h3>4X4 V8 Prado</h3>
                <h2>KSH 100,000 | KSH 5,000 <span>/month</span></h2>
                <a href="#" class="btn">Hire Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/7_seater.png" alt="">
                </div>
                <p>2020</p>
                <h3>4X4 V8 Prado</h3>
                <h2>KSH 100,000 | KSH 5,000 <span>/month</span></h2>
                <a href="#" class="btn">Hire Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/compact.png" alt="">
                </div>
                <p>2020</p>
                <h3>4X4 V8 Prado</h3>
                <h2>KSH 100,000 | KSH 5,000 <span>/month</span></h2>
                <a href="#" class="btn">Hire Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/double.png" alt="">
                </div>
                <p>2020</p>
                <h3>4X4 V8 Prado</h3>
                <h2>KSH 100,000 | KSH 5,000 <span>/month</span></h2>
                <a href="#" class="btn">Hire Now</a>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="images/saloon.png" alt="">
                </div>
                <p>2020</p>
                <h3>4X4 V8 Prado</h3>
                <h2>KSH 100,000 | KSH 5,000 <span>/month</span></h2>
                <a href="#" class="btn">Hire Now</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-continer">
            <div class="about-img">
                <img src="images/about.jpg" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Enjoy unbeatably affordable car hire Kenya services in over 160 pick up locations spread all over this beautiful country. </p>
                <p>Choose from over 150 vehicles, vans, buses, shuttles, pick-ups, double-cabins, 4WD and more.
                    We guarantee 24 hours personalized car rental support, very affordable car hire Kenya prices, over 160 car rental
                    pick-up and drop-off locations and clean well maintained vehicles to each of our car hire Kenya service clients. <br>    
                    With over 15 years track record as a reliable car rental company, simple car rental terms, real time user reviews on
                    facebook, we guarantee the best car rental experience in Kenya.  Call us on +254 722 417475 or email us on
                    info@hireddrive.com. Affordable car hire Kenya services: select from saloon cars, sedans, small 4X4s, and more. Call or email today.</p>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Some Feedback From Our Esteemed Clients</h1>
        </div>
        <div class="reviews-continer">
            <div class="box">
                <div class="rev-img">
                    <img src="images/person1.jpg" alt="">
                </div>
                <h2>Kwayera Doe</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
            </div>
            <div class="box">
                <div class="rev-img">
                    <img src="images/person2.jpg" alt="">
                </div>
                <h2>Ryan Smith</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
            </div>
            <div class="box">
                <div class="rev-img">
                    <img src="images/person3.jpg" alt="">
                </div>
                <h2>Jonathan Junior</h2>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga."</p>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="copyright">
            <p>&#169; HirenDrive All Rights Reserved</p>
        </div>
        <div class="social">
            <a href=""><i class='bx bxl-facebook'></i></a>
            <a href=""><i class='bx bxl-trip-advisor'></i></a>
            <a href=""><i class='bx bxl-twitter' ></i></a>
            <a href=""><i class='bx bxl-google-plus' ></i></a>
            <a href=""><i class='bx bxl-youtube' ></i></a>
            <a href=""><i class='bx bxl-linkedin' ></i></a>
            <a href=""><i class='bx bxl-pinterest-alt'></i></a>
            <a href=""><i class='bx bxl-tumblr' ></i></a>

        </div>
    </section>
    <script src="home.js"></script>
@endsection
