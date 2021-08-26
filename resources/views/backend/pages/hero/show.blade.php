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
                <td><img src="{{ asset('public/img/profile_image/'.$row->image) }}" class="rounded-circle z-depth-2 mb-2" alt="Cinque Terre" style="width:200px;height:200px;"></td>
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
        @endforeach
        </table>
        
      </div>
      <a class="nav-link" href="{{ route('admin.hero') }}"><button  class="btn btn-success  float-right">Back</button></a>
    </div>
    <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 @include('backend.partials.footer')
  <!-- partial -->

@endsection
