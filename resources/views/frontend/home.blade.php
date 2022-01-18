@extends('frontend.frontend-layouts.masterlayouts')

@section('content')


<div class="slider">
    <div class="slide">
        <img src="https://picsum.photos/800?t=1 " />

    </div>
    <div class="slide">
        <img src="https://picsum.photos/800?t=2  " />

    </div>
    <div class="slide">
        <img src="https://picsum.photos/800?t=3   " />

    </div>
    <div class="slide">
        <img src="https://picsum.photos/800?t=4  " />

    </div>
    <div class="slide">
        <img src="https://picsum.photos/800?t=5  " />

    </div>

    <!-- buttons -->
    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
</div>

<script>
    const images = document.querySelectorAll(".slide"),
        next = document.querySelector(".next"),
        prev = document.querySelector(".prev");

    let current = 0;

    function changeImage() {
        images.forEach((img) => {
            img.classList.remove("show");
            img.style.display = "none";
        });

        images[current].classList.add("show");
        images[current].style.display = "block";
    }

    // Calling first time
    changeImage();

    next.addEventListener("click", function() {
        current++;

        if (current > images.length - 1) {
            current = 0;
        } else if (current < 0) {
            current = images.length - 1;
        }

        changeImage();
    });
    prev.addEventListener("click", function() {
        current--;

        if (current > images.length - 1) {
            current = 0;
        } else if (current < 0) {
            current = images.length - 1;
        }

        changeImage();
    });

    // Auto change in 5 seconds

    setInterval(() => {
        next.click();
    }, 5000);
</script>

<style>
    .slider {
        height: 80vh;
        width: 100%;
        position: relative;
        margin: auto;
    }

    .slider .slide {
        display: none;
        height: 100%;
        width: 100%;
    }

    .slider .slide img {
        height: 100%;
        width: 100%;
        filter: contrast(90%);
        object-fit: cover;
    }

    .slider .slide .caption {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 22px;
        color: #fff;
        padding: 8px 16px;
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 4px;
    }

    .slider a.prev,
    .slider a.next {
        position: absolute;
        top: 50%;
        font-size: 30px;
        cursor: pointer;
        user-select: none;
        color: #ffffff;
        padding: 12px;
        transition: 0.2s;
    }

    .slider a.prev:hover,
    .slider a.next:hover {
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 3px;
    }

    .slider .next {
        right: 20px;
    }

    .slider .prev {
        left: 20px;
    }

    .show {
        animation: fade 0.5s ease-out;
    }

    @keyframes fade {
        from {
            opacity: 0.5;
        }

        to {
            opacity: 1;
        }
    }

</style>


    <!-- PAGE ABOUT -->
    <section class="page-section" id="about">
        <div class="container">
            <h1 class="section-title">
                <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span
                        class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                            class="fa fa-star fa-stack-1x"></i></span></span>
                <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">What's about Company
                </span>
            </h1>
            <div class="row">
                <div class="col-lg-8">
                    <p data-animation="fadeInUp" data-animation-delay="300">Praesent ac sem in neque venenatis tristique.
                        Morbi et ligula velit. Nullam a augue vel mi porta
                        vestibulum non ac elit. Vivamus convallis tortor et fermentum semper. In hac habitasse platea
                        dictumst. Curabitur eget dui id metus pulvinar suscipit. Quisque vitae ligula laoreet, scelerisque
                        leo quis, facilisis metus. Sed pellentesque, urna sed varius consectetur, eros augue fringilla
                        magna, id sem magna vel diam. Nulla sed hendrerit nunc.</p>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 pull-left">

                    <!-- Thumbnails -->
                    <div class="row thumbnails">

                        <div class="col-sm-6 col-xs-6">
                            <div class="thumbnail no-border no-padding" data-animation="fadeInLeft"
                                data-animation-delay="100">
                                <div class="media">
                                    <img src="{{ asset('') }}assets1/img/preview/about-sm-1.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-6">
                            <div class="thumbnail no-border no-padding" data-animation="fadeInDown"
                                data-animation-delay="200">
                                <div class="media">
                                    <img src="{{ asset('') }}assets1/img/preview/about-sm-2.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-6">
                            <div class="thumbnail no-border no-padding" data-animation="fadeInRight"
                                data-animation-delay="300">
                                <div class="media">
                                    <img src="{{ asset('') }}assets1/img/preview/about-sm-3.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-6">
                            <div class="thumbnail no-border no-padding" data-animation="fadeInUp"
                                data-animation-delay="400">
                                <div class="media">
                                    <img src="{{ asset('') }}assets1/img/preview/about-sm-4.jpg" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /Thumbnails -->

                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE ABOUT -->


    @include('frontend.contest_data');



    <!-- PAGE CONTACT -->
    <section class="page-section " id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span
                                class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                    class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Contact
                            Us</span>
                    </h1>
                </div>

                <div class="col-lg-7 col-md-7">
                    <!-- Contact form -->
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{ session('message') }}
                        </div>

                    @endif
                    <form method="post" action="{{ route('enquiry_store') }}" class="af-form row">
                        {{ csrf_field() }}
                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="name" placeholder="Enter Your Name..." class="form-control placeholder" />
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="email" name="email"  placeholder="Enter Your Email..."
                                    class="form-control placeholder" />
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="phone"  placeholder="Enter Your Phone..."
                                    class="form-control placeholder" />
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <textarea name="message"  placeholder="Enter Your Message..." rows="4" cols="50"
                                    class="form-control placeholder"></textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required text-center">
                            <div class="form-group af-inner">
                                <input type="submit"
                                    class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent"
                                    value="Send message" />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-5 col-md-5">
                    <ul class="contact-list">

                        <li class="list-item li-icon"><i class="fa fa-phone fa-2x">
                                <span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212)
                                        555-2368</a></span></i></li>

                        <li class="list-item li-icon"><i class="fa fa-envelope fa-2x">
                                <span class="contact-text gmail"><a href="mailto:#"
                                        title="Send me an email">hitmeup@gmail.com</a></span></i></li>

                        <li class="list-item li-icon"><i class="fa fa-map-marker fa-2x">
                                <span class="contact-text place">City, State</span></i></li>

                    </ul>
                </div>
    </section>
    <!-- /PAGE CONTACT -->
    </div>
    <!-- /Content area -->
    <style>
        .li-icon {
            font-size: 15px;
            padding-bottom: 20px;
        }

    </style>
@endsection
