@extends('layouts.app-login')

@section('content')
<section class="vh-100 bg-body-secondary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Admin Sign In</h3>

            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-outline mb-4">
                    <input type="email" id="typeEmailX-2" name="email" class="form-control form-control" />
                    <label class="form-label" for="typeEmailX-2">Email</label>
                    @if($errors->has('email'))
                    <div class="text-danger">
                        Invalid email!
                    </div>
                    @endif
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" name="password" class="form-control form-control" />
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    @if($errors->has('password'))
                    <div class="text-danger">
                        Invalid password!
                    </div>
                    @endif
                </div>

                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection