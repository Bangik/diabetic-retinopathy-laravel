@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Edit</strong> Patient</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Fill this form for edit patient</h5>
      </div>
      <div class="card-body">
        <form action="{{route('admin.register-patient.update', $patient->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Name</label> <small class="text-danger">*</small>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Patient name" value="{{ $patient->name }}">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">IC / No Passport / ID Number</label> <small class="text-danger">*</small>
            <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" placeholder="Patient ID" value="{{ $patient->id_number }}">
            @error('id_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label> <small class="text-danger">*</small>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Patient email" value="{{ $patient->email }}">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Patient phone number" value="{{ $patient->phone_number }}">
            @error('phone_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Patient address" value="{{ $patient->address }}">
            @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Patient age" value="{{ $patient->age }}">
            @error('age')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-select @error('gender') is-invalid @enderror">
              <option value="male" {{$patient->gender == 'male' ? 'selected' : ''}}>Male</option>
              <option value="female" {{$patient->gender == 'female' ? 'selected' : ''}}>Female</option>
            </select>
            @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select @error('status') is-invalid @enderror">
              <option value="active" {{$patient->status == 'active' ? 'selected' : ''}}>Active</option>
              <option value="deactive" {{$patient->status == 'deactive' ? 'selected' : ''}}>Deactive</option>
            </select>
            @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
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