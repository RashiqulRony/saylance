@extends('layouts.web')

@section('_css')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
@endsection

@section('content')
    <div class="login-content-info mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="ag-format-container">
                        <div class="ag-courses_box">
                            <div class="ag-courses_item shadow">
                                <a href="{{ route('admin.links') }}" class="ag-courses-item_link">
                                    <div class="ag-courses-item_bg"></div>

                                    <div class="ag-courses-item_title">
                                        Add Links
                                    </div>

                                    <div class="ag-courses-item_date-box">
                                       <span class="ag-courses-item_date">
                                           {{ $adminLink }}
                                       </span>
                                    </div>
                                </a>
                            </div>

                            <div class="ag-courses_item shadow">
                                <a href="{{ route('admin.users') }}" class="ag-courses-item_link">
                                    <div class="ag-courses-item_bg"></div>

                                    <div class="ag-courses-item_title">
                                        Users
                                    </div>

                                    <div class="ag-courses-item_date-box">
                                        <span class="ag-courses-item_date">
                                           {{ $totalUser }}
                                       </span>
                                    </div>
                                </a>
                            </div>

                            <div class="ag-courses_item shadow">
                                <a href="{{ route('admin.budgets') }}" class="ag-courses-item_link">
                                    <div class="ag-courses-item_bg"></div>

                                    <div class="ag-courses-item_title">
                                        Users Budget
                                    </div>

                                    <div class="ag-courses-item_date-box">
                                        <span class="ag-courses-item_date">
                                           {{ $totalBudget }}
                                       </span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection
