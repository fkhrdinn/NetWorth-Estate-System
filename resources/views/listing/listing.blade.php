<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row mb-4 text-center">
                            <div class="col-md-3">
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
                            <div class="col-md-3">
                                <a href="" class="btn btn-primary">Create Listing</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="card-img-hover btn-primary" data-bs-toggle="modal" data-bs-target="#houseDetails">
                                        <img src="{{asset('img/house1.png')}}" class="card-top rounded" alt="...">
                                    </button>
                                    <div class="card-body">
                                        <h5 class="card-title"><span class="badge bg-primary">Bungalow - Sungai Buloh</span></h5>
                                        <p class="card-text">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">1600 Sq. ft.</li>
                                                <li class="list-group-item">7 Bathroom</li>
                                                <li class="list-group-item">7 Bedroom</li>
                                                <li class="list-group-item"><span class="badge bg-secondary">RM 1,500,000.00</span></li>
                                            </ul>
                                        </p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#contact"  
                                        style="background-color:#0d6efd" onmouseover="this.style.backgroundColor='#0b5ed7'" onmouseout="this.style.backgroundColor='#0d6efd'">
                                            Contact
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house2.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house3.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house4.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house5.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house6.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house7.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house8.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{asset('img/house9.png')}}" class="card-top rounded" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary mt-4">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Details Modal -->
                        <div class="modal fade" id="contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contact Detail</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Name</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Meor Azhad bin Meor Zulkarnain" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">Telephone Number</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="0189638441" disabled>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:#6c757d" onmouseover="this.style.backgroundColor='#5c636a'" onmouseout="this.style.backgroundColor='#6c757d'">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- House Details Modal -->
                        <div class="modal fade" id="houseDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bungalow - Sungai Buloh</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Price (RM)</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="1,500,000.00" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Square ft.</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="1600" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Bathroom</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="7" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Bedroom</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="7" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Furnish</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Fully Furnished" disabled>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3" style="width:7rem">Guarded</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Yes" disabled>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:#6c757d" onmouseover="this.style.backgroundColor='#5c636a'" onmouseout="this.style.backgroundColor='#6c757d'">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
