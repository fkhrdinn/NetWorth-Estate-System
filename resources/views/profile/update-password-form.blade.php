<section>
    <header>
        <h2 class="profileText">
            {{ __('Update Password') }}
        </h2>

        <p class="profileColor">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="profileForm">
        @csrf
        @method('put')

        <div class="container">
            <div class="row">
                @if($errors->has('updatePassword'))
                    <div class="text-danger">
                        Wrong Current Password!
                    </div>
                @endif
                <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">Current Password</span>
                    <input type="password" name="updatePassword" class="form-control" placeholder="Current Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                
                @if($errors->has('new_password'))
                    <div class="text-danger">
                        Invalid New Password!
                    </div>
                @endif
                <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">New Password</span>
                    <input type="password" name="new_password" class="form-control" placeholder="New Password" aria-label="Username" aria-describedby="basic-addon1">
                   
                </div>
                @if($errors->has('password'))
                    <div class="text-danger">
                        Confirm Password Not Match!
                    </div>
                @endif
                <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">Confirm Password</span>
                    <input type="password" name="password" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                    
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
