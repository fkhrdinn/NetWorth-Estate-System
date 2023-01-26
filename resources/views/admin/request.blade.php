@extends('admin.layouts.app')

@section('css')
<style>
  .imagePending {
    width: 150px;
    height: 104px;
    }

    .card-img-hover:hover {
    border: solid 2px #0d6efd;
    border-radius: 0.375rem;
}
</style>
@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pending Request</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Pending Request</li>
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
                            <h5 class="card-title">Pending Request</h5>
                        </div>
                    </div>

                    <livewire:request-form/>

                </div>

            </div>
            </div><!-- End Reports -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection