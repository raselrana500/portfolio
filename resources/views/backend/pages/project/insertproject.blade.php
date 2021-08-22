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
        <form method="POST" action="{{ route('admin.pages.project.new.insert') }}" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messagess')

          <div class="form-group">
            <label><strong>Project Name</strong></label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label><strong>Description</strong></label>
            <textarea name="description" class="form-control" cols="20" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label><strong>Priority</strong></label>
            <input type="number" name="priority" class="form-control">
          </div>
          <div class="form-group">
            <label><strong>link</strong></label>
            <input type="text" name="link" class="form-control">
          </div>

          <div class="form-group">
            <label><strong>Upload Project Image</strong></label>
            <input type="file" name="image" class="form-control">
          </div>
          

        </div>
          <p><button type="submit" class="btn btn-primary ml-4">Insert</button></p>
        </form>
        <a class="nav-link" href="{{ route('admin.project.manage') }}"><button  class="btn btn-success  float-right">Back</button></a>
      </div>
    </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->
@endsection
