@extends('layouts.web')

@section('_css')

@endsection

@section('content')
    <div class="login-content-info">
        <div class="container-fluid" style="width: 90%; margin: 0 auto;">
            <div class="row">
                <div class="tab-pane" id="today-appointments">
                    <div class="card card-table mb-0">
                        <div class="card-header">Budgets</div>
                        <div class="card-body">
                            <div class="col-6">
                                <form method="get" action="{{ route('admin.budgets') }}">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search: Name, Email, Budget, Description" name="key">
                                        <div class="input-group-append">
                                            <button style="border-radius: inherit; height: 47px;" class="btn btn-outline-info" type="submit"><i class="fa fa-search"></i> Search</button>
                                            <a href="{{ route('admin.budgets') }}" style="border-radius: inherit; padding: 10.5px;" class="btn btn-outline-danger" type="submit"><i class="fa fa-refresh"></i> Reset</a>
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
                                        <th>Budget</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($budgets))
                                        @foreach($budgets as $budget)
                                            <tr>
                                                <td>{{ $budget->name }}</td>
                                                <td>{{ $budget->email }}</td>
                                                <td>{{ $budget->budget }}</td>
                                                <td>{{ $budget->description }}</td>
                                                <td>{{ date('d-M-Y', strtotime($budget->created_at)) }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    @if($budgets->hasPages())
                                        <tr>
                                            <td colspan="6">{{ $budgets->appends(request()->input())->links('paginate') }}</td>
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
