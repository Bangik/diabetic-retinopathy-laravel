@extends('layouts.admin.app')
@section('content')
<div class="mb-3">
  <h1 class="h3 mb-3"><strong>Start</strong> Examination</h1>
</div>
<div class="row">
  <div class="col-12 col-lg-6">
    <div class="card">
      <img class="card-img-top" src="{{$examination->file}}" alt="Left Retina eye" id="img-retina">
      <div class="card-header">
        <h5 class="card-title mb-0">Upload the left retina eye of patient {{$examination->patient->name}}</h5>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <input type="file" name="upload_file">
        </div>
        {{-- add progress bar --}}
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" id="progress-bar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" id="btn-upload">Upload</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6">
    <div class="card">
      <img class="card-img-top" src="{{$examination->file2}}" alt="Right Retina eye" id="img-retina2">
      <div class="card-header">
        <h5 class="card-title mb-0">Upload the right retina eye of patient {{$examination->patient->name}}</h5>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <input type="file" name="upload_file2">
        </div>
        <div class="progress mb-3">
          <div class="progress-bar" role="progressbar" id="progress-bar2" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" id="btn-upload2">Upload</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Fill the form result</h5>
      </div>
      <div class="card-body">
        <form action="{{route('doctor.examination.update', $examination->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Examination Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Type Examination name" value="{{ $examination->name }}">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Examination Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Type Examination description">{{ $examination->description }}</textarea>
            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Left Retina Result</label>
            <select name="result" id="result" class="form-select @error('result') is-invalid @enderror">
              <option value="0" {{ $examination->result == '0' ? 'selected' : '' }}>Normal</option>
              <option value="1" {{ $examination->result == '1' ? 'selected' : '' }}>Diabetic Retinopathy Mild</option>
              <option value="2" {{ $examination->result == '2' ? 'selected' : '' }}>Diabetic Retinopathy Moderate</option>
              <option value="3" {{ $examination->result == '3' ? 'selected' : '' }}>Diabetic Retinopathy Severe</option>
              <option value="4" {{ $examination->result == '4' ? 'selected' : '' }}>Diabetic Retinopathy Proliferative</option>
            </select>
            @error('result')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Right Retina Result</label>
            <select name="result2" id="result2" class="form-select @error('result2') is-invalid @enderror">
              <option value="0" {{ $examination->result2 == '0' ? 'selected' : '' }}>Normal</option>
              <option value="1" {{ $examination->result2 == '1' ? 'selected' : '' }}>Diabetic Retinopathy Mild</option>
              <option value="2" {{ $examination->result2 == '2' ? 'selected' : '' }}>Diabetic Retinopathy Moderate</option>
              <option value="3" {{ $examination->result2 == '3' ? 'selected' : '' }}>Diabetic Retinopathy Severe</option>
              <option value="4" {{ $examination->result2 == '4' ? 'selected' : '' }}>Diabetic Retinopathy Proliferative</option>
            </select>
            @error('result2')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Examination Action</label>
            <textarea class="form-control @error('action') is-invalid @enderror" name="action" placeholder="Type Examination action">{{ $examination->action }}</textarea>
            @error('action')<div class="invalid-feedback">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <button class="btn btn-primary">Save</button>
          </div>
          <input type="hidden" name="file" value="{{$examination->file}}">
          <input type="hidden" name="file2" value="{{$examination->file2}}">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{asset('js/jquery-3.5.1.js')}}"></script>
<script>
  $(document).ready(function() {
    $('#btn-upload').click(function() {
      var file = $('input[name=upload_file]').prop('files')[0];
      var formData = new FormData();
      formData.append('file', file);
      $.ajax({
        url: "{{env('APP_FLASK_URL') . '/upload'}}",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data.stage == '0' || data.stage == 0) {
            $('#result').val('0');
          } else if(data.stage == '1' || data.stage == 1) {
            $('#result').val('1');
          } else if(data.stage == '2' || data.stage == 2) {
            $('#result').val('2');
          } else if(data.stage == '3' || data.stage == 3) {
            $('#result').val('3');
          } else if(data.stage == '4' || data.stage == 4) {
            $('#result').val('4');
          } 
          
          $('#img-retina').attr('src', "{{env('APP_FLASK_URL')}}/" + data.url_image);
          $('input[name=file]').val("{{env('APP_FLASK_URL')}}/" +data.url_image);
          $('input[name=upload_file]').val('');

          // update database
          $.ajax({
            url: "{{route('doctor.examination.updateImage', $examination->id)}}",
            type: "POST",
            data: {
              _token: "{{csrf_token()}}",
              _method: "PUT",
              file: $('input[name=file]').val(),
              result: data.stage,
            },
            error: function(data) {
              console.log(data);
            }
          });
        },
        xhr: function() {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener("progress", function(evt) {
            if(evt.lengthComputable) {
              var percentComplete = evt.loaded / evt.total;
              percentComplete = parseInt(percentComplete * 100);
              $('#progress-bar').width(percentComplete + '%');
              $('#progress-bar').html(percentComplete + '%');
            }
          }, false);
          return xhr;
        },
        error: function(data) {
          console.log(data);
        }
      });
    });

    // right eye
    $('#btn-upload2').click(function() {
      var file = $('input[name=upload_file2]').prop('files')[0];
      var formData = new FormData();
      formData.append('file', file);
      $.ajax({
        url: "{{env('APP_FLASK_URL') . '/upload'}}",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data.stage == '0' || data.stage == 0) {
            $('#result2').val('0');
          } else if(data.stage == '1' || data.stage == 1) {
            $('#result2').val('1');
          } else if(data.stage == '2' || data.stage == 2) {
            $('#result2').val('2');
          } else if(data.stage == '3' || data.stage == 3) {
            $('#result2').val('3');
          } else if(data.stage == '4' || data.stage == 4) {
            $('#result2').val('4');
          } 
          
          $('#img-retina2').attr('src', "{{env('APP_FLASK_URL')}}/" + data.url_image);
          $('input[name=file2]').val("{{env('APP_FLASK_URL')}}/" +data.url_image);
          $('input[name=upload_file2]').val('');

          $.ajax({
            url: "{{route('doctor.examination.updateImage', $examination->id)}}",
            type: "POST",
            data: {
              _token: "{{csrf_token()}}",
              _method: "PUT",
              file2: $('input[name=file2]').val(),
              result2: data.stage,
            },
            error: function(data) {
              console.log(data);
            }
          });
        },
        xhr: function() {
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener("progress", function(evt) {
            if(evt.lengthComputable) {
              var percentComplete = evt.loaded / evt.total;
              percentComplete = parseInt(percentComplete * 100);
              $('#progress-bar2').width(percentComplete + '%');
              $('#progress-bar2').html(percentComplete + '%');
            }
          }, false);
          return xhr;
        },
        error: function(data) {
          console.log(data);
        }
      });
    });
  });
</script>
@endsection