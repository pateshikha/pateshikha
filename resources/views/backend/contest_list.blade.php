@extends('backend.backend-layouts.masterlayouts')

@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
<!-- Zero configuration table -->
    <!-- Column selectors with Export Options and print table -->
    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                          Contest List
                        </h4>
                    </div>
                    <div class="card-header">
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class=" table table-responsive table-bordered table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>contest name</th>
                                        <th>contest start date</th>
                                        <th>contest final date</th>
                                        <th> total participant</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>
                                            <input type="submit" class="btn btn-primary" value="Edit">
                                           <input type="submit" class="btn btn-info" name="" id=""  value="View">
                                           <input type="submit" class="btn btn-danger" name="" id="" value="Delete">
                                        </td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Column selectors with Export Options and print table -->
    </div></div></div>
<!--/ Zero configuration table -->
@endsection
