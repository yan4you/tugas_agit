@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section with Slider -->
    <header class="slider-section" style="margin: 0; padding: 0; width: 100%;">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel"
            style="width: 146%; transform: translateX(-50%); margin-left: 50%;">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('/asset/img/logo/logo.jpg'); background-size: cover; background-position: center; height: 60vh;">
                    <div class="carousel-caption text-start">
                        <h1 class="display-4 fw-bold text-white">Outstanding Coffee Shop</h1>
                        <p class="text-white">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour.</p>
                        <a href="#about-us" class="btn btn-warning btn-lg mt-3">Learn More</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url('/asset/img/logo/2.jpg'); background-size: cover; background-position: center; height: 60vh;">
                    <div class="carousel-caption text-start">
                        <h1 class="display-4 fw-bold text-white">Coffee Made Perfect</h1>
                        <p class="text-white">Freshly brewed coffee with the best ingredients for you.</p>
                        <a href="#menu" class="btn btn-warning btn-lg mt-3">Explore Menu</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url('/asset/img/logo/3.jpg'); background-size: cover; background-position: center; height: 60vh;">
                    <div class="carousel-caption text-start">
                        <h1 class="display-4 fw-bold text-white">Unmatched Quality</h1>
                        <p class="text-white">Experience the finest coffee and food at our shop.</p>
                        <a href="#services" class="btn btn-warning btn-lg mt-3">Our Services</a>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>


    <!-- About Us Section -->
    <section id="about-us" class="py-5" style="background-color: #f8f9fa; width: 100%;">
        <div class="container text-center px-5">
            <h2 class="text-warning fw-bold mb-4">About Us</h2>
            <p class="mb-5 lead">We are dedicated to providing the best coffee and customer experience. Our team ensures
                every visit is memorable, serving freshly brewed coffee and delicious snacks. Whether you're here for a
                quick break or a long chat with friends, we guarantee satisfaction.</p>

            <!-- About Us Content -->
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0 d-flex justify-content-center">
                    <!-- Adjusted the max-width for the image to make it smaller -->
                    <img src="/asset/img/logo/6.jpg" class="img-fluid shadow-lg rounded"
                        style="max-width: 50%; height: auto;" alt="About Us Image">
                </div>
                <div class="col-md-6">
                    <h4 class="text-dark mb-4">Our Mission</h4>
                    <p class="text-muted">At Burger Draken, our mission is simple: to create an unforgettable experience
                        through the perfect combination of quality coffee and exceptional service. We believe in
                        sourcing the finest ingredients and serving them with care and passion.</p>

                    <h4 class="text-dark mb-4">Our Story</h4>
                    <p class="text-muted">Born from a passion for great coffee, Burger Draken has grown from a small
                        cafe to a popular gathering spot in the community. Every cup we serve is a testament to our
                        commitment to quality and customer satisfaction.</p>

                    <a href="{{route('menu') }}" class="btn btn-warning btn-lg mt-4">Explore Our Menu</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold">Menu</h1>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing industry.</p>
            </div>
            <div class="row g-4">
                <!-- Repeatable Gallery Items -->
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/buger.jpg" class="img-fluid rounded" alt="Gallery Image 1">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/burger2.jpg" class="img-fluid rounded" alt="Gallery Image 2">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/burger3.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/chiken.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/chiken2.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/chiken3.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/hoddog.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/hotdog2.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/hotdog3.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/kentang.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/kentang2.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item position-relative">
                    <img src="/asset/img/menu/kentang3.jpg" class="img-fluid rounded" alt="Gallery Image 3">
                    <div class="gallery-overlay">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">See More</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold">Services</h1>
                <p class="text-muted">Typesetting industry lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            <div class="row g-4">
                <!-- Repeatable Service Items -->
                <div class="col-lg-4">
                    <div class="card text-center bg-warning shadow-sm">
                        <div class="card-body">
                            <img src="images/icon1.png" alt="Service Icon 1" class="mb-3">
                            <h5 class="card-title">Original Coffee</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing industry.</p>
                            <a href="#" class="btn btn-outline-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center bg-warning shadow-sm">
                        <div class="card-body">
                            <img src="images/icon2.png" alt="Service Icon 2" class="mb-3">
                            <h5 class="card-title">20 Coffee Flavors</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing industry.</p>
                            <a href="#" class="btn btn-outline-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center bg-warning shadow-sm">
                        <div class="card-body">
                            <img src="images/icon3.png" alt="Service Icon 3" class="mb-3">
                            <h5 class="card-title">Pleasant Ambience</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing industry.</p>
                            <a href="#" class="btn btn-outline-dark">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->
    <section class="client_section layout_padding py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="client_taital">Customer Testimonials</h1>
                <p class="client_text">Hear what our customers say about us. Real reviews from real people!</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="testimonial-card d-flex justify-content-center align-items-center py-5">
                            <div class="card shadow-lg p-4 rounded" style="max-width: 600px; background-color: #fff;">
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="/asset/testimoni/test.jpg" class="rounded-circle"
                                        style="width: 80px; height: 80px; object-fit: cover;" alt="Customer Photo">
                                </div>
                                <h4 class="text-center mb-2">Mike</h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                </div>
                                <p class="text-center">"The coffee is fantastic! I’ve tried multiple flavors and each
                                    one has a unique and rich taste. Definitely the best place to unwind and enjoy a cup
                                    of fresh coffee!"</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="testimonial-card d-flex justify-content-center align-items-center py-5">
                            <div class="card shadow-lg p-4 rounded" style="max-width: 600px; background-color: #fff;">
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="/asset/testimoni/test2.jpg" class="rounded-circle"
                                        style="width: 80px; height: 80px; object-fit: cover;" alt="Customer Photo">
                                </div>
                                <h4 class="text-center mb-2">John Doe</h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                                    <!-- 4 stars -->
                                </div>
                                <p class="text-center">"I love the atmosphere of the place, it’s cozy and perfect for
                                    relaxing. The staff is friendly, and the coffee flavors are to die for!"</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <div class="testimonial-card d-flex justify-content-center align-items-center py-5">
                            <div class="card shadow-lg p-4 rounded" style="max-width: 600px; background-color: #fff;">
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="/asset/testimoni/test3.jpg" class="rounded-circle"
                                        style="width: 80px; height: 80px; object-fit: cover;" alt="Customer Photo">
                                </div>
                                <h4 class="text-center mb-2">Willi</h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                </div>
                                <p class="text-center">"The best coffee shop in town! I’ve been coming here for months
                                    and the quality never disappoints. Every visit feels like home!"</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Indicators (optional) -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4" style="width: 146%; transform: translateX(-50%); margin-left: 50%;">
        <div class="container-fluid text-center">
            <p>&copy; 2024 Burger Draken. All Rights Reserved.</p>
        </div>
    </footer>

</div>
@endsection