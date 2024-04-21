@extends('layouts.web')

@section('content')
    <div class="login-content-info">
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
                                <h3>Welcome to Input Ad Link</h3>
                                <p class="mb-0">Welcome back! Please enter your details.</p>
                            </div>
                            <form action="{{ route('user.linkStore') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2">Input Ad Link</label>
                                    <input type="text" class="form-control" name="link" value="{{ $data ? $data->link : '' }}" required placeholder="Enter Your Link" />
                                </div>

                                <div class="mb-3 form-check-box terms-check-box">
                                    <div class="form-group-flex">
                                        <label class="custom_check">
                                            I have read and agree to Doccure’s <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a>
                                            <input type="checkbox" required name="Terms" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">{{ request()->update ? 'Update Link' : 'Add Link' }}</button>
                                </div>

                                <div class="mb-3 back-btn-light">
                                    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-light w-100" type="submit">Logout an Account</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="width: 90%; margin: 0 auto;">
            <div class="row">
                <div class="tab-pane" id="today-appointments">
                    <div class="card card-table mb-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($links) > 0)
                                        @foreach($links as $link)
                                            @php
                                                if (substr($link->link, 0, 7) == "http://") {
                                                   $url = $link->link;
                                                }elseif (substr($link->link, 0, 8) == "https://") {
                                                   $url = $link->link;
                                                }elseif (substr($link->link, 0, 4) == "www.") {
                                                   $url = "http://$link->link";
                                                } else {
                                                   $url = "http://$link->link";
                                                }
                                            @endphp
                                        <tr>
                                            <td>{{ $link->user->name }}</td>
                                            <td><a href="{{ $url }}" target="_blank">{{ $link->link }}</a></td>
                                            <td>{{ date('d M, Y', strtotime($link->created_at)) }}</td>
                                            <td>
                                                <div class="table-action">
                                                    <a href="{{ route('user.home') }}?update={{ $link->id }}" class="btn btn-sm bg-info-light"> <i class="far fa-eye"></i> Edit </a>
                                                    <a href="{{ route('user.linkDelete', $link->id) }}" onclick="return confirm('Are you sure...')" class="btn btn-sm bg-danger-light"> <i class="fas fa-times"></i> Delete </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" align="center" class="text-danger">Data not found</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
