@extends('frontend.layouts.app')
@section('title', 'Contact Us')
@section('header-attr') class="nav-shadow" @endsection

@section('content')

<!-- Breadcrumb Starts Here -->
<div class="py-0 section--bg-white">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb pb-0 mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="fs-6 text-secondary">Home</a></li>
                <li class="breadcrumb-item active"><a href="contact.html" class="fs-6 text-secondary">Contact</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Ends Here -->

<!-- Contact Hero Area Starts Here -->
<section class="section section--bg-white hero hero--one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero__img-content">
                    <div class="hero__img-content--main">
                        <img src="{{asset('frontend/dist/images/contact/image.jpg')}}" alt="image" />
                    </div>
                    <img src="{{asset('frontend/dist/images/shape/dots/dots-img-02.png')}}" alt="shape"
                        class="hero__img-content--shape-01" />
                    <img src="{{asset('frontend/dist/images/shape/rec05.png')}}" alt="shape"
                        class="hero__img-content--shape-02" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero__content-info">
                    <h2 class="font-title--md mb-0">Our Branches</h2>
                    <p class="font-para--lg">
                        Find our different branches in these 3 countries and access the site from your location
                    </p>
                    <ul class="hero__content-location">
                        <li>
                            <span><i class="fas fa-map-marker-alt fa-2x"></i></span>
                            <p>Paris, France</p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt fa-2x"></i></span>
                            <p>Lome, Togo</p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt fa-2x"></i></span>
                            <p>Accra, Ghana</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get in Touch Area Starts Here -->
<section class="section getin-touch overflow-hidden"
    style="background-image: url({{asset('frontend/dist/images/contact/bg.png')}});">
    <div class="container">
        <div class="row">
            <h2 class="font-title--md text-center">Get in Touch</h2>
            <div class="col-lg-5 pe-lg-4 position-relative mb-4 mb-lg-0">
                <div class="contact-feature d-flex align-items-center">
                    <div class="contact-feature-icon primary-bg">
                     <i class="fas fa-map-marked-alt fa-2x"></i>
                    </div>
                    <div class="contact-feature-text">
                        <h6>Address</h6>
                        <p>Sabado station Sanol</p>
                        <p>#15 Rue alegria-60827, Togo</p>
                    </div>
                </div>

                <div class="contact-feature d-flex align-items-center my-lg-4 my-3">
                    <div class="contact-feature-icon tertiary-bg">
                        <i class="far fa-envelope fa-2x"></i>
                    </div>
                    <div class="contact-feature-text">
                        <h6>Email</h6>
                        <h5>graceadjetey32@gmail.com</h5>
                    </div>
                </div>

                <div class="contact-feature d-flex align-items-center">
                    <div class="contact-feature-icon success-bg">
                       <i class="fas fa-phone-alt fa-2x"></i>
                    </div>
                    <div class="contact-feature-text">
                        <h6>Phone</h6>
                        <h5>+228 96665146</h5>
                    </div>
                </div>
                <img src="{{asset('frontend/dist/images/shape/dots/dots-img-03.png')}}" alt="Shape"
                    class="img-fluid contact-feature-shape" />
            </div>
            <div class="col-lg-7 form-area">
                <form action="#">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control--focused" placeholder="Type here..."
                                id="name" />
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Type here..." id="email" />
                        </div>
                    </div>
                    <div class="row my-lg-2 my-2">
                        <div class="col-12">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Type here..." />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="message">Messages</label>
                            <textarea id="message" placeholder="Type here..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-end">
                            <button type="submit" class="button button-lg button--primary fw-normal">Send
                                Message</button>
                        </div>
                    </div>
                </form>
                <div class="form-area-shape">
                    <img src="{{asset('frontend/dist/images/shape/circle3.png')}}" alt="Shape"
                        class="img-fluid shape-01" />
                    <img src="{{asset('frontend/dist/images/shape/circle5.png')}}" alt="Shape"
                        class="img-fluid shape-02" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get in Touch Area Ends Here -->

<!-- Map Area Starts Here -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-area-frame">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63464.06630064716!2d1.0903783615704707!3d6.197018860305156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10215a49c92ec6a1%3A0x60b682e3a49af377!2sSagbado!5e0!3m2!1sfr!2stg!4v1718955146496!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map Area Ends Here -->

@endsection