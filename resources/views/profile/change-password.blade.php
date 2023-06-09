@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Edit</strong> Your Password</h1>
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
        <h5 class="card-title mb-0">Fill this form for edit your password</h5>
      </div>
      <div class="card-body">
        <form action="{{route('profile.update-password')}}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Current Password</label> <small class="text-danger">*</small>
            <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Your Current Password">
            @error('current_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">New Password</label> <small class="text-danger">*</small>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your New Password">
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Confirmation Password</label> <small class="text-danger">*</small>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Your Confirmation Password">
            @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
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