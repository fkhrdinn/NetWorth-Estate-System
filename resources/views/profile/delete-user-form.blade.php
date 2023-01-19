<section>
    <header>
        <h2 class="profileText">
            {{ __('Delete Account') }}
        </h2>

        <p class="profileColor">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button type="button" class="deleteButton"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</button type="button">

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="profileDelete">Are you sure your want to delete your account?</h2>

            <p class="profileDeleteConfirm">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-3">
                <div class="input-group mb-3">
                    <span class="input-group-text w-25" id="basic-addon1">Current Password</span>
                    <input type="password" name="currentPassword" class="form-control" placeholder="Current Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="button" class="secondaryButton bg-secondary" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="deleteButton">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
