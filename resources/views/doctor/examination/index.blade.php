@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>List</strong> Examination Queue</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    @if (session()->has('success'))
    <div class="alert alert-primary alert-dismissible" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <div class="alert-message">
        <strong>{{session()->get('success')}}</strong>
      </div>
    </div>
    @endif
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">List of examination queue</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="datatables-reponsive" class="table table-striped" width="100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Queue</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($examinations as $examination)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$examination->patient->name}}</td>
                <td>{{$examination->doctor->name}}</td>
                <td>{{$examination->queue_number}}</td>
                <td>{{$examination->status}}</td>
                <td>
                  @if ($examination->status == 'waiting')
                    <a href="{{route('doctor.examination.edit', $examination->id)}}" class="btn btn-sm btn-primary">Start Examination</a>
                  @elseif ($examination->status == 'be examined')
                    <a href="{{route('doctor.examination.edit', $examination->id)}}" class="btn btn-sm btn-primary">Continue Examination</a>
                  @elseif ($examination->status == 'examined')
                    <a href="{{route('doctor.examination.show', $examination->id)}}" class="btn btn-sm btn-primary">Show Result</a>
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