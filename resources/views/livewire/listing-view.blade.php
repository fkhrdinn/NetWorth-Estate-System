<div>
    <div class="row">
        <div class="col-md-4 mb-4">
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
        <div class="col-md-6">
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
    </div>
    <div class="row">
        @foreach($model as $m)
        <div class="col-md-4">
            <div class="card mb-4">
                <!-- Button trigger modal -->
                <img src="{{$m->getFirstMediaUrl('listing_image')}}" class="card-top rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><span class="badge bg-primary">{{$m->house_type}} - {{$m->location}}</span></h5>

                    <div class="d-flex justify-content-between">
                        <div class="col-md-4">
                            <!-- Button trigger modal -->                                      
                            <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#listDetails{{$m->id}}"  >
                                Details
                            </button>
                        </div>
                        <div class="col-md-4 mt-auto">
                            <h5><span class="badge @if($m->status == 'Accepted') bg-success @else bg-warning @endif">{{$m->status}}</span></h5>                                   
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- History Details Modal -->
        <div class="modal fade" id="listDetails{{$m->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Created At</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$m->created_at}}" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$m->id}})">Delete</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="edit({{$m->id}})">Edit</button>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
