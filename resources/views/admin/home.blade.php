@extends('layouts.web')

@section('content')
    <div class="login-content-info mb-5">
        <div class="container-fluid">
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
                        <div class="account-info">
                            <div class="login-title">
                                <h3>Welcome to Register</h3>
                                <p class="mb-0">Welcome back! Please enter your details.</p>
                            </div>
                            <form action="{{ route('admin.linkStore') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2">Bottom Link</label>
                                    <input type="text" class="form-control" name="bottom_link" value="{{ old('bottom_link', $data->bottom_link ?? '') }}" placeholder="Bottom Link" />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Image Link</label>
                                    <input type="text" class="form-control" name="image_link" value="{{ old('image_link', $data->image_link ?? '') }}" placeholder="Image Link" />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Text Link</label>
                                    <input type="text" class="form-control" name="text_link" value="{{ old('text_link', $data->text_link ?? '') }}" placeholder="Text Link" />
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Ad link Randomizing time </label>
                                    <input type="text" class="form-control" name="ad_link" value="{{ old('ad_link', $data->ad_link ?? '') }}" placeholder="Ad link Randomizing time" />
                                </div>

                                <div class="mb-3 form-check-box terms-check-box">
                                    <div class="form-group-flex">
                                        <label class="custom_check">
                                            I have read and agree to Doccure’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a>
                                            <input type="checkbox" name="Terms" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">Add Ad Link Now</button>
                                </div>
                                <div class="mb-3 back-btn-light">
                                    <button class="btn btn-light w-100" type="submit">Common Link</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
