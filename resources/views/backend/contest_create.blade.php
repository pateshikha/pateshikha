@extends('backend.backend-layouts.masterlayouts')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">

                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button class="close" type="button" data-dismiss="alert">X</button>
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create Contest</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{route('createContest.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <label for="first-name-column">Contest Name</label>
                                                <input type="text" class="form-control" placeholder="Contest Name"
                                                    name="contest_name">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="last-name-column">Banner</label>
                                                <input type="file" class="form-control" placeholder="Banner"
                                                    name="contest_banner">

                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label for="last-name-column">Age_groups</label>
                                                <input type="text" class="form-control" name="age_groups" placeholder="Enter Age">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label for="email-id-column">Contest Price </label>
                                                <input type="text" id="" class="form-control" name="prices"
                                                    placeholder="Price Money">
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <label for="city-column">Contest Lanching Date</label>
                                                <input type="date" id="city-column" class="form-control"
                                                    placeholder="Contest Lanching Date" name="start_date">
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <label for="email-id-column">Contest Duration</label>
                                                <input type="text" id="email-id-column" class="form-control"
                                                    name="duration_date" placeholder="Contest Duration">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="company-column">Contest Final Date</label>
                                                <input type="date" id="company-column" class="form-control"
                                                    name="end_date" placeholder="Contest Final Date">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="email-id-column">Contest Description</label>
                                                <input type="text" id="" class="form-control" name="contest_descripition"
                                                    placeholder="Contest Description">
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    </div>


@endsection
