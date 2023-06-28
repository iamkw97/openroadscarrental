
function validateForm() {
    var e = document.getElementById("pickup-location"),
        t = document.getElementById("dropoff-location"),
        r = document.getElementById("pickup-date"),
        o = document.getElementById("return-date"),
        n = document.getElementById("pickup-time"),
        i = document.getElementById("return-time"),
        l = !0;
    return e.style.outline = "none", t.style.outline = "none", r.style.outline = "none", o.style.outline = "none", n
        .style.outline = "none", i.style.outline = "none", "" === e.value.trim() && (e.style.outline =
            "2px solid red", l = !1, document.getElementById("PickupLocation_error").innerHTML =
            "pickup location required", document.getElementById("PickupLocation_error").style.color = "red"), "" ===
            t.value.trim() && (t.style.outline = "2px solid red", l = !1, document.getElementById(
                "dropoff-location_error").innerHTML = "drop-off location required", document.getElementById(
                    "dropoff-location_error").style.color = "red"), "" === r.value.trim() && (r.style.outline =
                        "2px solid red", l = !1, document.getElementById("pickup_date_error").innerHTML =
                        "pickup date required", document.getElementById("pickup_date_error").style.color = "red"), "" === o
                            .value.trim() && (o.style.outline = "2px solid red", l = !1, document.getElementById("return-date-error")
                                .innerHTML = "return date required", document.getElementById("return-date-error").style.color = "red"),
        "" === n.value.trim() && (n.style.outline = "2px solid red", l = !1, document.getElementById(
            "pickup-time-error").innerHTML = "pickup time required", document.getElementById(
                "pickup-time-error").style.color = "red"), "" === i.value.trim() && (i.style.outline = "2px solid red",
                    l = !1, document.getElementById("return-time-error").innerHTML = "return date required", document
                        .getElementById("return-time-error").style.color = "red"), l && (window.location.href =
                            "{{ route('cars.index') }}?pickupLocation=" + encodeURIComponent(e.value) + "&dropoffLocation=" +
                            encodeURIComponent(t.value) + "&pickupDate=" + encodeURIComponent(r.value) + "&dropoffDate=" +
                            encodeURIComponent(o.value) + "&pickupTime=" + encodeURIComponent(n.value) + "&returnTime=" +
                            encodeURIComponent(i.value)), l
}


