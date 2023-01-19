<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="headerFont">
                        {{ __('Home') }}
                    </h2>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="slotBox bg-body-tertiary">
        <div class="slotSize">
            <div class="slotColor rounded shadow">
                <div class="slotText">
                    <div class="container">
                        <livewire:home-view/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
