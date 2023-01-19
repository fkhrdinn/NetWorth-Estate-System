<x-app-layout>
<x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="headerFont">
                        {{ __('List / ') }} @if($model) Update @else Create @endif
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
                        <div class="mb-4 text-center">
                            @if(!empty($model))
                                @livewire('listing-form', ['model' => $model])
                            @else
                                @livewire('listing-form')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
