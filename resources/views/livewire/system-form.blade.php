<div>
    <div class="row mb-3" x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-md-2 col-form-label">Image</label>
            <div class="col-md-10">
                <input class="form-control" type="file" wire:model.debounce.500ms="image" >
            </div>
        </div>
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>

        @if($image)
        <div class="row mb-3 mx-auto col-md-5">
            <img src="{{ $image->temporaryUrl() }}" alt="temp" class="img-thumbnail">
        </div>
        @endif
    </div>
    
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">Location</label>
        <div class="col-md-10">
            <select class="form-select" aria-label="Default select example" wire:model.debounce.500ms="location">
                <option selected>--Selangor District--</option>
                <option value="Gombak">Gombak</option>
                <option value="Hulu Langat">Hulu Langat</option>
                <option value="Hulu Selangor">Hulu Selangor</option>
                <option value="Klang">Klang</option>
                <option value="Kuala Langat">Kuala Langat</option>
                <option value="Kuala Selangor">Kuala Selangor</option>
                <option value="Petaling">Petaling</option>
                <option value="Sabak Bernam">Sabak Bernam</option>
                <option value="Sepang">Sepang</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">House Type</label>
        <div class="col-md-10">
            <select class="form-select" aria-label="Default select example" wire:model.debounce.500ms="houseType">
                <option selected>--House Type--</option>
                <option value="Bungalow">Bungalow</option>
                <option value="Semi-D">Semi-D</option>
                <option value="Terrace">Terrace</option>
                <option value="TownHouse">TownHouse</option>
                <option value="Apartment">Apartment</option>
                <option value="Condominium">Condominium</option>
                <option value="Penthouse">Penthouse</option>
                <option value="Studio">Studio</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">Square Feet</label>
        <div class="col-md-10">
            <input class="form-control" type="number" wire:model.debounce.500ms="squareFeet">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">Guarded</label>
        <div class="col-md-10">
            <select class="form-select" aria-label="Default select example" wire:model.debounce.500ms="guarded">
                <option selected>--Guard Type--</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">Bathroom</label>
        <div class="col-md-10">
            <input class="form-control" type="number" wire:model.debounce.500ms="bathroom">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">Bedroom</label>
        <div class="col-md-10">
            <input class="form-control" type="number" wire:model.debounce.500ms="bedroom">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-md-2 col-form-label">Furnish Type</label>
        <div class="col-md-10">
            <select class="form-select" aria-label="Default select example" wire:model.debounce.500ms="furnishType">
                <option selected>--Furnish Type--</option>
                <option value="Fully Furnished">Fully Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Not Furnished">Not Furnished</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="d-flex justify-content-end">
            <input wire:click.prevent="create" type="submit" class="btn btn-primary" value="Predict Price">
        </div>
    </div>
</div>