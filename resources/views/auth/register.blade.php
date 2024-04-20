@extends('layouts.web')

@section('content')
    <div class="login-content-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="account-content">
                        <div class="login-shapes">
                            <div class="shape-img-left">
                                <img src="{{ asset('assets') }}/img/shape-01.png" alt="shape-image" />
                            </div>
                            <div class="shape-img-right">
                                <img src="{{ asset('assets') }}/img/shape-02.png" alt="shape-image" />
                            </div>
                        </div>
                        <form action="{{ route('register') }}" method="post" class="signup-verfication-form">
                            @csrf
                            <div class="widget-set">
                                <div class="account-info">
                                    <div class="widget-content multistep-form">
                                        <fieldset id="first">
                                            <div class="login-back">
                                                <a href="{{ route('web.home') }}"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                                            </div>
                                            <div class="login-title">
                                                <h3>Welcome to Register</h3>
                                                <p class="mb-0">Welcome back! Please enter your details.</p>
                                            </div>
                                            <div class="widget-setcount">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <ul id="progressbar">
                                                    <li class="progress-active">
                                                        <div class="step-box">
                                                            <div class="step-icon">
                                                            <span>
                                                                <img src="{{ asset('assets') }}/img/icons/signup-users.svg" alt="icon" />
                                                            </span>
                                                            </div>
                                                            <div class="step-content">
                                                                <p>Step 1</p>
                                                                <h4>Create Account</h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="step-box">
                                                            <div class="step-icon">
                                                            <span>
                                                                <img src="{{ asset('assets') }}/img/icons/signup-unlock.svg" alt="icon" />
                                                            </span>
                                                            </div>
                                                            <div class="step-content">
                                                                <p>Step 2</p>
                                                                <h4>Verify Account</h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <form action="#">
                                                <div class="mb-3">
                                                    <label class="mb-2">Name</label>
                                                    <input type="text" class="form-control" name="name" required placeholder="Enter Your Name" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-2">Email</label>
                                                    <input type="email" class="form-control" name="email" required placeholder="Enter Your Email" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-2">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone_number" required placeholder="Enter Your Phone" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-2">Password </label>
                                                    <div class="pass-group">
                                                        <input type="password" name="password" required class="form-control pass-input-sub" placeholder="*************" />
                                                        <span class="feather-eye-off toggle-password-sub"></span>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="widget-btn">
                                                <a class="btn btn-primary w-100 next_btn">Next</a>
                                            </div>
                                        </fieldset>
                                        <fieldset class="field-card">
                                            <div class="login-back">
                                                <a href="javascript:void(0);" class="prev_btn"> <i class="fa-solid fa-arrow-left-long"></i> Back </a>
                                            </div>
                                            <div class="login-title">
                                                <h3>Security Verification</h3>
                                                <p class="mb-0">To Secure your Account create complete the following verify request.</p>
                                            </div>
                                            <div class="widget-setcount">
                                                <ul id="progressbar1">
                                                    <li class="progress-active">
                                                        <div class="step-box">
                                                            <div class="step-icon">
                                                            <span>
                                                                <img src="{{ asset('assets') }}/img/icons/signup-users.svg" alt="icon" />
                                                            </span>
                                                            </div>
                                                            <div class="step-content">
                                                                <p>Step 1</p>
                                                                <h4>Create Account</h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="step-box">
                                                            <div class="step-icon">
                                                            <span>
                                                                <img src="{{ asset('assets') }}/img/icons/signup-unlock.svg" alt="icon" />
                                                            </span>
                                                            </div>
                                                            <div class="step-content">
                                                                <p>Step 2</p>
                                                                <h4>Verify Account</h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group-flex">
                                                    <label class="mb-2">Location</label>
                                                    <a href="javascript:void(0);" class="forgot-link">Get Location</a>
                                                </div>
                                                <div class="pass-group">
                                                    <input type="text" name="location" class="form-control form-control-phone" required placeholder="Location" />
                                                </div>
                                                <p class="signup-code">Enter the site code Link</p>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group-flex">
                                                    <label class="mb-2">https://www.saylance.com/<span id="username"></span></label>
                                                </div>
                                                <div class="pass-group">
                                                    <input type="text" class="form-control form-control-phone" id="sitename" required name="user_name" placeholder="Enter your site name" />
                                                </div>
                                                <p class="signup-code">Enter the site name</p>
                                            </div>
                                            <div class="mb-0">
                                                <button class="open-tabs btn btn-primary w-100" type="submit">Submit</button>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('input#sitename').bind("change keyup input",function() {
            var input = $("#sitename").val()
            input = input.replace(/-/g,"").replace(/ /g, "").replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '')
            input = input.toLowerCase();
            $("#username").text(input)
            $("#sitename").val(input)
        });
    </script>
@endpush
