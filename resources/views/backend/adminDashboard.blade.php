@extends('backend.backend-layouts.masterlayouts')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
          </div>
          <div class="content-body">
              <!-- Dashboard Analytics Start -->
              <section id="dashboard-analytics">
                  <div class="row">
                      <!-- Website Analytics Starts-->
                      <div class="col-xl-6 col-md-6 col-sm-12 dashboard-referral-impression">
                          <div class="row">
                              <!-- Referral Chart Starts-->
                              <div class="col-xl-12 col-12">
                                  <div class="card">
                                      <div class="card-body text-center pb-0">
                                          <h2>Total Contest</h2>
                                          <span class="text-muted">Referral 40%</span>
                                          <div id="success-line-chart"></div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Impression Radial Chart Starts-->
                          </div>
                      </div>
                      <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="row">
                              <!-- Conversion Chart Starts-->
                              <div class="col-xl-12 col-md-6 col-12">
                                  <div class="card">
                                      <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                                          <div class="conversion-title">
                                              <h4 class="card-title">Total Participant</h4>
                                              <p>60%
                                                  <i class="bx bx-trending-up text-success font-size-small align-middle mr-25"></i>
                                              </p>
                                          </div>
                                          <div class="conversion-rate">
                                              <h2>89k</h2>
                                          </div>
                                      </div>
                                      <div class="card-body text-center">
                                          <div id="bar-negative-chart" class="negative-bar-chart"></div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>

                      <div class="col-md-12 col-sm-12">
                          <div class="card">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                  <h4 class="card-title">Website Analytics</h4>
                                  <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                              </div>
                              <div class="card-body pb-1">
                                  <div class="d-flex justify-content-around align-items-center flex-wrap">
                                      <div class="user-analytics mr-2">
                                          <i class="bx bx-user mr-25 align-middle"></i>
                                          <span class="align-middle text-muted">Users</span>
                                          <div class="d-flex">
                                              <div id="radial-success-chart"></div>
                                              <h3 class="mt-1 ml-50">61K</h3>
                                          </div>
                                      </div>
                                      <div class="sessions-analytics mr-2">
                                          <i class="bx bx-trending-up align-middle mr-25"></i>
                                          <span class="align-middle text-muted">Sessions</span>
                                          <div class="d-flex">
                                              <div id="radial-warning-chart"></div>
                                              <h3 class="mt-1 ml-50">92K</h3>
                                          </div>
                                      </div>
                                      <div class="bounce-rate-analytics">
                                          <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                          <span class="align-middle text-muted">Bounce Rate</span>
                                          <div class="d-flex">
                                              <div id="radial-danger-chart"></div>
                                              <h3 class="mt-1 ml-50">72.6%</h3>
                                          </div>
                                      </div>
                                      <div class="bounce-rate-analytics">
                                          <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                          <span class="align-middle text-muted">Bounce Rate</span>
                                          <div class="d-flex">
                                              <div id="radial-danger-chart"></div>
                                              <h3 class="mt-1 ml-50">72.6%</h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div id="analytics-bar-chart" class="my-75"></div>
                              </div>
                          </div>

                      </div>

                  </div>


                  </div>

              </section>
              <!-- Dashboard Analytics end -->

          </div>
      </div>
  </div>
  <!-- END: Content-->
  @endsection
