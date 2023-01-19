<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="headerFont">
                        {{ __('Profile') }}
                    </h2>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="slotBox bg-body-tertiary">
        <div class="profileProfile">
            <div class="profileBase rounded shadow mb-3">
                <div class="w-100">
                    @include('profile.update-profile-information-form')
                </div>
            </div>

            <div class="profileBase rounded shadow mb-3">
                <div class="w-100">
                    @include('profile.update-password-form')
                </div>
            </div>

            <div class="profileBase rounded shadow mb-3">
                <div class="w-100">
                    @include('profile.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
