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
        @include('backend.partials.messagess')
        <table class="table table-hover table-striped " id="dataTable">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th style="text-align:center;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($hero as $row)
              <tr>
                  
                  <!-- <td>{{ $loop->index + 1 }}</td> -->
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td><img src="{{ asset('public/img/'.$row->image) }}" class="rounded-circle z-depth-2 mb-2" alt="Cinque Terre" style="width:50px;height:50px;"><br/></td>
                  
                  <td style="text-align:center;">
                    <a class="btn btn-success" href="{{ route('admin.hero.view',$row->id) }}">View</a>
                    <a class="btn btn-info" href="{{ route('admin.hero.edit',$row->id) }}">Edit</a>
                  </td>
                  
                    
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
    </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->
@endsection
