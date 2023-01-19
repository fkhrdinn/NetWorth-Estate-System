<section>
    <header>
        <h2 class="profileText">
            {{ __('Profile Information') }}
        </h2>

        <p class="profileColor">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

<!--     <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> -->

    <form method="post" action="{{ route('profile.update') }}" class="profileForm">
        @csrf
        @method('patch')

        <div class="container">
            <div class="row">
                <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">Full Name</span>
                    <input type="text" name="name" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1" value="{{Auth()->user()->name}}">
                    @if($errors->has('name'))
                        <div class="text-danger">
                            Invalid Name input!
                        </div>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">Email</span>
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="{{Auth()->user()->email}}">
                    @if($errors->has('email'))
                        <div class="text-danger">
                            Invalid Email Input!
                        </div>
                    @endif
                    <!-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif -->
                </div>
                 <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">Telephone Number</span>
                    <input type="text" name="telephone" class="form-control" placeholder="Telephone Number" aria-label="Username" aria-describedby="basic-addon1" value="{{Auth()->user()->telephone_number}}">
                    @if($errors->has('telephone'))
                        <div class="text-danger">
                            Invalid Telephone Number Input!
                        </div>
                    @endif
                </div>
                <div class="input-group mb-3"> 
                    <span class="input-group-text w-25" id="basic-addon1">Address</span>
                    <textarea name="address" class="form-control" style="resize:none;">{{Auth()->user()->address}}</textarea>
                    @if($errors->has('address'))
                        <div class="text-danger">
                            Invalid Address Input!
                        </div>
                    @endif
                </div>
                <div class="input-group"> 
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        Save
                    </button>
                </div>
                
            </div>
        </div>
    </form>
</section>
