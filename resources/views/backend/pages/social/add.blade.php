@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <h2>Add Social Link</h2> 
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.social.store') }}">
          @csrf
          @include('backend.partials.messagess')

          <div class="form-group">
            <label><strong>Name</strong></label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label><strong>Icon Name</strong></label>
            <input type="text" name="icon" class="form-control">
          </div>
          <div class="form-group">
            <label><strong>Link</strong></label>
            <input type="text" name="link" class="form-control">
          </div>
          <div class="form-group">
            <label><strong>Priority</strong></label>
            <input type="number" name="priority" class="form-control">
          </div>
          

        </div>
          <p><button type="submit" class="btn btn-primary ml-4">Submit</button></p>
        </form>
        <a class="nav-link" href="{{ route('admin.social') }}"><button  class="btn btn-success  float-right">Back</button></a>
      </div>
    </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->
@endsection
