@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Edit</strong> Examination</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Edit the assigned doctor for patient {{$examination->patient->name}}</h5>
      </div>
      <div class="card-body">
        <form action="{{route('admin.examination.update', $examination->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Select Doctor or optomethris for patient</label>
            <select name="doctor_id" class="form-select @error('doctor_id') is-invalid @enderror">
              <option value="">Select Doctor</option>
              @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}" {{$doctor->id == $examination->doctor_id ? 'selected' : ''}}>{{ $doctor->name }}</option>
              @endforeach
            </select>
            @error('doctor_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <button class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection