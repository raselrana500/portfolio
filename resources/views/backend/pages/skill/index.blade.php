@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <strong>Manage Skill Information</strong> 
        <a class="nav-link float-right" href="{{ route('admin.pages.skill.new') }}"><button  class="btn btn-success">Add New Skill</button></a>
      </div>
      <div class="card-body">
        @include('backend.partials.messagess')
        <table class="table table-hover table-striped " id="dataTable">
            <thead>
              <tr>
                <th>#</th>
                  <th>Id</th>
                  <th>Skill Name</th>
                  <th>Skill Value</th>
                  <th>Priority</th>
                  <th style="text-align:center;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($skill as $row)
              <tr>
                  
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->skillname }}</td>
                  <td>{{ $row->skillvalue }}</td>
                  <td>{{ $row->priority }}</td>
                  
                  <td style="text-align:center;">
                    <a class="btn btn-info" href="{{ route('admin.pages.skill.edit',$row->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('admin.pages.skill.delete',$row->id) }}">Delete</a>
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
