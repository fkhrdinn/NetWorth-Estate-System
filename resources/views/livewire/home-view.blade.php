<div>
    <div class="row mb-4 text-center">
        <div class="col-md-3">
            <select class="form-select " aria-label="Default select example" wire:model.debounce.500ms="categories">
                <option value="null" selected>Filter by Categories</option>
                <option value="Terrace">Terrace</option>
                <option value="Bungalow">Bungalow</option>
                <option value="Semi-D">Semi-D</option>
                <option value="Townhouse">Townhouse</option>
                <option value="Apartment">Apartment</option>
                <option value="Condominium">Condominium</option>
                <option value="Penthouse">Penthouse</option>
                <option value="Studio">Studio</option>
            </select>
        </div>
        <div class="col-md-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon1" wire:model.debounce.500ms="search">
            </div>

        </div>
        <div class="col-md-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-x-circle"></i></span>
                <input type="button" class="form-control btn btn-danger" value="Reset" aria-label="Search" aria-describedby="basic-addon1" wire:click.prevent="resetState">
            </div>
        </div>
        <div class="col-md-2">
            <a href="{{route('listing.create')}}" class="btn btn-primary">Create Listing</a>
        </div>
    </div>
    <div class="row">
        @foreach($model as $m)
        <div class="col-md-4">
            <div class="card mb-4">
                <!-- Button trigger modal -->
                <a type="button" class="card-img-hover btn-primary" data-bs-toggle="modal" data-bs-target="#houseDetails{{$m->id}}">
                    <img src="{{$m->getFirstMediaUrl('listing_image')}}" class="card-top rounded" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><span class="badge bg-primary">{{$m->house_type}} - {{$m->location}}</span></h5>
                    <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$m->square_feet}} Sq. ft.</li>
                            <li class="list-group-item">{{$m->bathroom}} Bathroom</li>
                            <li class="list-group-item">{{$m->bedroom}} Bedroom</li>
                            <li class="list-group-item"><span class="badge bg-secondary">RM {{number_format($m->price)}}</span></li>
                        </ul>
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#contact{{$m->id}}" >
                        Contact
                    </button>
                </div>
            </div>
        </div>
        <!-- Contact Details Modal -->
        <div class="modal fade" id="contact{{$m->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contact Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Name</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->user->name}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Telephone Number</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->user->telephone_number}}" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <!-- House Details Modal -->
        <div class="modal fade" id="houseDetails{{$m->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$m->house_type}} - {{$m->location}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Price (RM)</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{number_format($m->price)}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Square ft.</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->square_feet}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Bathroom</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->bathroom}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Bedroom</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->bedroom}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Furnish</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->furnish_type}}" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Guarded</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->guarded}}" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>  
</div>
