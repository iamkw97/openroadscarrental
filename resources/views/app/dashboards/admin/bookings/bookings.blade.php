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
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bookings_list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->fullname}} <br>
                                        {{$item->email}}</td>
                                    <td>{{$item->displaying_name}}</td>
                                    <td>from {{$item->pickup_date}} <br>
                                        to {{$item->return_date}}</td>
                                    <td>from {{$item->pickup_location}} <br>
                                        to {{$item->dropoff_location}}</td>
                                    <td>{{$item->total_cost}}</td>
                                    <td>
                                        @if ($item->booking_status == 'scheduled')
                                    <div class="badge rounded-pill bg-primary">scheduled</div>
                                @elseif ($item->status == 'completed')
                                    <div class="badge rounded-pill bg-success">completed</div>
                                @elseif ($item->status == 'cancelled')
                                    <div class="badge rounded-pill bg-danger">cancelled</div>
                                @endif
                                    </td>

                                    {{-- <td>{{$item->id}}</td> --}}
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
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#booking_list_all').DataTable();
        });
    </script>
@endsection
