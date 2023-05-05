@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Register</strong> Examination</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Register new examination for patient and assign the doctor</h5>
      </div>
      <div class="card-body">
        <form action="{{route('admin.examination.store')}}" method="post">
          @csrf
          <div class="mb-3">
            <label class="form-label">Search Patient</label>
            <select name="patient_id" class="form-select @error('patient_id') is-invalid @enderror">
              <option value="">Select Patient</option>
              @foreach ($patients as $patient)
                <option value="{{ $patient->id }}" {{$patient->id == $id ? 'selected' : ''}}>{{ $patient->name }}</option>
              @endforeach
            </select>
            @error('patient_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Select Doctor or optomethris for patient</label>
            <select name="doctor_id" class="form-select @error('doctor_id') is-invalid @enderror">
              <option value="">Select Doctor</option>
              @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
              @endforeach
            </select>
            @error('doctor_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Select Room</label>
            <select name="room_number" class="form-select @error('room_number') is-invalid @enderror">
              <option value="">Select Room</option>
              <option value="1">Room 1</option>
              <option value="2">Room 2</option>
              <option value="3">Room 3</option>
              <option value="4">Room 4</option>
            </select>
            @error('room_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
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