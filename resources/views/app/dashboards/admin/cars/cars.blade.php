@extends('app.dashboards.admin.layout.app')

@section('admintitle')
    Cars | Open Roads Car Rental
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
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                        <a href="{{ route('admin.cars.create') }}" class="btn btn-primary "><i
                                class='bx bxs-plus-square'></i>New Car</a>
                </div>
            </div>
            <!--end breadcrumb-->
            {{-- cars --}}
            <div class="row row-cols-4  product-grid">
                @forelse ($cars_for_admin as $item)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('img/cars/' . $item->vehicle_image) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h6 class="card-title cursor-pointer">{{ $item->displaying_name }}</h6>
                                <div class="clearfix">
                                    <p class="mb-0 float-start"><strong>{{ $item->no_of_seats }}</strong> Seats</p>
                                    <p class="mb-0 float-end"><span
                                            class="me-2 text-decoration-line-through text-secondary  fw-bold">{{ $item->no_of_suitcases }}</span>Suitcases
                                    </p>
                                </div>
                                <div class="clearfix">
                                    <h6 class="mb-0 float-start">{{ $item->category }}</h6>
                                </div>

                                <div class="d-flex align-items-left mt-3 list-group list-group-flush d-flex">
                                    {{-- <ul class="list-group list-group-flush d-flex align-items-left mt-3"> --}}
                                        <li class="list-group-item"><strong>from April to Sept.</strong></li>
                                        <li class="list-group-item"><strong>ISK{{ $item->apr2sep_isk_cost_rental_per_day }}</strong> &nbsp;| &nbsp;USD{{ $item->apr2sep_usd_cost_rental_per_day }}&nbsp;| &nbsp;EUR{{ $item->apr2sep_eur_cost_rental_per_day }}</li>

                                        <li class="list-group-item"><strong>from Sept. to April</strong></li>
                                        <li class="list-group-item"><strong>ISK{{ $item->sep2apr_isk_cost_rental_per_day }}</strong> &nbsp;| &nbsp;USD{{ $item->sep2apr_usd_cost_rental_per_day }}&nbsp;| &nbsp;EUR{{ $item->sep2apr_eur_cost_rental_per_day }}</li>

                                    {{-- </ul> --}}
                                    {{-- <a class="btn-main" href="{{ route('user.cars.show', $item->id) }}">Rent
                                        Now</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12">
                        <h4>No cars found!</h4>
                    </div>
                @endforelse

            </div>
            <!--end row-->
            {{-- end cars --}}
        </div>
    </div>

    <!--end page wrapper -->
@endsection
