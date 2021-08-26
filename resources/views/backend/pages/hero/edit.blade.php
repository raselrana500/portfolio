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
        <form method="POST" action="{{ route('admin.hero.update',$data->id) }}" enctype="multipart/form-data">
          @csrf
          @include('backend.partials.messagess')
          <div class="form-group">
            <label></label>
            <img src="{{ asset('public/img/profile_image/'.$data->image) }}" class="rounded-circle z-depth-2 mb-2" alt="Cinque Terre" style="width:200px;height:200px;">
          </div>
          
          <div class="form-group">
            <label><strong>Upload Your New Image</strong></label>
            <input type="file" name="image" class="form-control">
          </div>

          <div class="form-group">
            <label><strong>name</strong></label>
            <input type="text" name="name" class="form-control"  value="{{ $data->name }}">
          </div>
          <div class="form-group">
            <label><strong>Profession</strong></label>
            <input type="text" name="profession" class="form-control"  value="{{ $data->profession }}">
          </div>
          <div class="form-group">
            <label><strong>Address</strong></label>
            <textarea name="address" class="form-control" cols="20" rows="6">{{ $data->address }}</textarea>
          </div>
          <div class="form-group">
            <label><strong>Email</strong></label>
            <input type="email" name="email" class="form-control"  value="{{ $data->email }}">
          </div>
          <div class="form-group">
            <label><strong>Phone</strong></label>
            <textarea name="phone" class="form-control" cols="20" rows="3">{{ $data->phone }}</textarea>
          </div>
          <div class="form-group">
            <label><strong>Upload Your CV</strong></label>
            <input type="file" name="cvlink" class="form-control">
          </div>
          

        </div>
          <p><button type="submit" class="btn btn-primary ml-4">Update</button></p>
        </form>
      <a class="nav-link" href="{{ route('admin.hero') }}"><button  class="btn btn-success  float-right">Back</button></a>
    </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->
@endsection
