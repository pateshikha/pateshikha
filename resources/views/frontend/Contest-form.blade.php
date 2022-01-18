@extends('frontend.frontend-layouts.masterlayouts')

@section('content')

    <style>
        .form-design1 {
            padding: 20px;
            box-shadow: 5px 15px 10px 10px #9999994a;
            border-radius: 10px;
            background-color: #ffffff;
        }
        </style>
    <section class="page-section light ">
        <div class="container">
            <div class="row" style="display:flex; justify-content:center;">
                <div class="no-gutters shadow-lg form-design1">
                    <div class="col-sm-12 col-md-12  ">
                        <form action="" method="POST">
                            <h3 class="" style="color: #d11616;padding-bottom: 22px;text-align: center;">Contest Register
                               </h3>

                            <div class="form-group">
                                <label class="profile_details_text"> Name:</label>
                                <input type="text" name="first_name" class="form-control" value="" required>
                            </div>

                            <div class="form-group">
                                <label class="profile_details_text">Email Address:</label>
                                <input type="email" name="email" class="form-control" value="" required>
                            </div>



                            <div class="form-group">
                                <label class="profile_details_text">Mobile Number:</label>
                                <input type="tel" name="phone" class="form-control" value="" required pattern=[0-9]{10}>

                            </div>
                            <div class="form-group">
                                <label class="profile_details_text">Date of Birth</label>
                                <input type="Date" name="phone" class="form-control" value="" required pattern=[0-9]{10}>

                            </div>

                            <div class="form-group">
                                <label class="profile_details_text">Address</label>
                                <input type="text" name="address" class="form-control" value="" required>

                            </div>
                            <div class="form-group">
                                <label class="profile_details_text">city</label>
                                <input type="text" name="address" class="form-control" value="" required>

                            </div>
                            <div class="form-group">
                                <label class="profile_details_text">Pincode</label>
                                <input type="text" name="address" class="form-control" value="" required>

                            </div>
                            <div class="form-group">
                                <label class="profile_details_text">state</label>
                                <input type="text" name="address" class="form-control" value="" required>

                            </div>
                            <div class="form-group">
                                <label class="profile_details_text">Upload file</label>
                                <input type="file" name="address" class="form-control" value="" required>

                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-success" value="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class=" col-sm-5 col-md-5 col-lg-5">
                        <img src="{{ asset('') }}assets1/img/images.jpg" alt="image">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
