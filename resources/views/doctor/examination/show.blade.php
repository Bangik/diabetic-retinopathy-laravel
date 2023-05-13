@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Examination</strong> Result</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="float-end">
          <a href="{{route('doctor.examination.print', $examination->id)}}" class="btn btn-primary btn-sm" target="_blank"><i data-feather="printer"></i> Print</a>
          <a href="{{route('doctor.examination.export', $examination->id)}}" class="btn btn-primary btn-sm"><i data-feather="file-text"></i> Export PDF</a>
        </div>
        <h5 class="card-title mb-0">Detail of examination result</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row" colspan="2">Examination Date</th>
                <td>{{Carbon\Carbon::parse($examination->created_at)->format('d F Y')}}</td>
              </tr>
              <tr>
                <th scope="row" colspan="2">Patient Name</th>
                <td>{{$examination->patient->name}}</td>
              </tr>
              <tr>
                <th scope="row" colspan="2">Examination Name</th>
                <td>{{$examination->name}}</td>
              </tr>
              <tr>
                <th scope="row" colspan="2">Examination Description</th>
                <td>{{$examination->description}}</td>
              </tr>
              <tr>
                <th scope="row" colspan="2">Examination Action</th>
                <td>{{$examination->action}}</td>
              </tr>
              <tr>
                <th scope="row" colspan="2">Doctor Name</th>
                <td>{{$examination->doctor->name}}</td>
              </tr>
              <tr>
                <th colspan="3" class="text-center">Examination Result</th>
              </tr>
              <tr>
                <th>Eye</th>
                <th>Retina</th>
                <th>Retinopathy Image</th>
              </tr>
              <tr>
                <td>Left</td>
                <td>
                  @if ($examination->result == 0)
                    Normal
                  @elseif ($examination->result == 1)
                    Diabetic Retinopathy Mild
                  @elseif ($examination->result == 2)
                    Diabetic Retinopathy Moderate
                  @elseif ($examination->result == 3)
                    Diabetic Retinopathy Severe
                  @elseif ($examination->result == 4)
                    Diabetic Retinopathy Proliferative
                  @endif
                </td>
                <td>
                  <img src="{{$examination->file}}" alt="left Retina eye" id="img-retina" class="img-fluid" width="35%">
                </td>
              </tr>
              <tr>
                <td>Right</td>
                <td>
                  @if ($examination->result2 == 0)
                    Normal
                  @elseif ($examination->result2 == 1)
                    Diabetic Retinopathy Mild
                  @elseif ($examination->result2 == 2)
                    Diabetic Retinopathy Moderate
                  @elseif ($examination->result2 == 3)
                    Diabetic Retinopathy Severe
                  @elseif ($examination->result2 == 4)
                    Diabetic Retinopathy Proliferative
                  @endif
                </td>
                <td>
                  <img src="{{$examination->file2}}" alt="right Retina eye" id="img-retina2" class="img-fluid" width="35%">
                </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection