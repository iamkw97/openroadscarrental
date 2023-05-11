@extends('app.dashboards.admin.layout.app')

@section('admintitle')
    New Car | Open Roads Car Rental
@endsection

@section('adminbody')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Cars</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">New Car</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Add New Car</h5>
                    <hr />
                    <div class="form-body mt-4">
                        <div class="border border-3 p-4 rounded">
                            <div class="row">
                                <ul class="nav nav-tabs nav-primary" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#generaltab" role="tab"
                                            aria-selected="true">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon"><i class='bx bx-food-menu font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">Genaral</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pricestab" role="tab"
                                            aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon"><i class='bx bx-dollar font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">Prices</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#attributestab" role="tab"
                                            aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon"><i class='bx bx-customize font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">Attributes</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#availability" role="tab"
                                            aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon"><i class='bx bx-calendar-check font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">Availability</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content py-3">
                                    <div class="tab-pane fade show active" id="generaltab" role="tabpanel">
                                        <div class="col-md-12">
                                            <div class="row mt-2">
                                                <div class="col-md-12 my-1">
                                                    <label for="displaying_name" class="form-label">Displaying
                                                        Name</label>
                                                    <input type="text" class="form-control" id="displaying_name"
                                                        name="displaying_name" placeholder="00.00">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12 my-1">
                                                    <label for="vehicle_description" class="form-label">Vehicle
                                                        Description</label>
                                                    <textarea class="form-control" id="vehicle_description" name="vehicle_description" placeholder="00.00">
                                                        </textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4 my-1">
                                                    <label for="vehicle_id" class="form-label">Vehicle ID</label>
                                                    <input type="text" class="form-control" id="vehicle_id"
                                                        name="vehicle_id" placeholder="00.00">
                                                </div>
                                                <div class="col-md-4 my-1">
                                                    <label for="category" class="form-label">Vehicle Category</label>
                                                    <input type="text" class="form-control" id="category"
                                                        name="category" placeholder="00.00">
                                                </div>
                                                <div class="col-md-4 my-1">
                                                    <label for="vehicle_make" class="form-label">Vehicle Make</label>
                                                    <input type="text" class="form-control" id="vehicle_make"
                                                        name="vehicle_make" placeholder="00.00">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4 my-1">
                                                    <label for="vehicle_model" class="form-label">Vehicle
                                                        Model</label>
                                                    <input type="text" class="form-control" id="vehicle_model"
                                                        name="vehicle_model" placeholder="00.00">
                                                </div>
                                                <div class="col-md-4 my-1">
                                                    <label for="no_of_seats" class="form-label">Number of
                                                        Seats</label>
                                                    <select type="text" class="form-control" id="no_of_seats"
                                                        name="no_of_seats">
                                                        <option value="8">8</option>
                                                        <option value="7">7</option>
                                                        <option value="6">6</option>
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 my-1">
                                                    <label for="no_of_suitcases" class="form-label">Number of
                                                        Suitcases</label>
                                                    <input type="number" class="form-control" id="no_of_suitcases"
                                                        name="no_of_suitcases" placeholder="00.00">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4 my-1">
                                                    <label for="gear_box_type" class="form-label">Gear Box</label>
                                                    <input type="text" class="form-control" id="gear_box_type"
                                                        name="gear_box_type" placeholder="00.00">
                                                </div>
                                                <div class="col-md-4 my-1">
                                                    <label for="fuel_state" class="form-label">Fuel State</label>
                                                    <input type="text" class="form-control" id="fuel_state"
                                                        name="fuel_state" placeholder="00.00">
                                                </div>
                                                <div class="col-md-4 my-1">
                                                    <label for="drivers_age" class="form-label">Drivers Age</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control"
                                                                id="drivers_age_min" name="drivers_age_min"
                                                                placeholder="Min">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control"
                                                                id="drivers_age_max" name="drivers_age_max"
                                                                placeholder="Max">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6 my-1">
                                                    <label for="default_pickup_return_time" class="form-label">Default
                                                        Pickup Return Time</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="time" class="form-control"
                                                                id="default_pickup_time" name="default_pickup_time"
                                                                placeholder="Default Pickup Time">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="time" class="form-control"
                                                                id="default_return_time" name="default_return_time"
                                                                placeholder="Default Return Time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 my-1">
                                                    <label for="locations" class="form-label">Locations</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="location_kef_airport">
                                                            <label class="form-check-label" for="location_kef_airport">
                                                                KEF Airport
                                                            </label>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="location_eykjavik">
                                                            <label class="form-check-label" for="location_eykjavik">
                                                                Reykjavik
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pricestab" role="tabpanel">
                                        <p>Net Prices</p>
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Value</th>
                                                    <th scope="col">Tax</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Larry the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="attributestab" role="tabpanel">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy
                                            irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi
                                            whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk
                                            vice blog. Scenester cred you probably haven't heard of them, vinyl craft
                                            beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                    </div>
                                    <div class="tab-pane fade" id="availability" role="tabpanel">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy
                                            irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi
                                            whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk
                                            vice blog. Scenester cred you probably haven't heard of them, vinyl craft
                                            beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                    </div>
                                    <hr>
                                    <button class="btn btn-primary">aa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>


    </div>
    </div>
    <!--end page wrapper -->
@endsection
