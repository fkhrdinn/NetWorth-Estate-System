@extends('admin.layouts.app')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Training Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Training Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="card-title">Training Data</h5>
                        </div>
                    </div>

                    <livewire:admin-form/>

                </div>

            </div>
            </div><!-- End Reports -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection