@extends('layouts.app-login')

@section('content')
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('img/registerlogo.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form method="POST" action="{{route('register')}}">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="name"/>
                        <label class="form-label" for="form3Example1">Full Name</label>
                        @if($errors->has('name'))
                        <div class="text-danger">
                            Invalid name input!
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" name="email"/>
                        <label class="form-label" for="form3Example3">Email Address</label>
                        @if($errors->has('email'))
                        <div class="text-danger">
                            Invalid email!
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example4" class="form-control" name="ic"/>
                        <label class="form-label" for="form3Example4">Identification Number</label>
                        @if($errors->has('ic'))
                        <div class="text-danger">
                            Invalid identification number!
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example5" class="form-control" name="number" autocomplete="off"/>
                        <label class="form-label" for="form3Example5">Telephone Number</label>
                        @if($errors->has('number'))
                        <div class="text-danger">
                            Invalid number!
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example6" class="form-control" name="password" />
                        <label class="form-label" for="form3Example6">Password</label>
                        @if($errors->has('password'))
                        <div class="text-danger">
                            Invalid password!
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-outline mb-4 form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="resize:none;" name="address"></textarea>
                        <label for="floatingTextarea">Address</label>
                    </div>
                </div>
            </div>       

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection