@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <strong>Manage Contact</strong> 
        <!-- <a class="nav-link float-right" href="{{ route('admin.pages.project.new') }}"><button  class="btn btn-success">Add New project</button></a> -->
        
      </div>
      <div class="card-body">
        @include('backend.partials.messagess')
        <table class="table table-hover table-striped " id="dataTable">
            <thead>
              <tr>
                <th>#</th>
                  <th>Name</th>
                  <th>Declare</th>
                  <th>Copyright</th>
                  <th style="text-align:center;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($footer as $row)
              <tr>
                  
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->declare }}</td>
                  <td>{{ $row->copyright }}</td>
                  
                  <td style="text-align:center;">
                    <a class="btn btn-info btn-sm" href="{{ route('admin.footer.edit',$row->id) }}">Edit</a>
                    <!-- <a class="btn btn-danger btn-sm"  href="{{ route('admin.contact.manage.delete',$row->id) }}">Delete</a> -->
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
