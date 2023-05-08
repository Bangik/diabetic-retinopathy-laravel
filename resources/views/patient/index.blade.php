@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>List</strong> Examination History</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">List of examination history</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="datatables-reponsive" class="table table-striped" width="100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Result</th>
                <th scope="col">Action</th>
                <th scope="col">Button</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($examinations as $examination)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{Carbon\Carbon::parse($examination->created_at)->format('d-M-Y')}}</td>
                <td>{{$examination->doctor->name}}</td>
                <td>{{$examination->result}}</td>
                <td>{{$examination->action}}</td>
                <td>
                  <a href="{{route('patient.examination.show', $examination->id)}}" class="btn btn-sm btn-primary">Detail Examination</a>
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