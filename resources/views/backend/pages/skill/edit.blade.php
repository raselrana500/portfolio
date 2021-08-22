@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <h2>Hero Information</h2> 
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.pages.skill.update',$data->id) }}" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messagess')

          <div class="form-group">
            <label><strong>Skill Name</strong></label>
            <input type="text" name="skillname" class="form-control"  value="{{ $data->skillname }}">
          </div>
          <div class="form-group">
            <label><strong>Skill Value %</strong></label>
            <input type="text" name="skillvalue" class="form-control"  value="{{ $data->skillvalue }}">
          </div>
          <div class="form-group">
            <label><strong>Priority</strong></label>
            <input type="number" name="priority" class="form-control"  value="{{ $data->priority }}">
          </div>
          

        </div>
          <p><button type="submit" class="btn btn-primary ml-4">Update</button></p>
        </form>
      </div>
    </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->
@endsection
