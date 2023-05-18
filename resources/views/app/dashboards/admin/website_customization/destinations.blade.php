@extends('app.dashboards.admin.layout.app')

@section('admintitle')
    Destinations | Open Roads Car Rental
@endsection

@section('adminbody')
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
                            <li class="breadcrumb-item aria-current="page">Destinations</li>
                            <li class="breadcrumb-item active" aria-current="page">All</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="{{ route('admin.destinations.create') }}" class="btn btn-primary mb-3 mb-lg-0"><i
                            class='bx bxs-plus-square'></i>New Destination</a>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Bookings</h5>
                    <hr />
                    <div class="table-responsive">
                        <table id="booking_list_all" class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Published Date</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($destinations as $item)
                                    <tr>
                                        <td>{{ $item->published_date }}</td>
                                        <td>
                                            <img style="width: 120px; height: 90px; border-radius: 10%; overflow: hidden;"
                                                src="{{ asset('img/destinations/' . $item->destination_image) }}"
                                                alt="Destination Image">
                                        </td>
                                        <td>{{ $item->destination_title }}</td>
                                        <td>{{ $item->destination_description }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" disabled><i class="bi bi-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            No destination is found!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Published Date</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
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
