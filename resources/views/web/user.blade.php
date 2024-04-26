
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <link type="image/x-icon" href="{{ asset('assets') }}/img/favicon.png" rel="icon" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/feather.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css" />

    <title>Welcome to Saylance !</title>
</head>
<body>
<div class="main-wrapper">
    <header class="header header-fixed header-fourteen header-sixteen">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                    </a>
                    <a href="{{ route('web.home') }}" class="navbar-brand logo">
                        <h3><b style="color: darkorange;">Say</b><b style="color: cornflowerblue;">lance</b></h3>
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{ route('web.home') }}" class="menu-logo">
                            <img src="{{ asset('assets') }}/img/logo.png" class="img-fluid" alt="Logo" />
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="has-submenu megamenu active">
                            <a href="javascript:void(0);">Home <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu mega-submenu">
                                <li></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Designer <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"></ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Job Post <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"></ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Assert <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"></ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"></ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Contact us <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"></ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Help? <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu"></ul>
                        </li>
                    </ul>
                </div>
                @if(auth()->check())
                    <div class="header-navbar-rht">
                        <ul class="main-nav">
                            <li class="has-submenu">
                                <a href="#">{{ auth()->user()->name }} <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    @if(auth()->user()->role == 'Admin')
                                        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                    @else
                                        <li><a href="{{ route('user.home') }}">Dashboard</a></li>
                                    @endif
                                    <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="javascript:void(0);">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @else
                    <ul class="nav header-navbar-rht">
                        <li class="login-in-sixteen">
                            <a href="{{ route('login') }}" class="open-tabs btn btn-primary reg-btn reg-btn-sixteen"><i class="feather-lock me-2"></i>Login</a>
                        </li>
                        <li class="login-in-sixteen">
                            <a href="{{ route('register') }}" class="open-tabs btn btn-primary reg-btn reg-btn-sixteen"><i class="feather-user me-2"></i>Sign Up</a>
                        </li>
                    </ul>
                @endif
            </nav>
        </div>
    </header>
    <br />
    <br />
    <br />

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
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-01.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Logo Design Demo</a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-02.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Web Design demo </a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-03.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">UX Design demo </a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-04.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Availabe Features</a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-05.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Availabe Features</a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-06.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Availabe Features</a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-07.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Availabe Features</a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" onclick="openLink('{{ $adUrl }}')">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('assets') }}/img/doctors/doctor-08.jpg" />
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="" onclick="openLink('{{ $adUrl }}')">Availabe Features</a>
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
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn view-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Login Amazon</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="" onclick="openLink('{{ $adUrl }}')" class="btn book-btn" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Signup Amazon</a>
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

    <footer class="footer footer-one">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <a href="{{ route('web.home') }}">
                                    <h2><b style="color: darkorange;">Say</b><b style="color: cornflowerblue;">lance</b></h2>
                                </a>
                            </div>
                            <div class="footer-about-content">
                                <p>Join Saylance to find work, sell your services, and buy digital goods. It's simple and hassle-free. Get started now!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">For About</h2>
                                    <ul>
                                        <li><a href="#">Search for About</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">For Service</h2>
                                    <ul>
                                        <li><a href="#">Designer order</a></li>
                                        <li><a href="#">Job Post</a></li>
                                        <li><a href="#">Assets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">
                                <div class="footer-widget footer-contact">
                                    <h2 class="footer-title">Contact Us</h2>
                                    <div class="footer-contact-info">
                                        <div class="footer-address">
                                            <p><i class="feather-map-pin"></i> 2915 Rodney Street Saint Louis, MO 63101</p>
                                        </div>
                                        <div class="footer-address">
                                            <p><i class="feather-phone-call"></i> +1 636-524-2204</p>
                                        </div>
                                        <div class="footer-address mb-0">
                                            <p>
                                                <i class="feather-mail"></i>
                                                <a href="#">info@saylance.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7">
                        <div class="footer-widget">
                            <h2 class="footer-title">Join Our Newsletter</h2>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Enter Email" />
                                    <button type="submit" class="btn">Submit</button>
                                </form>
                            </div>
                            <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="copyright-text">
                                <p class="mb-0">Copyright © 2024 <a href="#" target="_blank">Saylance.</a> All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="copyright-menu">
                                <ul class="policy-menu">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
</div>

<script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/slick.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/backToTop.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/aos.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/script.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/rocket-loader.min.js" data-cf-settings="|49" defer></script>

@if(!session('success'))
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Your Budget</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="myForm" action="{{ route('web.budgetStore') }}" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Interest Budget</label>
                        <input type="number" name="budget" value="{{ old('budget') }}" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea class="form-control" name="description" required >{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" required id="flexCheckChecked" checked />
                            <label class="form-check-label" for="flexCheckChecked">
                                Terms and conditions
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Close</button>
                    <button onclick="openLink('{{ $adUrl }}')" type="button" name="submit" class="btn btn-primary" style="background-color: #008cba; border: 1px solid #008cba; color: white;">See Demo</button>
                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #008cba; border: 1px solid #008cba; color: white;">Send message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

@if(session('success'))
    <div class="modal fade" id="successAlert" tabindex="-1" role="dialog" aria-labelledby="successAlert" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                    <button type="button" onclick="modalHide('successAlert')" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <b style="font-size: 20px">
                        You will get job confirmation after 48 hours by checking mail. Email has been successfully delivered to your inbox.
                    </b>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="modalHide('successAlert')" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    $(document).ready(function () {
        @if(!session('success'))
            $("#exampleModal").modal("show");
        @endif
        @if(session('success'))
            $("#successAlert").modal("show");
        @endif
    });

    @if($adUrl)
        function openLink(url) {
            var myWindow = window.open(url, "_blank", "scrollbars=yes,width=800,height=500");
            myWindow.focus();
        }
    @endif
</script>
</body>
</html>



{{--<a href="" onclick="openLink('{{ $adUrl }}')">Demo</a>--}}
