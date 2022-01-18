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
                          Participant Details
                        </h4>
                    </div>
                    <div class="card-header">
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Participante</th>
                                        <th>Contest</th>
                                        <th>Payment</th>
                                        <th>Status </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td><Span style="color: green">Active</Span></td>

                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td><Span style="color: red">Inactive</Span></td>

                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td><Span style="color: green">Active</Span></td>

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
