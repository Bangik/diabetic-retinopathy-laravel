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
  <div class="col-xl-6 col-xxl-7">
    <div class="card flex-fill w-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Queue</h5>
      </div>
      <div class="card-body pt-2 pb-3">
        <div class="chart chart-sm">
          <h1 class="mt-1 mb-3">Q123</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-xxl-5 d-flex">
    <div class="w-100">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Doctor 1</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="user"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">Q123</h1>
              <div class="mb-0">
                <span class="text-muted">Examination Room 1</span>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">Doctor 2</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="user"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">Q122</h1>
              <div class="mb-0">
                <span class="text-muted">Examination Room 2</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">-</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="user"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">-</h1>
              <div class="mb-0">
                <span class="text-muted">Examination Room 3</span>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">-</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="user"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">-</h1>
              <div class="mb-0">
                <span class="text-muted">Examination Room 4</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection