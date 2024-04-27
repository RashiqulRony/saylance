@extends('layouts.web')

@section('_css')

@endsection

@section('content')
    <div class="login-content-info">
        <div class="container-fluid" style="width: 90%; margin: 0 auto;">
            <div class="row">
                <div class="tab-pane" id="today-appointments">
                    <div class="card card-table mb-0">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <div class="col-6">
                                <form method="get" action="{{ route('admin.users') }}">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search: Name, Email, Phone Number, Username" name="key">
                                        <div class="input-group-append">
                                            <button style="border-radius: inherit; height: 47px;" class="btn btn-outline-info" type="submit"><i class="fa fa-search"></i> Search</button>
                                            <a href="{{ route('admin.users') }}" style="border-radius: inherit; padding: 10.5px;" class="btn btn-outline-danger" type="submit"><i class="fa fa-refresh"></i> Reset</a>
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>User Name</th>
                                        <th>Location</th>
                                        <th>Join Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($users))
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone_number }}</td>
                                                <td>{{ $user->user_name }}</td>
                                                <td>{{ $user->location }}</td>
                                                <td>{{ date('d-M-Y', strtotime($user->created_at)) }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    @if($users->hasPages())
                                        <tr>
                                            <td colspan="6">{{ $users->appends(request()->input())->links('paginate') }}</td>
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
