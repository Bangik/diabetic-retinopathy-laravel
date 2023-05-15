@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Edit</strong> Doctor</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Fill this form for edit doctor</h5>
      </div>
      <div class="card-body">
        <form action="{{route('admin.doctor.update', $doctor->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Name</label> <small class="text-danger">*</small>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Doctor name" value="{{ $doctor->name }}">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">IC / No Passport / ID Number</label> <small class="text-danger">*</small>
            <input type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" placeholder="Doctor ID" value="{{ $doctor->id_number }}">
            @error('id_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Doctor email" value="{{ $doctor->email }}">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Doctor phone number" value="{{ $doctor->phone_number }}">
            @error('phone_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Doctor address" value="{{ $doctor->address }}">
            @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Doctor age" value="{{ $doctor->age }}">
            @error('age')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-select @error('gender') is-invalid @enderror">
              <option value="male" {{$doctor->gender == 'male' ? 'selected' : ''}}>Male</option>
              <option value="female" {{$doctor->gender == 'female' ? 'selected' : ''}}>Female</option>
            </select>
            @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select @error('status') is-invalid @enderror">
              <option value="active" {{$doctor->status == 'active' ? 'selected' : ''}}>Active</option>
              <option value="deactive" {{$doctor->status == 'deactive' ? 'selected' : ''}}>Deactive</option>
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