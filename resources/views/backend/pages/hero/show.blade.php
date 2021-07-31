@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="card">
      <div class="card-header">
        <strong>View Hero Section Information</strong> 
      </div>
      <div class="card-body">
        
                
       
        <table>
        @foreach ($heroData as $row)
            <tr>
            <td></td>
                <td><img src="{{ asset('public/img/'.$row->image) }}" class="rounded-circle z-depth-2 mb-2" alt="Cinque Terre" style="width:200px;height:200px;"></td>
            </tr>
            <tr>
                <th>Name:  </th>
                <td>{{ $row->name }}</td>
            </tr>
            <tr>
                <th>Profession:  </th>
                <td>{{ $row->profession }}</td>
            </tr>
            <tr>
                <th>Address:  </th>
                <td>{{ $row->address }}</td>
            </tr>
            <tr>
                <th>Email:  </th>
                <td>{{ $row->email }}</td>
            </tr>
            <tr>
                <th>Phone:  </th>
                <td>{{ $row->phone }}</td>
            </tr>
            <tr>
                <th>Facebook link:  </th>
                <td>{{ $row->facebooklink }}</td>
            </tr>
            <tr>
                <th>Instagram link:  </th>
                <td>{{ $row->instagramlink }}</td>
            </tr>
            <tr>
                <th>Twitter link:  </th>
                <td>{{ $row->twitterlink }}</td>
            </tr>
            <tr>
                <th>Youtube link:  </th>
                <td>{{ $row->youtubelink }}</td>
            </tr>
            <tr>
                <th>LinkedIn link:  </th>
                <td>{{ $row->linkedlink }}</td>
            </tr>
            <tr>
                <th>CV link:  </th>
                <td>{{ $row->cvlink }}</td>
            </tr>
        @endforeach
        </table>
        
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