$(document).ready(function () {
    var pickupLocationSelect = $("#picklocation");
    var droplocationSelect = $("#droplocation");
    var pickdate = $("#pickdate");
    var dropoff_date = $("#dropdate");
    var pickupTime = $("#pickup_time");
    var dropoff_time = $("#droptime");
    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    var pickupLocation = urlParams.get("pickupLocation");
    var dropoffLocation = urlParams.get("dropoffLocation");
    var pickupDate = urlParams.get("pickupDate");
    var dropoffDate = urlParams.get("dropoffDate");
    var pickTime = urlParams.get("pickupTime");
    var dropTime = urlParams.get("returnTime");

    if (pickupLocation != null && dropoffLocation != null && pickupDate != null) {
        pickupLocationSelect.val(pickupLocation);
        droplocationSelect.val(dropoffLocation);
        pickdate.val(pickupDate);
        dropoff_date.val(dropoffDate);
        pickupTime.val(pickTime);
        dropoff_time.val(dropTime);
    }


});
$(document).ready(function () {
    var e, a = $("#PickupLocationfinal"),
        i = $("#DropoffLocationfinal"),
        t = $("#date-pickerfinal"),
        n = $("#pickup-timefinal"),
        o = $("#date-dropfinal"),
        l = $("#dropoff-timefinal"),
        c = $("#car_id"),
        d = window.location.search,
        s = new URLSearchParams(d),
        r = s.get("pickupLocationf"),
        p = s.get("dropoffLocationf"),
        f = s.get("pickupDatef"),
        m = s.get("dropoffDatef"),
        v = s.get("pickupTimef"),
        h = s.get("returnTimef"),
        g = s.get("id");
    a.val(r), i.val(p), t.val(f), n.val(v), o.val(m), l.val(h), c.val(g);
    var u = $("#car_id").val();
    $.ajax({
        url: "/cars/view/" + u,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        type: "GET",
        contentType: !1,
        processData: !1,
        success: function (a) {
            var i = a.data;
            console.log(i), $.each(i, function (a, i) {
                $("#VehicleCategory").html(i.category), $("#VehicleMake").html(i
                    .vehicle_make), $("#VehicleModel").html(i.vehicle_model), $(
                        "#NumberofSeats").html(i.no_of_seats), $("#NumberofSuitcases")
                            .html(i.no_of_suitcases), $("#condition").html(i.gear_box_type), $(
                                "#FuelState").html(i.fuel_state), $("#vehicle_description")
                                    .html(i.displaying_name), $("#vehicle_header_name").html(i
                                        .displaying_name), $("#vehicleMoreinf").html(i
                                            .vehicle_description), $("#total_cost").html(i
                                                .apr2sep_isk_cost_rental_per_day);
                var t = i.images,
                    n = $("#slider-carousel");
                n.empty(), $.each(t, function (e, a) {
                    var i = '<div class="item"><img src="img/cars/' + a
                        .vehicle_image + '"alt=""></div>';
                    n.append(i)
                }), t && t.length > 0 && (e = t[0].vehicle_image);
                var o = '<img src="img/cars/' + e + '" class="img-fluid" alt="">';
                $("#CarImage").append(o), n.owlCarousel({
                    loop: !0,
                    margin: 10,
                    nav: !0,
                    dots: !0,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1e3: {
                            items: 5
                        }
                    }
                });
                var l = document.getElementById("additional_baby_seat"),
                    c = document.getElementById("additional_wifi"),
                    d = document.getElementById("additional_driver"),
                    s = document.getElementById("total_cost"),
                    r = parseFloat($("#total_cost").html());

                function p() {
                    var e = r;
                    l.checked && (e += 1e3), c.checked && (e += 1300), d.checked && (
                        e += 0), s.innerText = e
                }
                l.addEventListener("change", p), c.addEventListener("change", p), d
                    .addEventListener("change", p), p()
            })
        }
    }), $("#submit_btn").on("click", function () {
        var d = a.val(),
            s = i.val(),
            r = t.val(),
            p = n.val(),
            f = o.val(),
            m = l.val(),
            v = c.val(),
            h = $("#vehicle_description").html(),
            g = $("#VehicleCategory").html(),
            u = $("#NumberofSeats").html(),
            k = $("#NumberofSuitcases").html(),
            b = $("#total_cost").html(),
            y = $("#additional_baby_seat").prop("checked"),
            w = $("#additional_wifi").prop("checked"),
            _ = $("#additional_driver").prop("checked"),
            x = "{{ route('personal.index') }}";
        x += "?Pickup_loc=" + encodeURIComponent(d), x += "&Drop_off_loc=" + encodeURIComponent(s),
            x += "&date_picker=" + encodeURIComponent(r), x += "&date_drop=" + encodeURIComponent(
                f), x += "&drop_Timeinfo=" + encodeURIComponent(m), x += "&pickup_Tinmeinfo=" +
                encodeURIComponent(p), x += "&card_id=" + encodeURIComponent(v), x += "&vehicle_des=" +
                encodeURIComponent(h), x += "&VehicleCategory=" + encodeURIComponent(g), x +=
            "&NumberofSeats=" + encodeURIComponent(u), x += "&NumberofSuitcases=" +
            encodeURIComponent(k), x += "&total_cost=" + encodeURIComponent(b), x += "&carimg=" +
            encodeURIComponent(e), x += "&add_baby_seat=" + encodeURIComponent(y), x +=
            "&add_wifi=" + encodeURIComponent(w), x += "&add_driver=" + encodeURIComponent(_),
            window.location.href = x
    })
}), $(document).ready(function () {
    var e = window.location.search,
        a = new URLSearchParams(e),
        i = a.get("Pickup_loc"),
        t = a.get("Drop_off_loc"),
        n = a.get("date_picker"),
        o = a.get("date_drop"),
        l = a.get("pickup_Tinmeinfo"),
        c = a.get("drop_Timeinfo"),
        d = a.get("card_id"),
        s = a.get("vehicle_des"),
        r = a.get("VehicleCategory"),
        p = a.get("NumberofSeats"),
        f = a.get("NumberofSuitcases"),
        m = a.get("total_cost"),
        v = a.get("add_baby_seat"),
        h = a.get("add_wifi"),
        g = a.get("add_driver"),
        u = a.get("carimg");
    $(".d-img").append('<img src="img/cars/' + u + '" class="img-fluid" alt="">');
    var k, b = new Date(n),
        y = Math.ceil((new Date(o) - b) / 864e5);
    if (y < 1) var w = 1 * m;
    else var w = m * y;
    $("#finalpicklocation").val(i), $("#finaldroplocation").val(t), $("#finalpickdateinfo").val(n), $(
        "#finalpicktimeinfo").val(l), $("#finaldropdateinfo").val(o), $("#finaldroptimeinfo").val(c), $(
            "#vehicleDisplayName").html(s), $("#seatcounts").html(p), $("#bagscount").html(f), $(
                "#VehicleCategoryinfomation").html(r), $("#total_cost").html(w), "true" === v ? $(
                    "#additional_baby_seat_status").html('<i class="fa fa-check-circle text-success"></i>') : $(
                        "#additional_baby_seat_status").html('<i class="fa fa-times-circle text-danger"></i>'),
        "true" === h ? $("#additional_wifi_status").html(
            '<i class="fa fa-check-circle text-success"></i>') : $("#additional_wifi_status").html(
                '<i class="fa fa-times-circle text-danger"></i>'), "true" === g ? $("#additional_driver_status")
                    .html('<i class="fa fa-check-circle text-success"></i>') : $("#additional_driver_status").html(
                        '<i class="fa fa-times-circle text-danger"></i>'), $("#submitRegister").on("click", function (
                            e) {
                            e.preventDefault();
                            var i = $("#fullname").val(),
                                t = $("#email").val(),
                                n = $("#address").val(),
                                o = $("#city").val(),
                                l = $("#phone1").val(),
                                c = $("#phone2").val(),
                                s = $('input[name="license_img[]"]').prop('files')[0],
                                r = $("#flight_no").val(),
                                p = $("#driver_name").val(),
                                f = $("#license_valid_date").val(),
                                m = $("#license_no").val(),
                                v = $("#password").val(),
                                h = $("#repassword").val(),
                                g = $("#finalpicklocation").val(),
                                u = $("#finaldroplocation").val(),
                                k = $("#finalpickdateinfo").val(),
                                b = $("#finaldropdateinfo").val(),
                                y = $("#finalpicktimeinfo").val(),
                                w = $("#finaldroptimeinfo").val(),
                                _ = a.get("add_baby_seat"),
                                x = a.get("add_wifi"),
                                T = a.get("add_driver"),
                                C = $("#total_cost").text(),
                                S = new FormData;
                            S.append("fullname", i), S.append("email", t), S.append("address", n), S.append("city", o),
                                S.append("phone1", l), S.append("phone2", c), S.append("license_img", s), S.append("flight_no",
                                    r), S.append("driver_name", p), S.append("license_valid_date", f), S.append(
                                        "license_no", m), S.append("password", v), S.append("repassword", h), S.append(
                                            "finalpickupLionformation", g), S.append("finaldroplocationinformation", u), S
                                                .append("finalpickdateinfomation", k), S.append("finaldropdateinfomation", b), S.append(
                                                    "finalpicktimeinformation", y), S.append("finaldroptimeinformation", w), S.append(
                                                        "additional_baby_seat", _), S.append("additional_wifi", x), S.append(
                                                            "additional_driver", T), S.append("car_id", d), S.append("total_cost", C), $.ajax({
                                                                type: "POST",
                                                                url: "/booking/complete",
                                                                headers: {
                                                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                                                },
                                                                data: S,
                                                                contentType: !1,
                                                                processData: !1,
                                                                success: function (e, a, i) {
                                                                    200 === i.status ? Swal.fire({
                                                                        position: "center",
                                                                        icon: "success",
                                                                        title: "Your booking has been successfully added!",
                                                                        text: "Use your given email & password to login.",
                                                                        showConfirmButton: !0
                                                                    }).then(e => {
                                                                        e.isConfirmed && (window.location.href = "/login")
                                                                    }) : Swal.fire({
                                                                        position: "center",
                                                                        icon: "success",
                                                                        title: "Error",
                                                                        text: "Booking Failed!",
                                                                        showConfirmButton: !1,
                                                                        timer: 1500
                                                                    })
                                                                }
                                                            })
                        })
});

