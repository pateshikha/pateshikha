@extends('frontend.frontend-layouts.masterlayouts')

@section('content')
    <style>
        .form-design {
            padding: 20px;
            box-shadow: 5px 15px 10px 10px #9999994a;
            border-radius: 10px;
            background-color: #ffffff;
        }
        }

        .nav>li>a:hover,
        .nav>li>a:focus {
            text-decoration: none;
            background-color: #ea032d;
            color: #fff;
        }

    </style>

    <section class="page-section light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-left">
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span
                                class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                    class="fa fa-star fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">User
                            Dashboard</span>
                    </h1>
                </div>
                <div class="col-md-4 text-right-md pull-right">
                    <a href="{{route('index')}}" class="btn btn-theme btn-theme-lg btn-theme-transparent-grey pull-right"
                        data-animation="flipInY" data-animation-delay="700"><i class="fa fa-pencil"></i>Back</a>
                </div>
            </div>
            <div class="row faq margin-top" data-animation="fadeInUp" data-animation-delay="100">
                <div class="col-sm-3 col-md-3 ">
                    <ul id="tabs-faq" class="nav">
                        <li class="active"><a href="#tab-faq1" data-toggle="tab"><i class="fa fa-user"></i>
                                <span class="faq-inner">Profile Seting+ </span></a></li>
                        <li><a href="#tab-faq2" data-toggle="tab"><i class="fa fa-gear"></i> <span
                                    class="faq-inner">Contest Details</span></a></li>
                        {{-- <li><a href="#tab-faq3" data-toggle="tab"><i class="fa fa-sign-out"></i>  <span class="faq-inner">Logout</span></a></li> --}}
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span
                                    class="faq-inner">Logout</span></a></li>

                    </ul>
                </div>

                <div class="tab-content">
                    <div id="tab-faq1" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-design">

                                    <form action="" method="POST">
                                        <h3 class=""
                                            style="color: #d11616;padding-bottom: 22px;text-align: center;">Edit Personal
                                            Information</h3>

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
                                            <input type="tel" name="phone" class="form-control" value="" required
                                                pattern=[0-9]{10}>

                                        </div>

                                        <div class="form-group">
                                            <label class="profile_details_text">Address</label>
                                            <input type="text" name="address" class="form-control" value="" required>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-lg btn-success" value="update">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tab-faq2" class="tab-pane fade">
                        <div class="col-sm-8 col-md-8">
                            <div class="form-design">
                                <h3 style="color:#333;padding-bottom:20px;">History of Contest Details</h3>
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table
                                            class=" table table-responsive table-bordered table-striped dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>contest name</th>
                                                    <th>participate date</th>
                                                    <th>payment History</th>
                                                </tr>

                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Drawing</td>
                                                    <td>04-01-2022</td>
                                                    <td>20$</td>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>Drawing</td>
                                                    <td>04-01-2022</td>
                                                    <td>20$</td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-faq3" class="tab-pane fade">
                            <div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
