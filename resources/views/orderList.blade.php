@extends('userPanel')


@section('content')


<div class="formBox" style="min-height: 50px; width: 70%; margin: 0 auto;">
  

<h1 style="text-align: center; padding: 15px;">VIEW ALL ORDERS HERE</h1>


  <div class="box-content" style="width: 118%;">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Agent Name</th>
          <th scope="col">Parcel Description</th>
          <th scope="col">Weight</th>
          <th scope="col">Order Date</th>
          <th scope="col">Booking Amount</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($viewAllOrders as $showOrdersDetails)

        <tr>
          <th scope="row">{{ $showOrdersDetails->id }}</th>
          <td>{{ $showOrdersDetails->agent_name }}</td>
          <td>{{ $showOrdersDetails->parcel_desc }}</td>
          <td>{{ $showOrdersDetails->weight }}</td>
          <td>{{ $showOrdersDetails->order_date }}</td>
          <td>{{ $showOrdersDetails->booking_amount }}</td>
          <td>{{ $showOrdersDetails->address }}</td>


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