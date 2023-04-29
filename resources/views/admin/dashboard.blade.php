@extends('layouts.admin.app')
@section('content')
<div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h3><strong>Analytics</strong> Dashboard</h3>
  </div>

  <div class="col-auto ms-auto text-end mt-n1">
    <a href="#" class="btn btn-light bg-white me-2">Register New Patient</a>
    <a href="#" class="btn btn-primary">Register New Examination</a>
  </div>
</div>
<div class="row">
  <div class="col-xl-6 col-xxl-5 d-flex">
    <div class="w-100">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Sales</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="truck"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">2.382</h1>
              <div class="mb-0">
                <span class="badge badge-primary-light"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                <span class="text-muted">Since last week</span>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Visitors</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="users"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">14.212</h1>
              <div class="mb-0">
                <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                <span class="text-muted">Since last week</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Earnings</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="dollar-sign"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">$21.300</h1>
              <div class="mb-0">
                <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                <span class="text-muted">Since last week</span>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Orders</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="shopping-cart"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">64</h1>
              <div class="mb-0">
                <span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                <span class="text-muted">Since last week</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection