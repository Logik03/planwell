@extends('master')



@section('title', 'homepage')


@section('content')


    <div
        class="hero page-inner overlay"
        style="background-image: url('images/hero_bg_3.jpg')"
    >
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">
                        freedom way,lekki phase1, Lagos.
                    </h1>

                    <nav
                        aria-label="breadcrumb"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{route('landingpage')}}">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="#">Properties</a>
                            </li>
                            <li
                                class="breadcrumb-item active text-white-50"
                                aria-current="page"
                            >
                                freedom way,lekki phase1, Lagos.
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="img-property-slide-wrap">
                        <div class="img-property-slide">
                            <img src="images/IMG_2094.jpeg" alt="Image" class="img-fluid" />
                            <img src="images/IMG_2083.jpeg" alt="Image" class="img-fluid" />
                            <img src="images/IMG_2081.jpeg" alt="Image" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2 class="heading text-primary">freedom way,lekki phase1, Lagos.</h2>
                    <p class="meta">Lagos, Nigeria</p>
                    <p class="text-black-50">
                        Water view Massive 8bedroom mansion with 2rooms bq and 8bedrooms detached staff quarters. Comes with the following facilities:

                        -Pool
                        -Gym house
                        -Cinema
                        -water view
                        - 4 spacious sit out lounge
                        - already installed elevator
                        - ample car park
                        - 1500sqm land size
                        Etc..
                    </p>
                    <p class="text-black-50">
                        - fully serviced
                        - spacious BQ
                        - ample parking space
                        - fitted kitchen
                        -spacious sitting room
                        - sizeable rooms
                    </p>

                    <div class="d-block agent-box p-5">
                        <div class="img mb-4">
                            <img
                                src="images/resize.jpg"
                                alt="Image"
                                class="img-fluid"
                            />
                        </div>
                        <div class="text">
                            <h3 class="mb-0">David Enwefa</h3>
                            <div class="meta mb-3">Top Agent</div>
                            <p>
                                Real estate expert with a passion for helping clients find their dream homes. With over a decade of experience in the industry, David has developed a keen eye for identifying the perfect properties that match his clients' unique needs and desires.
                            </p>
                            <ul class="list-unstyled social dark-hover d-flex">
                                <li class="me-1">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="me-1">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
