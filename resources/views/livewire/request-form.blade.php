<div>
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Requestor</th>
                <th scope="col">Location</th>
                <th scope="col">Price</th>
                <th scope="col">Square Feet</th>
                <th scope="col">House Type</th>
                <th scope="col">Guarded</th>
                <th scope="col">Furnish Type</th>
                <th scope="col">Origin</th>
                <th scope="col">Request Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($lists as $list)
                <tr>
                    <td>{{$num++}}</td>
                    <td>
                        <a type="button" class="card-img-hover btn-primary" data-bs-toggle="modal" data-bs-target="#pending{{$list->id}}">
                            <img src="{{$list->getFirstMediaUrl('listing_image')}}" class="img-thumbnail card-img-hover rounded imagePending" alt="...">
                        </a>
                    </td>
                    <td><a type="button" class="card-img-hover btn-primary" data-bs-toggle="modal" data-bs-target="#contact{{$list->id}}"><i class="bi bi-plus-circle"></i></a>{{$list->user->name}}</td>
                    <td>{{$list->location}}</td>
                    <td>RM {{number_format($list->price, 2)}}</td>
                    <td>{{$list->square_feet}}</td>
                    <td>{{$list->house_type}}</td>
                    <td>{{$list->guarded}}</td>
                    <td>{{$list->furnish_type}}</td>
                    <td>{{$list->origin}}</td>
                    <td>{{$list->request_date}}</td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{$list->id}}">Edit</button></td>
                </tr>
                
                <div class="modal fade" id="pending{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">House Image</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <img src="{{$list->getFirstMediaUrl('listing_image')}}" class="img-thumbnail rounded" alt="...">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="contact{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Requestor Detail</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3" style="width:7rem">Name</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$list->user->name}}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3" style="width:7rem">Email</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$list->user->email}}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3" style="width:7rem">IC</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$list->user->identification_number}}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3" style="width:7rem">Telephone</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$list->user->telephone_number}}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3" style="width:7rem">Address</span>
                                <textarea disabled class="form-control" id="floatingTextarea" style="resize:none;">{{$list->user->address}}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="edit{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Status</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3" style="width:7rem">Status</span>
                                <select class="form-select" aria-label="Default select example" wire:model.debounce.500ms="status">
                                    <option value="Accepted" >Accepted</option>
                                    <option value="Processed">Processed</option>
                                    <option value="Rejected" >Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" wire:click.prevent="update({{$list->id}})">Save</button>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </tbody>
    </table>
</div>
