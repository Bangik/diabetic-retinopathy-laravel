<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/">
      <span class="align-middle">Diabetic Retinopathy Detection</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Pages
      </li>

      <li class="sidebar-item {{request()->is('dashboard') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('dashboard')}}">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      @if (Auth::user()->role == 'admin')
      <li class="sidebar-item {{request()->is('admin/register-patient/create') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.register-patient.create')}}">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Register Patient</span>
        </a>
      </li>

      <li class="sidebar-item {{request()->is('admin/examination/create') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.examination.create')}}">
          <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Register Examination</span>
        </a>
      </li>

      <li class="sidebar-item {{request()->is('admin/examination') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.examination.index')}}">
          <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Queue Examination Today</span>
        </a>
      </li>

      <li class="sidebar-item {{request()->is('admin/examination-all') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.examination.indexAll')}}">
          <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Queue Examination All</span>
        </a>
      </li>
      @endif
      
      @if (Auth::user()->role == 'doctor')
      <li class="sidebar-item {{request()->is('doctor/examination') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('doctor.examination.index')}}">
          <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Queue Examination</span>
        </a>
      </li>
      @endif

      @if (Auth::user()->role == 'patient')
      <li class="sidebar-item {{request()->is('patient/examination') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('patient.examination.index')}}">
          <i class="align-middle" data-feather="eye"></i> <span class="align-middle">Examination History</span>
        </a>
      </li>
      @endif

      @if (Auth::user()->role == 'admin')
      <li class="sidebar-header">
        Management User
      </li>
      
      <li class="sidebar-item {{request()->is('admin/register-patient') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.register-patient.index')}}">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">List Patient</span>
        </a>
      </li>

      <li class="sidebar-item {{request()->is('admin/doctor') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.doctor.index')}}">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">List Doctor</span>
        </a>
      </li>

      <li class="sidebar-item {{request()->is('admin/doctor/create') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('admin.doctor.create')}}">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Register Doctor</span>
        </a>
      </li>
      @endif

      <li class="sidebar-header">
        Profile
      </li>

      <li class="sidebar-item {{request()->is('profile') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('profile.index')}}">
          <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Profile</span>
        </a>
      </li>

      <li class="sidebar-item {{request()->is('profile/change-password') ? 'active' : ''}}">
        <a class="sidebar-link" href="{{route('profile.change-password')}}">
          <i class="align-middle" data-feather="lock"></i> <span class="align-middle">Change Password</span>
        </a>
      </li>
    </ul>
  </div>
</nav>