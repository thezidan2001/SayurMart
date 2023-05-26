@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Profile -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- User Profile -->
                <div class="card user-profile">
                    <div class="card-header">
                        <h4 class="float-left mb-0 mt-2">User Profile</h4>
                        <a href="" class="btn btn-primary btn-100 float-right text-uppercase">Edit</a>
                    </div>

                    <div class="card-body pb-0 pt-0">

                    </div>


                    <div class="card-header">
                        <h5 class="float-left mb-0 mt-1 w-100 text-center">
                            <span class="text-info"> </span> <small class="text-muted font-italic">(Private)</small>
                        </h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6 text-sm-right">Name</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Job</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Company</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="card-header border-top">
                        <h5 class="float-left mb-0 mt-1">Contact</h5>
                    </div>

                    <div class="card-body">
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Phone no.</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->telephone }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Mobile no.</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->telephone }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Email</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->email }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-header border-top">
                        <h5 class="float-left mb-0 mt-1">Address</h5>
                    </div>

                    <div class="card-body">
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Country</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Town / City</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Street / Road</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Building</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Office</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Extra Details</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /User Profile -->

            </div>
        </div>
    </div>

@endsection