@extends('app.dashboards.admin.layout.app')

@section('admintitle')
    Bookings | Open Roads Car Rental
@endsection

@section('adminbody')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Bookings</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="ms-auto">
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
                </div> --}}
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Bookings</h5>
                    <hr />
                    <div class="table-responsive">
                        <table id="booking_list_all" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Vehicle</th>
                                    <th>From/To</th>
                                    <th>From/To</th>
                                    <th>Total(<strong>ISK</strong>)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bookings_list as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fullname }} <br>
                                            {{ $item->email }}</td>
                                        <td>{{ $item->displaying_name }}</td>
                                        <td>from {{ $item->pickup_date }} <br>
                                            to {{ $item->return_date }}</td>
                                        <td>from {{ $item->pickup_location }} <br>
                                            to {{ $item->dropoff_location }}</td>
                                        <td>{{ $item->total_cost }}</td>
                                        <td>
                                            @if ($item->booking_status == 'scheduled')
                                                <div class="badge rounded-pill bg-primary">scheduled</div>
                                            @elseif ($item->status == 'completed')
                                                <div class="badge rounded-pill bg-success">completed</div>
                                            @elseif ($item->status == 'cancelled')
                                                <div class="badge rounded-pill bg-danger">cancelled</div>
                                            @endif
                                        </td>

                                        <td>
                                            <button type="button" class="btn_view btn btn-sm btn-warning"
                                                data-bs-toggle="modal" data-bs-target="#showBookingData"
                                                data-booking-id="{{ $item->id }}">View</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">No Booking Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Vehicle</th>
                                    <th>From/To</th>
                                    <th>From/To</th>
                                    <th>Total(<strong>ISK</strong>)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Modal -->
                <div class="modal fade" id="showBookingData" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_title"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item mb-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">User Details</h5>
                                            <small><i class="fadeIn animated bx bx-user"></i></small>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="fullname" class="form-label">Full Name</label>
                                                    <input id="fullname" name="fullname" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input id="email" name="email" type="text" class="form-control"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input id="address" name="address" type="text" class="form-control"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="city" class="form-label">City</label>
                                                    <input id="city" name="city" type="text" class="form-control"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone1" class="form-label">Phone 1</label>
                                                    <input id="phone1" name="phone1" type="text" class="form-control"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="phone2" class="form-label">Phone 2</label>
                                                    <input id="phone2" name="phone2" type="text" class="form-control"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="flight_no" class="form-label">Flight No.</label>
                                                    <input id="flight_no" name="flight_no" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="driver" class="form-label">Driver's Name</label>
                                                    <input id="driver" name="driver" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="drivers_license" class="form-label">Driver's
                                                        License</label>
                                                    <input id="drivers_license" name="drivers_license" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="license_validity" class="form-label">License
                                                        Validity</label>
                                                    <input id="license_validity" name="license_validity" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item mb-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Booking Details</h5>
                                            <small class="text-muted"><i
                                                    class="fadeIn animated bx bx-calendar"></i></small>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pickup_location" class="form-label">Pickup
                                                        Location</label>
                                                    <input id="pickup_location" name="pickup_location" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dropoff_location" class="form-label">Dropoff
                                                        Location</label>
                                                    <input id="dropoff_location" name="dropoff_location" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pickup_date" class="form-label">Pickup Date</label>
                                                    <input id="pickup_date" name="pickup_date" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="return_date" class="form-label">Return Date</label>
                                                    <input id="return_date" name="return_date" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pickup_time" class="form-label">Pickup Time</label>
                                                    <input id="pickup_time" name="pickup_time" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="return_time" class="form-label">Return Time</label>
                                                    <input id="return_time" name="return_time" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="booking_status" class="form-label">Booking Status</label>
                                                    <input id="booking_status" name="booking_status" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="total_cost" class="form-label">Total Cost</label>
                                                    <input id="total_cost" name="total_cost" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input id="additional_baby_seat" name="additional_baby_seat"
                                                        type="checkbox" class="form-check-input" disabled>
                                                    <label for="additional_baby_seat"
                                                        class="form-check-label"><strong>Additional Baby
                                                            Seat</strong></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input id="additional_wifi" name="additional_wifi" type="checkbox"
                                                        class="form-check-input" disabled>
                                                    <label for="additional_wifi"
                                                        class="form-check-label"><strong>Additional Wi-Fi</strong></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input id="additional_driver" name="additional_driver"
                                                        type="checkbox" class="form-check-input" disabled>
                                                    <label for="additional_driver"
                                                        class="form-check-label"><strong>Additional Driver</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item mb-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Vehicle Details</h5>
                                            <small class="text-muted"><i
                                                    class="fadeIn animated bx bx-bus-school"></i></small>
                                        </div>
                                        <div class="row my-1">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="displaying_name" class="form-label">Vehicle Name</label>
                                                    <input id="displaying_name" name="displaying_name" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category" class="form-label">Category</label>
                                                    <input id="category" name="category" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-1">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_of_seats" class="form-label">Number of Seats</label>
                                                    <input id="no_of_seats" name="no_of_seats" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_of_suitcases" class="form-label">Number of
                                                        Suitcases</label>
                                                    <input id="no_of_suitcases" name="no_of_suitcases" type="text"
                                                        class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#booking_list_all').DataTable();
        });
        $(document).ready(function() {
            $('.btn_view').click(function() {
                var bookingID = $(this).data('booking-id');

                $.ajax({
                    url: '/admin/bookings/' + bookingID,
                    type: 'GET',
                    success: function(response) {
                        var bookingData = response.data;

                        // Access the booking data properties
                        var fullname = bookingData.fullname;
                        var email = bookingData.email;
                        var address = bookingData.address;
                        var city = bookingData.city;
                        var phone1 = bookingData.phone1;
                        var phone2 = bookingData.phone2;
                        var flightNo = bookingData.flight_no;
                        var driverName = bookingData.driver_name;
                        var licenseNo = bookingData.license_no;
                        var licenseValidity = bookingData.license_valid_date;
                        var pickupLocation = bookingData.pickup_location;
                        var dropoffLocation = bookingData.dropoff_location;
                        var pickupDate = bookingData.pickup_date;
                        var returnDate = bookingData.return_date;
                        var pickupTime = bookingData.pickup_time;
                        var returnTime = bookingData.return_time;
                        var bookingStatus = bookingData.booking_status;
                        var totalCost = bookingData.total_cost;
                        var additionalBabySeat = bookingData.additional_baby_seat;
                        var additionalWiFi = bookingData.additional_wifi;
                        var additionalDriver = bookingData.additional_driver;
                        var vehicleName = bookingData.displaying_name;
                        var category = bookingData.category;
                        var numSeats = bookingData.no_of_seats;
                        var numSuitcases = bookingData.no_of_suitcases;

                        // Set the values of the input fields
                        $('#fullname').val(fullname);
                        $('#email').val(email);
                        $('#address').val(address);
                        $('#city').val(city);
                        $('#phone1').val(phone1);
                        $('#phone2').val(phone2);
                        $('#flight_no').val(flightNo);
                        $('#driver').val(driverName);
                        $('#drivers_license').val(licenseNo);
                        $('#license_validity').val(licenseValidity);
                        // Set the values of the input fields
                        $('#pickup_location').val(pickupLocation);
                        $('#dropoff_location').val(dropoffLocation);
                        $('#pickup_date').val(pickupDate);
                        $('#return_date').val(returnDate);
                        $('#pickup_time').val(pickupTime);
                        $('#return_time').val(returnTime);
                        $('#booking_status').val(bookingStatus);
                        $('#total_cost').val('ISK' + totalCost);
                        $('#additional_baby_seat').prop('checked', additionalBabySeat ===
                            'true');
                        $('#additional_wifi').prop('checked', additionalWiFi === 'true');
                        $('#additional_driver').prop('checked', additionalDriver === 'true');
                        $('#displaying_name').val(vehicleName);
                        $('#category').val(category);
                        $('#no_of_seats').val(numSeats);
                        $('#no_of_suitcases').val(numSuitcases);
                        $('#modal_title').text('ISK' + totalCost);
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors that occur during the request
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
