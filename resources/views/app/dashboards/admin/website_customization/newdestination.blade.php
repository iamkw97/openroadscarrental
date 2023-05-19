@extends('app.dashboards.admin.layout.app')

@section('admintitle')
    New Destination | Open Roads Car Rental
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
                <div class="breadcrumb-title pe-3">Destinations</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Destinations</li>
                            <li class="breadcrumb-item active" aria-current="page">New</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Add New Car</h5>
                    <hr />
                    <div class="form-body mt-4">
                        <div class="border border-3 p-3 rounded">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mt-2">
                                        <div class="col-md-8 my-1">
                                            <label for="destination_title" class="form-label">Title<span
                                                    style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                            <input type="text" class="form-control" id="destination_title"
                                                name="destination_title" placeholder="Enter displaying title">
                                        </div>
                                        <div class="col-md-4 my-1">
                                            <label for="published_date" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="published_date"
                                                name="published_date" placeholder="Enter displaying title">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12 my-1">
                                            <label for="destination_description" class="form-label">Description<span
                                                    style="color:rgb(255, 0, 0)">&nbsp;*</span></label>
                                            <textarea class="form-control" id="destination_description" name="destination_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12 my-1">
                                            <label for="destination_image" class="form-label">Destination Image</label>
                                            <input id="destination_image" name="destination_image" type="file"
                                                accept="image/*">
                                        </div>
                                        <div id="destination_preview"></div>
                                    </div>
                                </div>

                                <hr>
                                <div style="float: right;">
                                    <button id="btn_submit_destination" name="btn_submit_destination"
                                        class="btn btn-primary">Submit</button>
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
            var previewContainer = document.getElementById("destination_preview");
            previewContainer.innerHTML = "";
            var files = document.getElementById("destination_image").files;
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
            var filesInput = document.getElementById("destination_image");
            var files = Array.from(filesInput.files);
            files.splice(index, 1);
            filesInput.files = new FileListArray(files);
            previewImages();
        }
        document.getElementById("destination_image").addEventListener("change", previewImages);

        //store booking info----------------------------------------------
        $(document).ready(function() {
            $('#btn_submit_destination').click(function(e) {
                e.preventDefault();

                var formData = new FormData();
                formData.append('destination_title', $('#destination_title').val());
                formData.append('published_date', $('#published_date').val());
                formData.append('destination_description', $('#destination_description').val());
                formData.append('destination_image', $('#destination_image')[0].files[0]);

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.destinations.store') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data, status, xhr) {
                        var statusCode = xhr.status;
                        if (statusCode === 200) {
                            // Do something with success message here
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: "Success",
                                text: "Car Registered Successfully!",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                // Reload the page
                                location.reload();
                            });
                        } else if (statusCode === 422) {
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
