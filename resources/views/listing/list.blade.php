<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listing List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <select class="form-select " aria-label="Default select example">
                                    <option selected>Filter by Categories</option>
                                    <option value="1">Terrace</option>
                                    <option value="2">Bungalow</option>
                                    <option value="3">Semi-D</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <!-- Button trigger modal -->
                                    <img src="{{asset('img/house9.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><span class="badge bg-primary">Bungalow - Sungai Buloh</span></h5>

                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-4">
                                                <!-- Button trigger modal -->                                      
                                                <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#listDetails"  
                                                    style="background-color:#0d6efd" onmouseover="this.style.backgroundColor='#0b5ed7'" onmouseout="this.style.backgroundColor='#0d6efd'">
                                                    Details
                                                </button>
                                            </div>
                                            <div class="col-md-4 mt-auto">
                                                <h5><span class="badge bg-success">Accepted</span></h5>                                   
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <!-- Button trigger modal -->
                                    <img src="{{asset('img/house9.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><span class="badge bg-primary">Bungalow - Sungai Buloh</span></h5>

                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-4">
                                                <!-- Button trigger modal -->                                      
                                                <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#listDetails"  
                                                    style="background-color:#0d6efd" onmouseover="this.style.backgroundColor='#0b5ed7'" onmouseout="this.style.backgroundColor='#0d6efd'">
                                                    Details
                                                </button>
                                            </div>
                                            <div class="col-md-4 mt-auto">
                                                <h5><span class="badge bg-warning">Processed</span></h5>                                   
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <!-- Button trigger modal -->
                                    <img src="{{asset('img/house9.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><span class="badge bg-primary">Bungalow - Sungai Buloh</span></h5>

                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-4">
                                                <!-- Button trigger modal -->                                      
                                                <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#listDetails"  
                                                    style="background-color:#0d6efd" onmouseover="this.style.backgroundColor='#0b5ed7'" onmouseout="this.style.backgroundColor='#0d6efd'">
                                                    Details
                                                </button>
                                            </div>
                                            <div class="col-md-4 mt-auto">
                                                <h5><span class="badge bg-danger">Rejected</span></h5>                                   
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- History Details Modal -->
                    <div class="modal fade" id="listDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bungalow - Sungai Buloh</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Price (RM)</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="1,500,000.00">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Square ft.</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="1600">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Bathroom</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="7">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Bedroom</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="7">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Furnish</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Fully Furnished">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Guarded</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Yes">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Created At</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="2023-01-04" disabled>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:#6c757d" onmouseover="this.style.backgroundColor='#5c636a'" onmouseout="this.style.backgroundColor='#6c757d'">Close</button>
                                    <button type="button" class="btn btn-danger" style="background-color:#dc3545" onmouseover="this.style.backgroundColor='#95202C'" onmouseout="this.style.backgroundColor='#dc3545'">Delete</button>
                                    <button type="button" class="btn btn-primary" style="background-color:#0d6efd" onmouseover="this.style.backgroundColor='#0b5ed7'" onmouseout="this.style.backgroundColor='#0d6efd'">Update</button>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
