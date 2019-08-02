@extends('backend')
@section('icon','fa-home')
@section('title','Dashboard')

@section('main')
<div class="row">
<div class="col-xl-6 grid-margin stretch-card flex-column">
    <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body d-flex flex-column justify-content-between"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <p class="mb-0 text-muted">Transactions</p>
            <p class="mb-0 text-muted">+1.37%</p>
          </div>
          <h4>1352</h4>
          <canvas id="transactions-chart-dark" class="mt-auto chartjs-render-monitor" height="81" style="display: block; height: 65px; width: 231px;" width="288"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body d-flex flex-column justify-content-between"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <div>
              <p class="mb-2 text-muted">Sales</p>
              <h6 class="mb-0">563</h6>
            </div>
            <div>
              <p class="mb-2 text-muted">Orders</p>
              <h6 class="mb-0">720</h6>
            </div>
            <div>
              <p class="mb-2 text-muted">Revenue</p>
              <h6 class="mb-0">5900</h6>
            </div>
          </div>
          <canvas id="sales-chart-a-dark" class="mt-auto chartjs-render-monitor" height="81" width="288" style="display: block; height: 65px; width: 231px;"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="row h-100">
    <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
      <div class="card">
        <div class="card-body d-flex flex-column justify-content-between"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <p class="text-muted">Sales Analytics</p>
          <div class="d-flex justify-content-between align-items-center mb-2">
            <h3 class="mb-">27632</h3>
            <h3 class="mb-">78%</h3>
          </div>
          <canvas id="sales-chart-b-dark" class="mt-auto chartjs-render-monitor" height="47" width="288" style="display: block; height: 38px; width: 231px;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row h-100">
            <div class="col-6 d-flex flex-column justify-content-between"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <p class="text-muted">CPU</p>
              <h4>55%</h4>
              <canvas id="cpu-chart" class="mt-auto chartjs-render-monitor" width="130" height="63" style="display: block; height: 51px; width: 104px;"></canvas>
            </div>
            <div class="col-6 d-flex flex-column justify-content-between"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <p class="text-muted">Memory</p>
              <h4>123,65</h4>
              <canvas id="memory-chart" class="mt-auto chartjs-render-monitor" width="130" height="63" style="display: block; height: 51px; width: 104px;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-6 grid-margin stretch-card flex-column">
  <h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
  <div class="row h-100">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between align-items-start flex-wrap">
            <div>
              <p class="mb-3">Monthly Increase</p>
              <h3>67842</h3>
            </div>
            <div id="income-chart-dark-legend" class="d-flex flex-wrap mt-1 mt-md-0"><div class="d-flex align-items-center mr-3"><div class="mr-2" style="width: 12px; border-radius: 50%; height: 12px; background-color: rgb(164, 60, 218); --darkreader-inline-bgcolor:#661b8d;" data-darkreader-inline-bgcolor=""></div><p class="mb-0">Register User</p></div><div class="d-flex align-items-center"><div class="mr-2" style="width: 12px; border-radius: 50%; height: 12px; background-color: rgb(0, 200, 191); --darkreader-inline-bgcolor:#00c8bf;" data-darkreader-inline-bgcolor=""></div><p class="mb-0">Premium User</p></div></div>
          </div>
          <canvas id="income-chart-dark" width="677" height="338" class="chartjs-render-monitor" style="display: block; height: 271px; width: 542px;"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
            <div class="col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body border-bottom">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Overall sales</h6>
                    <div class="dropdown">
                      <button class="btn bg-body p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 30 days
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="sales-chart-c" class="mt-2 chartjs-render-monitor" width="417" height="208" style="display: block; height: 167px; width: 334px;"></canvas>
                  <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <p class="text-muted">Gross Sales</p>
                      <h5>492</h5>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success mb-0">0.5%</p>
                        <i class="typcn typcn-arrow-up-thick text-success"></i>
                      </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <p class="text-muted">Purchases</p>
                      <h5>87k</h5>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success mb-0">0.8%</p>
                        <i class="typcn typcn-arrow-up-thick text-success"></i>
                      </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <p class="text-muted">Tax Return</p>
                      <h5>882</h5>
                      <div class="d-flex align-items-baseline">
                        <p class="text-danger mb-0">-04%</p>
                        <i class="typcn typcn-arrow-down-thick text-danger"></i>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="dropdown">
                      <button class="btn bg-body p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 days
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                      </div>
                    </div>
                    <p class="mb-0">overview</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card newsletter-card bg-gradient-warning">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center justify-content-center h-100">
                        <h5 class="mb-3 text-white">Newsletter</h5>
                        <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                          <div class="form-group mb-2 w-100">
                            <input type="text" class="form-control" placeholder="email address">
                          </div>
                          <button class="btn btn-danger btn-rounded mt-1" type="submit">Subscribe</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 stretch-card">
                  <div class="card profile-card bg-gradient-primary">
                    <div class="card-body">
                      <div class="row align-items-center h-100">
                        <div class="col-md-4">
                          <figure class="avatar mx-auto mb-4 mb-md-0">
                            <img src="../../images/faces/face20.jpg" alt="avatar">
                          </figure>
                        </div>
                        <div class="col-md-8">
                          <h5 class="text-white text-center text-md-left">Phoebe Kennedy</h5>
                          <p class="text-white text-center text-md-left">kennedy@gmail.com</p>
                          <div class="d-flex align-items-center justify-content-between info pt-2">
                            <div>
                              <p class="text-white font-weight-bold">Birth date</p>
                              <p class="text-white font-weight-bold">Birth city</p>
                            </div>
                            <div>
                              <p class="text-white">16 Sep 2019</p>
                              <p class="text-white">Netherlands</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body border-bottom">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Sales statistics</h6>
                    <div class="dropdown">
                      <button class="btn bg-body p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 days
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                        <h6 class="dropdown-header">Settings</h6>
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="sales-chart-d-dark" height="445" width="417" class="chartjs-render-monitor" style="display: block; height: 356px; width: 334px;"></canvas>
                </div>
              </div>
            </div>
          </div>
@stop()