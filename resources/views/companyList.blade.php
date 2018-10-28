@extends('userPanel')


@section('content')


<div class="formBox" style="min-height: 50px; width: 70%; margin: 0 auto;">
  

<h1 style="text-align: center; padding: 15px;">ALL REGISTERED COMPANY NAMES</h1>


  <div class="box-content" style="width: 118%;">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">COMPANY NAME</th>
          <th scope="col">OWNER NAME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">PHONE</th>
          <th scope="col">COMPANY TYPE</th>
          <th scope="col">ADDRESS</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>

        @foreach($allCompanyName as $showCompanyDetails)

        <tr>
          <th scope="row">{{ $showCompanyDetails->id }}</th>
          <td>{{ $showCompanyDetails->company_name }}</td>
          <td>{{ $showCompanyDetails->owner_name }}</td>
          <td>{{ $showCompanyDetails->email }}</td>
          <td>{{ $showCompanyDetails->phone }}</td>
          <td>{{ $showCompanyDetails->company_type }}</td>
          <td>{{ $showCompanyDetails->address }}</td>


          <td>
          <a href="">
            <button class="btn btn-primary">EDIT</button>
          </a>
          <a href="">
            <button class="btn btn-danger">DELETE</button>
          </a>
          
        </td>


        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            
  </div>
</div>


@endsection