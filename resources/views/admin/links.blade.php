@extends('layouts.web')

@section('_css')

@endsection

@section('content')
    <div class="login-content-info">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="account-content">
                        <div class="account-info">
                            <div class="login-title">
                                <h3>Add Your Link</h3>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                            <form action="{{ $data ?  route('admin.linkUpdate', $data->id) : route('admin.linkStore') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-2">Input Ad Link</label>
                                    <input type="text" class="form-control" name="link" value="{{ $data ? $data->ad_link : '' }}" placeholder="Enter Your Link" />
                                    @error('link')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button class="btn w-100" type="submit">{{ $data ? 'Update Link' : 'Add Link' }}</button>
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
                                        <th>Link</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($links) > 0)
                                        @foreach($links as $link)
                                            <tr>
                                                <td>{{ $link->ad_link }}</td>
                                                <td>{{ date('d-M-Y', strtotime($link->created_at)) }}</td>
                                                <td>
                                                    <div class="table-action">
                                                        <a href="{{ route('admin.linkEdit', $link->id) }}" class="btn btn-sm bg-info-light"> <i class="far fa-eye"></i> Edit </a>
                                                        <a href="{{ route('admin.linkDelete', $link->id) }}" onclick="return confirm('Are you sure...')" class="btn btn-sm bg-danger-light"> <i class="fas fa-times"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
