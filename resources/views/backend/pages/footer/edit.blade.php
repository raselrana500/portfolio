@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <h2>Footer Information</h2> 
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.footer.update',$footer->id) }}">
          @csrf
          @include('backend.partials.messagess')

          <div class="form-group">
            <label><strong>Name</strong></label>
            <input type="text" name="name" class="form-control"  value="{{ $footer->name }}">
          </div>

          <div class="form-group">
            <label><strong>Declare Text</strong></label>
            <input type="text" name="declare" class="form-control"  value="{{ $footer->declare }}">
          </div>

          <div class="form-group">
            <label><strong>Copyright Text</strong></label>
            <input type="text" name="copyright" class="form-control"  value="{{ $footer->copyright }}">
          </div>

          <div class="form-group">
            <label><strong>Developer Name</strong></label>
            <input type="text" name="developer" class="form-control"  value="{{ $footer->developer }}">
          </div>

          <div class="form-group">
            <label><strong>Link to your footer Name </strong></label>
            <input type="text" name="link" class="form-control"  value="{{ $footer->link }}">
          </div>
          

        </div>
          <p><button type="submit" class="btn btn-primary ml-4">Update</button></p>     
        </form>  
        <a class="nav-link" href="{{ route('admin.footer') }}"><button  class="btn btn-success  float-right">Back</button></a>
        
      </div>
      </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->
@endsection
