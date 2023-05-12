@extends('app.dashboards.admin.layout.app')

@section('admintitle')
    New Car | Open Roads Car Rental
@endsection

@section('adminbody')
    {{-- preview and remove vehicle images --}}
    <style>
        .preview-square {
            display: inline-block;
            margin: 10px;
            position: relative;
        }

        .preview-image {
            width: 100px;
            height: 100px;
        }

        .remove-icon {
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 20px;
            color: red;
            cursor: pointer;
        }
    </style>
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
                        <button type="button" class="btn btn-primary"><i class='bx bx-plus-medical'></i></button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">All Cars</a>
                            <a class="dropdown-item" href="javascript:;">Attributes</a>
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#displaytab" role="tab"
                                            aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon"><i class='bx bx-camera font-18 me-1'></i>
                                                </div>
                                                <div class="tab-title">Display</div>
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
                                                {{-- <div class="col-md-4 my-1">
                                                    <label for="vehicle_id" class="form-label">Vehicle ID</label>
                                                    <input type="text" class="form-control" id="vehicle_id"
                                                        name="vehicle_id" placeholder="00.00">
                                                </div> --}}
                                                <div class="col-md-6 my-1">
                                                    <label for="category" class="form-label">Vehicle Category</label>
                                                    <input type="text" class="form-control" id="category"
                                                        name="category" placeholder="00.00">
                                                </div>
                                                <div class="col-md-6 my-1">
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
                                    <div class="tab-pane fade" id="displaytab" role="tabpanel">
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
                                                <div class="col-md-12 my-1">
                                                    <label for="vehicle_image" class="form-label">Vehicle Image</label>
                                                    <input id="vehicle_image" name="vehicle_image[]" type="file"
                                                        accept="image/*" multiple data-max_length="20">
                                                </div>
                                                <div id="vehicle_preview"></div>
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
                                                    <td>Initial</td>
                                                    <td>Initial, fixed fee added to the booking.</td>
                                                    <td>
                                                        <input type="number" class="form-control" id="cost_initial"
                                                            name="cost_initial" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="tax_initial"
                                                            name="tax_initial">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rental per Day</td>
                                                    <td>Price for a car rent per day.
                                                        This price applies for "Daily" and "Daily and Hourly" billing type
                                                        only.</td>
                                                    <td>
                                                        <input type="number" class="form-control"
                                                            id="cost_rental_per_day" name="cost_rental_per_day"
                                                            placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select"
                                                            id="tax_rental_per_day" name="tax_rental_per_day">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rental per Hour</td>
                                                    <td>Price for a car rent per hour.
                                                        This price applies for "Hourly" and "Daily and Hourly" billing type
                                                        only.</td>
                                                    <td>
                                                        <input type="number" class="form-control"
                                                            id="cost_rental_per_hour" name="cost_rental_per_hour"
                                                            placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select"
                                                            id="tax_rental_per_hour" name="tax_rental_per_hour">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Delivery</td>
                                                    <td>Price per distance (mile/kilometer) for delivery a vehicle from
                                                        company (base location) to customer (custom) pickup location.</td>
                                                    <td>
                                                        <input type="number" class="form-control" id="cost_delivery"
                                                            name="cost_delivery" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="tax_delivery"
                                                            name="tax_delivery">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Delivery (return)</td>
                                                    <td>Price per distance (mile/kilometer) for delivery vehicle from
                                                        customer (custom) return location to company (base location).</td>
                                                    <td>
                                                        <input type="number" class="form-control"
                                                            id="cost_delivery_return" name="cost_delivery_return"
                                                            placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select"
                                                            id="tax_delivery_return" name="tax_delivery_return">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Security deposit</td>
                                                    <td>Fixed value added to the booking.
                                                        This amount protects the owner against costs related to vehicle
                                                        damage. Should be returned to the customer, if vehicle has no signs
                                                        of damage.</td>
                                                    <td>
                                                        <input type="number" class="form-control" id="cost_security"
                                                            name="cost_security" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="tax_security"
                                                            name="tax_security">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>One way</td>
                                                    <td>Fixed value added to the booking if car is returned to different
                                                        location than pickup location.</td>
                                                    <td>
                                                        <input type="number" class="form-control" id="cost_oneway"
                                                            name="cost_oneway" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="tax_oneway"
                                                            name="tax_oneway">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pickup after business hours</td>
                                                    <td>Fixed value added to the booking, if vehicle will be pickup after
                                                        business hours.</td>
                                                    <td>
                                                        <input type="number" class="form-control" id="cost_late_pickup"
                                                            name="cost_late_pickup" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="tax_late_pickup"
                                                            name="tax_late_pickup">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Return after business hours</td>
                                                    <td>Fixed value added to the booking, if vehicle has been returned after
                                                        business hours.</td>
                                                    <td>
                                                        <input type="number" class="form-control" id="cost_late_return"
                                                            name="cost_late_return" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="tax_late_return"
                                                            name="tax_late_return">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Customer pickup location fee</td>
                                                    <td>Fixed value added to the booking, if customer enter (type) own
                                                        pickup location.</td>
                                                    <td>
                                                        <input type="number" class="form-control"
                                                            id="cost_customer_pickup_fee" name="cost_customer_pickup_fee"
                                                            placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select"
                                                            id="tax_customer_pickup_fee" name="tax_customer_pickup_fee">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Customer return location fee</td>
                                                    <td>Fixed value added to the booking, if customer enter (type) own
                                                        return location.</td>
                                                    <td>
                                                        <input type="number" class="form-control"
                                                            id="cost_customer_return_fee" name="cost_customer_return_fee"
                                                            placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select"
                                                            id="tax_customer_return_fee" name="tax_customer_return_fee">
                                                            <option value="no" selected>- Not set -</option>
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="8">8%</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="attributestab" role="tabpanel">
                                        <p>Specify attributes of the vehicle.</p>
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="col-8" scope="col">Attribute</th>
                                                    <th class="col-4" scope="col">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Free GPS
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="free_gps"
                                                            name="free_gps">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Mileage
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="mileage"
                                                            name="mileage">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="unlimited">Unlimited</option>
                                                            <option value="600km">600km per Rental</option>
                                                            <option value="750km">750km per Rental</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        WD
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="wd"
                                                            name="wd">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="4">4</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Air Conditioning
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="air_conditioning"
                                                            name="air_conditioning">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Fuel Policy
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="fuel_policy"
                                                            name="fuel_policy">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="full_to_full">Full to Full</option>
                                                            <option value="full_to_empty">full to Empty</option>
                                                            <option value="partial_refund">Partial Refund</option>
                                                            <option value="free_tank">Free Tank</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Fuel Type
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="fuel_type"
                                                            name="fuel_type">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="petrol">Petrol</option>
                                                            <option value="diesel">Diesel</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Engine
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="engine"
                                                            name="engine">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Doors Number
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="doors_number"
                                                            name="doors_number">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Transmission
                                                    </td>
                                                    <td>
                                                        <select type="number" class="form-select" id="transmission"
                                                            name="transmission">
                                                            <option value="notset" selected>- Not set -</option>
                                                            <option value="manual">Manual</option>
                                                            <option value="automatic">Automatic</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Extras
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-lg col-md-6 ">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="notset" id="notset" name="notset">
                                                            <label class="form-check-label" for="notset">
                                                                Not set
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="alloy_wheels" id="alloy_wheels"
                                                                name="alloy_wheels">
                                                            <label class="form-check-label" for="alloy_wheels">
                                                                Alloy Wheels
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="blutooth" id="blutooth" name="blutooth">
                                                            <label class="form-check-label" for="blutooth">
                                                                Blutooth
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="damage_waiver" id="damage_waiver"
                                                                name="damage_waiver">
                                                            <label class="form-check-label" for="blutooth">
                                                                Damage Waiver
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="free_cancellation" id="free_cancellation"
                                                                name="free_cancellation">
                                                            <label class="form-check-label" for="blutooth">
                                                                Free Cancellation
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="sunroof" id="sunroof" name="sunroof">
                                                            <label class="form-check-label" for="blutooth">
                                                                Sunroof
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="radio" id="radio" name="radio">
                                                            <label class="form-check-label" for="blutooth">
                                                                Radio
                                                            </label>
                                                        </div>
                                                        &nbsp;&nbsp;
                                                        <div class="form-check form-check-lg col-md-6">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="no_deposit" id="no_deposit" name="no_deposit">
                                                            <label class="form-check-label" for="blutooth">
                                                                No Deposit
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="availability" role="tabpanel">
                                        <p>Specify dates when vehicle is not available.</p>
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">End Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="date" class="form-control"
                                                            id="avalable_start_date" name="avalable_start_date"
                                                            placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <input type="date" class="form-control" id="avalable_end_date"
                                                            name="avalable_end_date" placeholder="0.00">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <hr>
                                    <div style="float: right;">
                                        <button id="btn_submit_car" name="btn_submit_car"
                                            class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
    <script>
        // preview & remove vehicle images----------------------------------------------
        function previewImages() {
            var previewContainer = document.getElementById("vehicle_preview");
            previewContainer.innerHTML = "";

            var files = document.getElementById("vehicle_image").files;

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(event) {
                    var imgElement = document.createElement("img");
                    imgElement.className = "preview-image";
                    imgElement.src = event.target.result;

                    var removeIcon = document.createElement("i");
                    removeIcon.className = "remove-icon";
                    removeIcon.setAttribute("data-index", i);
                    removeIcon.addEventListener("click", function(event) {
                        var index = event.target.getAttribute("data-index");
                        removeImage(index);
                    });

                    var previewSquare = document.createElement("div");
                    previewSquare.className = "preview-square";
                    previewSquare.appendChild(imgElement);
                    previewSquare.appendChild(removeIcon);

                    previewContainer.appendChild(previewSquare);
                };

                reader.readAsDataURL(file);
            }
        }

        function removeImage(index) {
            var filesInput = document.getElementById("vehicle_image");
            var files = Array.from(filesInput.files);
            files.splice(index, 1);
            filesInput.files = new FileListArray(files);
            previewImages();
        }

        document.getElementById("vehicle_image").addEventListener("change", previewImages);

        //store vehicle info----------------------------------------------
        $(document).ready(function() {
            $('#btn_submit_car').click(function(e) {
                e.preventDefault();

                var vehicle_images = $('input[name="vehicle_image[]"]').prop('files');

                var formData = new FormData();
                formData.append('category', $('#category').val());
                formData.append('vehicle_make', $('#vehicle_make').val());
                formData.append('vehicle_model', $('#vehicle_model').val());
                formData.append('no_of_seats', $('#no_of_seats').val());
                formData.append('no_of_suitcases', $('#no_of_suitcases').val());
                formData.append('gear_box_type', $('#gear_box_type').val());
                formData.append('fuel_state', $('#fuel_state').val());
                formData.append('drivers_age_min', $('#drivers_age_min').val());
                formData.append('drivers_age_max', $('#drivers_age_max').val());
                formData.append('default_pickup_time', $('#default_pickup_time').val());
                formData.append('default_return_time', $('#default_return_time').val());
                formData.append('location_kef_airport', $('#location_kef_airport').prop('checked'));
                formData.append('location_eykjavik', $('#location_eykjavik').prop('checked'));

                formData.append('displaying_name', $('#displaying_name').val());
                formData.append('vehicle_description', $('#vehicle_description').val());

                $.each(vehicle_images, function(i, file) {
                    formData.append('vehicle_image[]', file);
                });

                formData.append('cost_initial', $('#cost_initial').val());
                formData.append('tax_initial', $('#tax_initial').val());
                formData.append('cost_rental_per_day', $('#cost_rental_per_day').val());
                formData.append('tax_rental_per_day', $('#tax_rental_per_day').val());
                formData.append('cost_rental_per_hour', $('#cost_rental_per_hour').val());
                formData.append('tax_rental_per_hour', $('#tax_rental_per_hour').val());
                formData.append('cost_delivery', $('#cost_delivery').val());
                formData.append('tax_delivery', $('#tax_delivery').val());
                formData.append('cost_delivery_return', $('#cost_delivery_return').val());
                formData.append('tax_delivery_return', $('#tax_delivery_return').val());
                formData.append('cost_security', $('#cost_security').val());
                formData.append('tax_security', $('#tax_security').val());
                formData.append('cost_oneway', $('#cost_oneway').val());
                formData.append('tax_oneway', $('#tax_oneway').val());
                formData.append('cost_late_pickup', $('#cost_late_pickup').val());
                formData.append('tax_late_pickup', $('#tax_late_pickup').val());
                formData.append('cost_late_return', $('#cost_late_return').val());
                formData.append('tax_late_return', $('#tax_late_return').val());
                formData.append('cost_customer_pickup_fee', $('#cost_customer_pickup_fee').val());
                formData.append('tax_customer_pickup_fee', $('#tax_customer_pickup_fee').val());
                formData.append('cost_customer_return_fee', $('#cost_customer_return_fee').val());
                formData.append('tax_customer_return_fee', $('#tax_customer_return_fee').val());

                formData.append('free_gps', $('#free_gps').val());
                formData.append('mileage', $('#mileage').val());
                formData.append('wd', $('#wd').val());
                formData.append('air_conditioning', $('#air_conditioning').val());
                formData.append('fuel_policy', $('#fuel_policy').val());
                formData.append('fuel_type', $('#fuel_type').val());
                formData.append('engine', $('#engine').val());
                formData.append('doors_number', $('#doors_number').val());
                formData.append('transmission', $('#transmission').val());
                formData.append('extras_notset', $('#notset').prop('checked'));
                formData.append('extras_alloy_wheels', $('#alloy_wheels').prop('checked'));
                formData.append('extras_blutooth', $('#blutooth').prop('checked'));
                formData.append('extras_damage_waiver', $('#damage_waiver').prop('checked'));
                formData.append('extras_free_cancellation', $('#free_cancellation').prop('checked'));
                formData.append('extras_sunroof', $('#sunroof').prop('checked'));
                formData.append('extras_radio', $('#radio').prop('checked'));
                formData.append('extras_no_deposit', $('#no_deposit').prop('checked'));

                formData.append('avalable_start_date', $('#avalable_start_date').val());
                formData.append('avalable_end_date', $('#avalable_end_date').val());


                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.cars.store') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data, status, xhr) {
                        if (data.status == 'Success') {
                            // Do something with success message here
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: "Success",
                                text: "Car Registered Successfully!",
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else if (xhr.status == 422) {
                            // handle the validation errors
                            // ----------------------------------------------------------------------------------
                            // var errors = data.errors;
                            // loop through the errors and show them
                            // for (var key in errors) {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Error',
                                text: 'Input Valid Data!',
                                // title: key,
                                // text: errors[key][0],
                                showConfirmButton: false,
                                timer: 1500
                            });
                            // }
                        } else {
                            // Do something with failure message here
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: "Error",
                                text: "Car Registration Failed!",
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    },
                });
            });
        });
    </script>
    <!--end page wrapper -->
@endsection
