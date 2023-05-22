<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Booking Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        ul {
            padding-left: 20px;
            margin: 10px 0;
        }

        ul li {
            list-style: disc;
            margin-bottom: 5px;
        }

        strong {
            color: #555;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
        }

        .header {
            background-color: #66c2ff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .header h3 {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h3>New Booking Notification</h3>
        </div>
        <p>Dear Admin,</p>

        <p>A new booking has been made:</p>
        <ul>
            <li>Customer: <strong>{{ $user->fullname }}</strong></li>
            <li>Email: <strong>{{ $user->email }}</strong></li>
            <li>Phone: <strong>{{ $user->phone1 }}</strong></li>
            <li>Address: <strong>{{ $user->address }}, {{ $user->city }}</strong></li>
            <li>Flight No: <strong>{{ $user->flight_no }}</strong></li>
            <br>
            <li>Driver Name: <strong>{{ $user->driver_name }}</strong></li>
            <li>Driver License: <strong>{{ $user->license_no }}</strong></li>
            <li>License Valid Date: <strong>{{ $user->license_valid_date }}</strong></li>
            <br>
            <li>Pickup Location: <strong>{{ $booking->pickup_location }}</strong></li>
            <li>Dropoff Location: <strong>{{ $booking->dropoff_location }}</strong></li>
            <li>Pickup Date: <strong>{{ $booking->pickup_date }}</strong></li>
            <li>Pickup Time: <strong>{{ $booking->pickup_time }}</strong></li>
            <li>Return Date: <strong>{{ $booking->return_date }}</strong></li>
            <li>Return Time: <strong>{{ $booking->return_time }}</strong></li>
            <li>Car Chosen: <strong>{{ $car->displaying_name }}</strong></li>
            <li>Total: <strong>ISK{{ $booking->total_cost }}000</strong></li>
        </ul>
        {{-- <p>Please follow up with the customer to confirm the booking details.</p> --}}
        <p>Thank you.</p>
    </div>
</body>

</html>
