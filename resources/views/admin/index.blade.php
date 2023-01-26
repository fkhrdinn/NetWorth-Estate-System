@extends('admin.layouts.app')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Pending Request</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$pending}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Accepted Listing</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-card-list"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$accepted}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Active Users</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                            <div class="ps-3">
                                <h6>{{$user}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Bungalow</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($bungalow, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Bungalow -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Studio</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($studio, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Studio -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Terrace</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($terrace, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Terrace -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Semi-D</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($semi, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Semi-D -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Townhouse</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($townhouse, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Townhouse -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Penthouse</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($penthouse, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Penthouse -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Condominium</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($condo, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Condominium -->

                <div class="col-xxl-3 col-xl-12">

                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Average Price Apartment</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            <div class="ps-3">
                                <h6>RM {{number_format($apartment, 2)}}</h6>
                            </div>
                        </div>

                        </div>
                    </div>

                </div><!-- End Apartment -->

            </div>

        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection