@extends('layouts.admin')
@section('content')
@can('role_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
   
        </div>
    </div>
@endcan
<div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">15</div>
                    <div>Members payé</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="105" style="display: block; height: 70px; width: 194px;" width="291"></canvas>
                  <div id="card-chart1-tooltip" class="chartjs-tooltip top" style="opacity: 0; left: 88.2422px; top: 113.156px;"><div class="tooltip-header"><div class="tooltip-header-item">January</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">65</span></div></div></div></div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">31</div>
                    <div>Nouvelles inscriptions</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart2" height="105" width="291" style="display: block; height: 70px; width: 194px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>En attente de paiement</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="105" width="339" style="display: block; height: 70px; width: 226px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">14</div>
                    <div>Members Expirés</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas class="chart chartjs-render-monitor" id="card-chart4" height="105" width="291" style="display: block; height: 70px; width: 194px;"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
<div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-facebook">
                    <i class="fa fa-facebook"></i>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="social-box-chart-1" height="144" width="340" class="chartjs-render-monitor" style="display: block; height: 96px; width: 227px;"></canvas>
                    <div id="social-box-chart-1-tooltip" class="chartjs-tooltip bottom top" style="opacity: 0; left: 103.518px; top: 59.52px;"><div class="tooltip-header"><div class="tooltip-header-item">February</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">59</span></div></div></div></div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">89k</div>
                      <div class="text-uppercase text-muted small">friends</div>
                    </div>
                    <div>
                      <div class="text-value">459</div>
                      <div class="text-uppercase text-muted small">feeds</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-twitter">
                    <i class="fa fa-twitter"></i>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="social-box-chart-2" height="144" width="340" class="chartjs-render-monitor" style="display: block; height: 96px; width: 227px;"></canvas>
                    <div id="social-box-chart-2-tooltip" class="chartjs-tooltip top bottom" style="opacity: 0; left: 123.482px; top: 17.28px;"><div class="tooltip-header"><div class="tooltip-header-item">June</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgba(255, 255, 255, 0.55);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">41</span></div></div></div></div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">973k</div>
                      <div class="text-uppercase text-muted small">followers</div>
                    </div>
                    <div>
                      <div class="text-value">1.792</div>
                      <div class="text-uppercase text-muted small">tweets</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-linkedin">
                    <i class="fa fa-linkedin"></i>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="social-box-chart-3" height="144" width="340" class="chartjs-render-monitor" style="display: block; height: 96px; width: 227px;"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">500+</div>
                      <div class="text-uppercase text-muted small">contacts</div>
                    </div>
                    <div>
                      <div class="text-value">292</div>
                      <div class="text-uppercase text-muted small">feeds</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-google-plus">
                    <i class="fa fa-google-plus"></i>
                    <div class="chart-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="social-box-chart-4" height="144" width="340" class="chartjs-render-monitor" style="display: block; height: 96px; width: 227px;"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value">894</div>
                      <div class="text-uppercase text-muted small">followers</div>
                    </div>
                    <div>
                      <div class="text-value">92</div>
                      <div class="text-uppercase text-muted small">circles</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Traffic &amp; Sales</div>
                  <div class="card-body">
                    
                    <!-- /.row-->
                    <br>
                    <table class="table table-responsive-sm table-hover table-outline mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center">
                            <i class="icon-people"></i>
                          </th>
                          <th>User</th>
                          <th class="text-center">Country</th>
                          <th>Usage</th>
                          <th class="text-center">Payment Method</th>
                          <th>Activity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="img/avatars/1.jpg" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-success"></span>
                            </div>
                          </td>
                          <td>
                            <div>Yiorgos Avraamu</div>
                            <div class="small text-muted">
                              <span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>50%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <strong>10 sec ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-danger"></span>
                            </div>
                          </td>
                          <td>
                            <div>Avram Tarasios</div>
                            <div class="small text-muted">
                              <span>Recurring</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>10%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fa fa-cc-visa" style="font-size:24px"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <strong>5 minutes ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div>Quintin Ed</div>
                            <div class="small text-muted">
                              <span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>74%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <strong>1 hour ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-secondary"></span>
                            </div>
                          </td>
                          <td>
                            <div>Enéas Kwadwo</div>
                            <div class="small text-muted">
                              <span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>98%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fa fa-paypal" style="font-size:24px"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <strong>Last month</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-success"></span>
                            </div>
                          </td>
                          <td>
                            <div>Agapetus Tadeáš</div>
                            <div class="small text-muted">
                              <span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>22%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fa fa-google-wallet" style="font-size:24px"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <strong>Last week</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-danger"></span>
                            </div>
                          </td>
                          <td>
                            <div>Friderik Dávid</div>
                            <div class="small text-muted">
                              <span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>43%</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fa fa-cc-amex" style="font-size:24px"></i>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div>
                            <strong>Yesterday</strong>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
@section('scripts')
@parent

@endsection
@endsection