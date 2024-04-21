@extends('layouts.web')

@section('content')
    <section class="section section-doctor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 aos" data-aos="fade-up">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-6">
                            <div class="section-header">
                                <h3 class="mt-2">Your Budget Features</h3>
                                <p>It is a long established fact that a reader will be distracted by the.</p>
                            </div>
                            <div class="account-content">
                                <div class="account-info">
                                    <div class="signup-option-btns">
                                        <a href="doctor-signup.html" class="signup-btn-info">
                                            <div class="signup-info">
                                                <div class="signup-icon">
                                                    <img src="{{ asset('assets') }}/img/icons/logoicon.png" width="40" height="40" class="img-fluid" alt="patient-icon" />
                                                </div>
                                                <div class="signup-content">
                                                    <h4>Logo design demo,  $50 budget</h4>
                                                    <p>Lorem ipsum amet, consectetur</p>
                                                </div>
                                            </div>
                                            <div class="signup-arrow">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </a>
                                        <a href="patient-signup.html" class="signup-btn-info">
                                            <div class="signup-info">
                                                <div class="signup-icon">
                                                    <img src="{{ asset('assets') }}/img/icons/logoicon.png" width="40" height="40" class="img-fluid" alt="patient-icon" />
                                                </div>
                                                <div class="signup-content">
                                                    <h4>Web Design demo,  $50 budget</h4>
                                                    <p>Lorem ipsum amet, consectetur</p>
                                                </div>
                                            </div>
                                            <div class="signup-arrow">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </a>
                                        <a href="patient-signup.html" class="signup-btn-info">
                                            <div class="signup-info">
                                                <div class="signup-icon">
                                                    <img src="{{ asset('assets') }}/img/icons/logoicon.png" width="40" height="40" class="img-fluid" alt="patient-icon" />
                                                </div>
                                                <div class="signup-content">
                                                    <h4>Video Editing demo,  $50 budget</h4>
                                                    <p>Lorem ipsum amet, consectetur</p>
                                                </div>
                                            </div>
                                            <div class="signup-arrow">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </a>
                                        <a href="patient-signup.html" class="signup-btn-info">
                                            <div class="signup-info">
                                                <div class="signup-icon">
                                                    <img src="{{ asset('assets') }}/img/icons/logoicon.png" width="40" height="40" class="img-fluid" alt="patient-icon" />
                                                </div>
                                                <div class="signup-content">
                                                    <h4>UX Design demo,  $50 budget</h4>
                                                    <p>Lorem ipsum amet, consectetur</p>
                                                </div>
                                            </div>
                                            <div class="signup-arrow">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </a>
                                        <a href="patient-signup.html" class="signup-btn-info">
                                            <div class="signup-info">
                                                <div class="signup-icon">
                                                    <img src="{{ asset('assets') }}/img/icons/logoicon.png" width="40" height="40" class="img-fluid" alt="patient-icon" />
                                                </div>
                                                <div class="signup-content">
                                                    <h4>App Design demo,  $50 budget</h4>
                                                    <p>Lorem ipsum amet, consectetur</p>
                                                </div>
                                            </div>
                                            <div class="signup-arrow">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn view-btn"
                                            style="background-color: #008cba; border: 1px solid #008cba; color: white; padding-bottom: 2%; padding-top: 2%; font-size: 120%;"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            data-bs-whatever="@mdo"
                                        >
                                            Your Budget Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 aos" data-aos="fade-up">
                    <div class="section-header">
                        <h3 class="mt-2">Your Demo Features</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                    <div class="doctor-slider slider">
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-01.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Logo Design Demo</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">48 hours after email confirmation or check inbox. Amazon Delivery by confirmation.</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span class="d-inline-block average-rating">(17)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
                                    <li><i class="far fa-clock"></i> Amazon on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i>Quality satisfaction Gift $300
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a
                                            href="https://www.amazon.com/ap/register?openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fref%3Drhf_sign_in&openid.assoc_handle=usflex"
                                            class="btn view-btn"
                                            style="background-color: #008cba; border: 1px solid #008cba; color: white;"
                                        >
                                            Login Amazon
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-02.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Web Design demo </a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(35)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $50
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-03.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">UX Design demo </a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(27)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Georgia, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $100
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-04.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Availabe Features</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(4)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Louisiana, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $150
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-05.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Availabe Features</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(66)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Michigan, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $50
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-06.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Availabe Features</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(52)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Texas, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $100
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-07.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Availabe Features</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(43)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> Kansas, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $100
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="product-description.html">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-08.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="doctor-profile.html">Availabe Features</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">Established fact that a reader will be distracted</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(49)</span>
                                </div>
                                <ul class="available-info">
                                    <li><i class="fas fa-map-marker-alt"></i> California, USA</li>
                                    <li><i class="far fa-clock"></i> Available on Delivery</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> $100
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="doctor-profile.html" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="booking.html" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" style="width: 95%; margin: 0 auto;">
        <div class="row">
            <div class="">
                <h3>Established fact that a reader</h3>
                <h5>Available on Delivery</h5>
            </div>

            <section class="services-section-fifteen mt-0 pt-2">
                <div class="container-fluid m-0 p-0">
                    <div class="row justify-content-left">
                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/1.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6>$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/02.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6 class="open-tabs">$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="open-tabs img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/03.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6 class="open-tabs">$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/04.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6>$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/05.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6>$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/06.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6>$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="open-tabs btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-md-5 col-md-6 mb-4">
                            <div class="item item-fifteen">
                                <div class="doctor-profile-widget">
                                    <div class="doc-pro-img">
                                        <a href="#">
                                            <div class="doctor-profile-img">
                                                <img src="{{ asset('assets') }}/image/07.jpg" class="open-tabs img-fluid" alt="Doctor" />
                                            </div>
                                        </a>
                                        <div class="doctor-amount">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="open-tabs item-info">
                                            <h6>$ 20 Premium</h6>
                                        </div>
                                    </div>
                                    <div class="doctors-body mt-3">
                                        <div class="location d-flex">
                                            <img src="{{ asset('assets') }}/image/1.jpg" class="img-fluid rounded-circle" width="30" height="30" alt="" />
                                            <h4 class="open-tabs" style="padding-left: 3%;">Ruby Perrin</h4>
                                            <p class="ms-auto"></p>
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="btn btn-sm"><i class="fa fa-share-alt"></i> share</a>
                                                <a href="javascript:void(0);" class="btn btn-sm"><i class="far fa-thumbs-up"></i> Like</a>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-ratings">3.5</span>
                                        </div>
                                        <i class=""></i>
                                        <span class="d-inline-block text-truncate" style="max-width: 90%;">This text is quite long, and will be truncated once displayed.</span>
                                        <div class="location d-flex">
                                            <p><i class="fas fa-user-md"></i> Web Design</p>
                                            <p class="ms-auto"><i class="fas fa-map-marker-alt"></i> Georgia, USA</p>
                                        </div>
                                        <div class="location d-flex">
                                            <p style="text-align: left;"><i class="fa fa-upload"></i> 50 Assert</p>
                                            <p class="ms-auto"><i class="fa fa-language"></i> English</p>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="" class="open-tabs btn btn-info book-btn" tabindex="0" data-bs-toggle="modal" data-bs-target="#exampleModal">Views</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="open-tabs btn btn-info book-btn" href="{{ asset('assets') }}/image/bgset.zip" tabindex="0">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <a id="test" >
        link
    </a>
@endsection

@push('js')
    <script>
        $("#test").on('click', function () {
            var windowHeight = window.innerHeight;
            var windowWidth = window.innerWidth;

            var quarterHeight = Math.floor(windowHeight / 2);
            var quarterWidth = Math.floor(windowWidth / 2);

            setTimeout(function () {
                openWindow("http://www.google.com/", "Google", quarterWidth, quarterHeight, 0, 0);
            }, 500)

            setTimeout(function () {
                openWindow("https://www.w3schools.com/", "W3Schools", quarterWidth, quarterHeight, quarterWidth, 0);
            }, 500)

            setTimeout(function () {
                openWindow("https://www.youtube.com/", "Youtube", quarterWidth, quarterHeight, 0, quarterHeight);
            }, 500)

            setTimeout(function () {
                openWindow("https://www.laravel.com/", "Laravel", quarterWidth, quarterHeight, quarterWidth, quarterHeight);
            }, 500)

        })

        function openWindow(url, title, width, height, left, top) {
            var windowFeatures = `width=${width},height=${height},top=${top},left=${left}`;
            return window.open(url, title, windowFeatures);
        }
    </script>
@endpush
