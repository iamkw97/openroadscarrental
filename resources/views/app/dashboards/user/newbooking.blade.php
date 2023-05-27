@extends('app.dashboards.user.layout.app')

@section('usertitle')
    User New Booking | Open Roads Car Rental
@endsection

@section('usersidebar')
    <li><a href="{{ route('user.home') }}"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="{{ route('user.bookings') }}"><i class="fa fa-calendar"></i>My Bookings</a></li>
    <li><a href="{{ route('user.cars') }}" class="active"><i class="fa fa-car"></i>Cars</a></li>
    <li><a href="{{ route('user.profile') }}"><i class="fa fa-user"></i>Profile</a></li>
    <li>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            @method('post')
            <button class="frmbtnlgout"> <i class="fa fa-sign-out"></i>Sign Out</button>
        </form>
    </li>
@endsection

@section('usersubheader')
    New Booking
@endsection

@section('userbody')
    <div class="col-lg-9">
        <div class="row g-5">
            <div class="col-lg-5">
                <div id="slider-carousel" class="owl-carousel">
                    <div class="item">
                        <img src="{{ asset('img/cars/' . $car_image->vehicle_image) }}" alt="Car Image">

                    </div>
                </div>
                <p>Please Note<span style="color: red">*</span><br><strong>ALL our prices include CDW, SCDW,TP,GP, SAAP
                        Insurances, unlimited mileage,GPS and studded tires during winter.</strong></p>
            </div>

            <div class="col-lg-4">
                <h3>{{ $car->displaying_name }}</h3>
                <p>{{ $car->vehicle_description }}</p>

                <div class="spacer-10"></div>

                <h4>Specifications</h4>
                <div class="de-spec">
                    <div class="d-row">
                        <span class="d-title">Type</span>
                        <spam class="d-value">{{ $car->category }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Make</span>
                        <spam class="d-value">{{ $car->vehicle_make }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Model</span>
                        <spam class="d-value">{{ $car->vehicle_model }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Seat</span>
                        <spam class="d-value">{{ $car->no_of_seats }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Luggage</span>
                        <spam class="d-value">{{ $car->no_of_suitcases }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Fuel Type</span>
                        <spam class="d-value">{{ $car->fuel_type }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Transmission</span>
                        <spam class="d-value">{{ $car->transmission }}</spam>
                    </div>
                    <div class="d-row">
                        <span class="d-title">Drive</span>
                        <spam class="d-value">{{ $car->wd }}</spam>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <h4>Additional Features</h4>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="additional_baby_seat"
                        name="additional_baby_seat">
                    <label class="form-check-label" for="additional_baby_seat"><strong>Baby Seat</strong> <span>/ISK
                            1000 per day</span></label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="additional_wifi"
                        name="additional_wifi">
                    <label class="form-check-label" for="additional_wifi"><strong>WIFI (Unlimited)</strong><span>/ISK 1300
                            per
                            day</span></label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="additional_driver"
                        name="additional_driver">
                    <label class="form-check-label" for="additional_driver"><strong>Extra
                            Driver</strong><span>/FREE</span></label>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="de-price text-center">
                    Daily Rate<h4>ISK <span id="daily_rate">{{ $car_price->apr2sep_isk_cost_rental_per_day }}</span></h4>
                </div>
                <div class="spacer-10"></div>
                <div class="de-price text-center">
                    Total Cost<h4>ISK <span id="total_cost"></span></h4>
                </div>
                <div class="spacer-10"></div>
                <div class="de-box mb10">
                    <form name="contactForm" id='contact_form' method="post">
                        <div class="row">
                            <div class="col-lg-12 mb20">
                                <input id="car_id" name="car_engine_3" type="hidden">
                            </div>
                            <div class="col-lg-12 mb20">
                                <h5>Pick Up Location</h5><select name="" id="PickupLocationfinal"
                                    style="border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                    name="PickupLocation" placeholder="Enter your pickup location" autocomplete="off"
                                    class="form-control">
                                    <option selected disabled value="">Select Location</option>
                                    <option value="kef_airport">KEF Airport</option>
                                    <option value="reykjavik">Reykjavik</option>
                                </select>
                            </div>

                            <div class="col-lg-12 mb20">
                                <h5>Drop Off Location</h5><select name="" id="DropoffLocationfinal"
                                    style="width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;"
                                    name="PickupLocation" placeholder="Enter your pickup location" autocomplete="off"
                                    class="form-control">
                                    <option selected disabled value="">Select Location</option>
                                    <option value="reykjavik">Reykjavik</option>
                                    <option value="kef_airport">KEF Airport</option>
                                    <option value="same_location">[Return to the same location]</option>
                                </select>
                            </div>

                            <div class="col-lg-12 mb20">
                                <h5>Pick Up Date & Time</h5>
                                <input id="pickup_date" name="car_engine_3" type="date"
                                    style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">
                                <input id="pickup_time" name="car_engine_3" type="time"
                                    style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9; margin-top:10px;">
                            </div>

                            <div class="col-lg-12 mb20">
                                <h5>Return Date & Time</h5>
                                <div class="date-time-field">
                                    <input id="return_date" name="car_engine_3" type="date"
                                        style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9;">
                                    <input id="return_time" name="car_engine_3" type="time"
                                        style=" width: 100%; border: none; border-bottom: 1px solid #ccc; outline: none; color:#0745a9; margin-top:10px;">
                                </div>
                            </div>
                        </div>
                        <button type='button' id='btn_submit_booking' class="btn-main color-2">Proceed</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <input id="user_id" value="{{ auth()->user()->id }}" hidden>
            <input id="carID" value="{{$car->id}}" hidden>
        </div>
        <script>
            // Get the initial daily rate value
            var dailyRate = parseInt(document.getElementById('daily_rate').textContent);

            // Set the default value of the total cost as the daily rate
            document.getElementById('total_cost').textContent = dailyRate;

            // Add event listeners to the additional feature checkboxes
            document.getElementById('additional_baby_seat').addEventListener('change', updateTotalCost);
            document.getElementById('additional_wifi').addEventListener('change', updateTotalCost);
            document.getElementById('additional_driver').addEventListener('change', updateTotalCost);

            // Add event listeners to the pickup and return date inputs
            document.getElementById('pickup_date').addEventListener('change', updateTotalCost);
            document.getElementById('return_date').addEventListener('change', updateTotalCost);

            // Function to update the total cost based on the checkbox and date changes
            function updateTotalCost() {
                var additionalBabySeat = document.getElementById('additional_baby_seat').checked;
                var additionalWifi = document.getElementById('additional_wifi').checked;
                var additionalDriver = document.getElementById('additional_driver').checked;
                var pickupDate = new Date(document.getElementById('pickup_date').value);
                var returnDate = new Date(document.getElementById('return_date').value);

                // Calculate the date count between pickup and return dates
                var dateCount = 1;
                if (pickupDate && returnDate) {
                    dateCount = Math.ceil((returnDate - pickupDate) / (1000 * 60 * 60 * 24));
                }

                // Calculate the updated daily rate
                var updatedDailyRate = dailyRate;
                if (additionalBabySeat) {
                    updatedDailyRate += 1000;
                }
                if (additionalWifi) {
                    updatedDailyRate += 1300;
                }
                if (!additionalDriver) {
                    updatedDailyRate -= 0;
                }

                // Calculate the total cost
                var totalCost = updatedDailyRate * dateCount;

                // Update the displayed daily rate and total cost
                document.getElementById('daily_rate').textContent = updatedDailyRate;
                document.getElementById('total_cost').textContent = isNaN(totalCost) ? updatedDailyRate : totalCost;
            }

            // Trigger initial calculation
            updateTotalCost();
        </script>
        <script>
            $(document).ready(function() {
                $("#btn_submit_booking").on("click", function(e) {
                    e.preventDefault();
                    var user_id = $("#user_id").val();
                    var carID = $("#carID").val();
                    var pickup_location = $("#PickupLocationfinal").val();
                    var return_location = $("#DropoffLocationfinal").val();
                    var pickup_date = $("#pickup_date").val();
                    var pickup_time = $("#pickup_time").val();
                    var return_date = $("#return_date").val();
                    var return_time = $("#return_time").val();
                    var additional_baby_seat = $("#additional_baby_seat").prop("checked");
                    var additional_wifi = $("#additional_wifi").prop("checked");
                    var additional_driver = $("#additional_driver").prop("checked");
                    var total_cost = $("#total_cost").text();

                    var formData = new FormData();
                    formData.append('pickup_location', pickup_location);
                    formData.append('return_location', return_location);
                    formData.append('pickup_date', pickup_date);
                    formData.append('pickup_time', pickup_time);
                    formData.append('return_date', return_date);
                    formData.append('return_time', return_time);
                    formData.append('additional_baby_seat', additional_baby_seat);
                    formData.append('additional_wifi', additional_wifi);
                    formData.append('additional_driver', additional_driver);
                    formData.append('total_cost', total_cost);
                    formData.append('user_id', user_id);
                    formData.append('carID', carID);

                    $.ajax({
                        type: 'POST',
                        url: "/user/booking/new/" + user_id,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data, status, xhr) {
                            var statusCode = xhr.status;
                            if (statusCode === 200) {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: "Success",
                                    text: "Your booking has been successfully added!",
                                    showConfirmButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Redirect to another page
                                        window.location.href =
                                            "/user/bookings";
                                    }
                                });
                            } else {
                                // Do something with failure message here
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: "Error",
                                    text: "Booking Failed!",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        },

                    });
                });
            });
        </script>
    @endsection
