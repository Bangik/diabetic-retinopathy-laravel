@extends('layouts.admin.app')
@section('content')
<div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h3><strong>Dashboard</strong></h3>
  </div>

  <div class="col-auto ms-auto text-end mt-n1">
    @if (Auth::user()->role == 'admin')
    <a href="{{route('admin.examination.create')}}" class="btn btn-light bg-white me-2">Register New Examination</a>
    <a href="{{route('admin.register-patient.create')}}" class="btn btn-primary">Register New Patient</a>
    @elseif (Auth::user()->role == 'doctor')
    <a href="{{route('doctor.examination.index')}}" class="btn btn-primary">Start Examination</a>
    @elseif (Auth::user()->role == 'patient')
    <a href="{{route('patient.examination.index')}}" class="btn btn-primary">Examination History</a>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-xl-6 col-xxl-7">
    <div class="card flex-fill w-100">
      <div class="card-header">
        <h5 class="card-title mb-0">{{$last_queue == null ? '-' : $last_queue->doctor->name}}</h5>
      </div>
      <div class="card-body pt-2 pb-3">
        <div class="chart chart-sm">
          <h1 class="mt-1 mb-3">{{$last_queue == null ? '-' : $last_queue->queue_number}}</h1>
          <div class="mb-0">
            <span class="text-muted">Examination Room {{$last_queue == null ? '-' : $last_queue->room_number}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-xxl-5 d-flex">
    <div class="w-100">
      <div class="row">
        <div class="col-sm-6">
          @for ($i = 0; $i < 2; $i++)
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">{{$be_examined_rooms12[$i] == null ? '-' : $be_examined_rooms12[$i]->doctor->name}}</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="user"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">{{$be_examined_rooms12[$i] == null ? '-' : $be_examined_rooms12[$i]->queue_number}}</h1>
              <div class="mb-0">
                <span class="text-muted">Examination Room {{$be_examined_rooms12[$i] == null ? '-' : $be_examined_rooms12[$i]->room_number}}</span>
              </div>
            </div>
          </div>
          @endfor
        </div>
        <div class="col-sm-6">
          @for ($j = 0; $j < 2; $j++)
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col mt-0">
                  <h5 class="card-title">{{$be_examined_rooms34[$j] == null ? '-' : $be_examined_rooms12[$j]->doctor->name}}</h5>
                </div>

                <div class="col-auto">
                  <div class="stat text-primary">
                    <i class="align-middle" data-feather="user"></i>
                  </div>
                </div>
              </div>
              <h1 class="mt-1 mb-3">{{$be_examined_rooms34[$j] == null ? '-' : $be_examined_rooms12[$j]->queue_number}}</h1>
              <div class="mb-0">
                <span class="text-muted">Examination Room {{$be_examined_rooms34[$j] == null ? '-' : $be_examined_rooms12[$j]->room_number}}</span>
              </div>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>
@if (Auth::user()->role == 'admin')
<div class="row">
  <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Last Patient</h5>
      </div>
      <div class="card-body px-4">
        <div class="table-responsive">
          <table id="datatables-reponsive" class="table table-striped" width="100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">ID Number</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$patient->name}}</td>
                <td>{{$patient->id_number}}</td>
                <td>{{$patient->status}}</td>
                <td>
                  <a href="{{route('admin.examination.create', $patient->id)}}" class="btn btn-sm btn-primary">New Examination</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@if (Auth::user()->role == 'doctor')
<div class="row">
  <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Queue Examination</h5>
      </div>
      <div class="card-body px-4">
        <div class="table-responsive">
          <table id="datatables-reponsive" class="table table-striped" width="100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Queue</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$patient->patient->name}}</td>
                <td>{{$patient->queue_number}}</td>
                <td>{{$patient->status}}</td>
                <td>
                  @if ($patient->status == 'waiting')
                    <a href="{{route('doctor.examination.edit', $patient->id)}}" class="btn btn-sm btn-primary">Start Examination</a>
                  @elseif ($patient->status == 'be examined')
                    <a href="{{route('doctor.examination.edit', $patient->id)}}" class="btn btn-sm btn-primary">Continue Examination</a>
                  @elseif ($patient->status == 'examined')
                    <a href="{{route('doctor.examination.show', $patient->id)}}" class="btn btn-sm btn-primary">Show Result</a>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@if (Auth::user()->role == 'patient')
<div class="row">
  <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Examination History</h5>
      </div>
      <div class="card-body px-4">
        <div class="table-responsive">
          <table id="datatables-reponsive" class="table table-striped" width="100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Result</th>
                <th scope="col">Action</th>
                <th scope="col">Button</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $patient)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{Carbon\Carbon::parse($patient->created_at)->format('d-M-Y')}}</td>
                <td>{{$patient->result}}</td>
                <td>{{$patient->action}}</td>
                <td>
                  <a href="{{route('patient.examination.show', $patient->id)}}" class="btn btn-sm btn-primary">Detail Examination</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@endsection

@section('script')
<script src="{{asset('js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/datatables.js')}}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	
</script>
@endsection