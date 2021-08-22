@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <strong>View Contact</strong> 
      </div>
      <div class="card-body">
        
                
       
        <table>
        @foreach ($showContact as $data)
            
            <tr>
                <th>Name: </th>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <th>Email: </th>
                <td>{{ $data->email }}</td>
            </tr>
            <tr>
                <th>Subject: </th>
                <td>{{ $data->subject }}</td>
            </tr>
            <tr>
                <th>Messege: </th>
                <td>{{ $data->messege }}</td>
            </tr>
            
        @endforeach
        </table>
        <a class="nav-link" href="{{ route('admin.contact.manage') }}"><button  class="btn btn-success  float-right">Back</button></a>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
    </div>
  </footer>
  <!-- partial -->

@endsection
