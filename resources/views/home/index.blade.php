@extends('master')



@section('title', 'homepage')


@section('content')
    <div class="hero">
        <div class="hero-slide">
            <div
                class="img overlay"
                style="background-image: url('pictures/IMG_2085.jpeg')"
            ></div>
            <div
                class="img overlay"
                style="background-image: url('pictures/IMG_2089.jpeg')"
            ></div>
            <div
                class="img overlay"
                style="background-image: url('pictures/IMG_2091.jpeg')"
            ></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        We Are Your Real Estate Neighbours
                    </h1>
                    <form
                        action="#"
                        class="narrow-w form-search d-flex align-items-stretch mb-3"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <input
                            type="text"
                            class="form-control px-4"
                            placeholder="Your ZIP code or City. e.g. New York"
                        />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Popular Properties
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a
                            href="#"
                            target="_blank"
                            class="btn btn-primary text-white py-3 px-4"
                        >View all properties</a
                        >
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>&#8358;1.7B</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos.</span
                      >
                                        <span class="city d-block mb-3">lagos, NIGERIA</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">8 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">Gym House</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">Cinema</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('singleProperty')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >See details</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>₦1.2B</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>₦150,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>₦300,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_5.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>&#8358;75,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>₦175,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>₦375,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_8.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>₦765,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>&#8358;750,000,000</span></div>
                                    <div>
                      <span class="d-block mb-2 text-black-50"
                      >freedom way,lekki phase1, Lagos</span
                      >
                                        <span class="city d-block mb-3">lagos, Nigeria</span>

                                        <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">2 beds</span>
                        </span>
                                            <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">2 baths</span>
                        </span>
                                        </div>

                                        <a
                                            href="{{route('contactUs')}}"
                                            class="btn btn-primary py-2 px-3"
                                        >Make Inquiry</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>

                        <div
                            id="property-nav"
                            class="controls"
                            tabindex="0"
                            aria-label="Carousel Navigation"
                        >
                <span
                    class="prev"
                    data-controls="prev"
                    aria-controls="property"
                    tabindex="-1"
                >Prev</span
                >
                            <span
                                class="next"
                                data-controls="next"
                                aria-controls="property"
                                tabindex="-1"
                            >Next</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Our Properties</h3>
                        <p>
                            At Our Properties, we understand that finding your dream home or investment is a significant and personal journey. That's why we're here to guide you every step of the way, offering a diverse range of properties that cater to your unique needs and aspirations. With a legacy of trust and a commitment to excellence, Our Properties is your partner in making your real estate dreams a reality.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Property for Sale</h3>
                        <p>
                            Introducing an extraordinary opportunity to own a piece of prime real estate that perfectly balances luxury, comfort, and location. This remarkable property for sale encapsulates the essence of modern living, offering a harmonious blend of architectural brilliance and functional design. Step into a world where your aspirations meet reality, and your vision of a dream home becomes a tangible masterpiece.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Real Estate Agent</h3>
                        <p>
                            Whether you're buying your dream home or exploring lucrative investment opportunities. In this journey, real estate agents emerge as invaluable allies, guiding you through the complex landscape of property transactions. In this comprehensive guide, we will delve into the crucial role of real estate agents, their responsibilities, and the qualities that make a top-notch agent. Whether you're a first-time buyer or a seasoned investor.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">Our Services</h3>
                        <p>
                            Our Services Includes:
                            Buying & selling Homes
                            Property Management
                            Consultation
                            Rentals
                            And etc
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        Customer Says
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="testimonial">
                            <img
                                src="images/plan1.jpg"
                                alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4"
                            />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Kazim</h3>
                            <blockquote>
                                <p>
                                    "I had an incredible experience working with this real estate company. From the first consultation to the final closing, they were professional, knowledgeable, and dedicated. They made the entire process smooth and seamless, and I couldn't be happier with the result."
                                </p>
                            </blockquote>
                            <p class="text-black-50">Customer</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img
                                src="images/plan6.jpg"
                                alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4"
                            />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Michael </h3>
                            <blockquote>
                                <p>
                                    “ I highly recommend this real estate company for anyone looking to buy or sell property. They went above and beyond to understand my needs and preferences, and they found me the perfect home. Their attention to detail and personalized approach truly set them apart."
                                </p>
                            </blockquote>
                            <p class="text-black-50">Customer</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img
                                src="images/placeholder1.jpg"
                                alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4"
                            />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">John</h3>
                            <blockquote>
                                <p>
                                    “I can't say enough good things about this real estate company. Their team of agents is extremely responsive, proactive, and resourceful. They guided me through the entire selling process with expertise and integrity, and I felt confident every step of the way. They truly exceeded my expectations."
                                </p>
                            </blockquote>
                            <p class="text-black-50">Customer</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img
                                src="images/placeholder3.jpg"
                                alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4"
                            />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Chioma</h3>
                            <blockquote>
                                <p>
                                    “Working with this real estate company was an absolute pleasure. Their agents were not only highly professional but also genuinely caring. They took the time to understand my unique situation and helped me find a home that suited my needs perfectly. I would trust them with any future real estate transactions."
                                </p>
                            </blockquote>
                            <p class="text-black-50">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Let's find home that's perfect for you
                    </h2>
                    <p class="text-black-50">
                        At RealEstateNeighbours, we understand that finding the perfect home is more than just a transaction; it's about finding a place where memories are made, dreams are realized, and futures are built. With our dedicated team of experienced real estate professionals, cutting-edge technology, and a deep understanding of the local market, we are here to guide you every step of the way on your journey to finding the home that's perfect for you.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
                        <div class="feature-text">
                            <h3 class="heading">500 Properties</h3>
                            <p class="text-black-50">
                                Having over 500 properties across the nation, we are your go to property firm
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
                        <div class="feature-text">
                            <h3 class="heading">Top Rated Agents</h3>
                            <p class="text-black-50">
                                We have gone the extra mile to curate the top agents for you
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
                        <div class="feature-text">
                            <h3 class="heading">Legit Properties</h3>
                            <p class="text-black-50">
                                We have an integrity for delivering homes with proper documents to ensure everything we do has a legal backing
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div
                    class="col-6 col-sm-6 col-md-6 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
              ><span class="countup text-primary">3298</span></span
              >
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div
                    class="col-6 col-sm-6 col-md-6 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
              ><span class="countup text-primary">2181</span></span
              >
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div
                    class="col-6 col-sm-6 col-md-6 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="500"
                >
                    <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
              ><span class="countup text-primary">9316</span></span
              >
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div
                    class="col-6 col-sm-6 col-md-6 col-lg-3"
                    data-aos="fade-up"
                    data-aos-delay="600"
                >
                    <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
              ><span class="countup text-primary">7191</span></span
              >
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Be a part of our growing real state agents</h2>
                <p>
                    <a
                        href="#"
                        target="_blank"
                        class="btn btn-primary text-white py-3 px-4"
                    >Apply for Real Estate agent</a
                    >
                </p>
            </div>
            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="section section-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Our Team
                    </h2>
                    <p class="text-black-50">
                        we believe that every successful endeavor is fueled by the collective efforts and passion of a dedicated team.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img
                            src="images/resize.jpg"
                            alt="Image"
                            class="img-fluid"
                        />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">David Enwefa</a></h2>
                            <span class="meta d-block mb-3">Owner/C.E.O</span>
                            <p>
                                David Enwefa, a dedicated and experienced real estate expert with a passion for helping clients find their dream homes. With over a decade of experience in the industry, David has developed a keen eye for identifying the perfect properties that match his clients' unique needs and desires.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img
                            src="images/magani.jpeg"
                            alt="Image"
                            class="img-fluid"
                        />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Magani Clement</a></h2>
                            <span class="meta d-block mb-3">Manager</span>
                            <p>
                                If you are looking for a trustworthy and dedicated real estate agent who will go the extra mile for you, look no further than Magani Clement. With his expertise, personalized approach, and unwavering commitment to client satisfaction, he is the ideal partner to help you navigate the real estate market and find your perfect home.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img
                            src="images/agoking.jpeg"
                            alt="Image"
                            class="img-fluid"
                        />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Emmanuel Agoking</a></h2>
                            <span class="meta d-block mb-3">Digital Publisher</span>
                            <p>
                                Introducing Emmanuel Agoking, a dynamic and results-driven digital marketer with a knack for creating impactful online campaigns. With a passion for all things digital, Agoking has honed his skills over the years to become a true expert in the ever-evolving world of digital marketing.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/realestateneighbours" target="_blank"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
