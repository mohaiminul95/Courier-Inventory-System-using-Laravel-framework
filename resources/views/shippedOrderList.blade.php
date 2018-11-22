@extends('userPanel')


@section('content')

@php $totalProfit = 0; @endphp

<div class="formBox" style="min-height: 700px; width: 70%; margin: 0 auto;">
  

<h1 style="text-align: center; padding: 15px;">ALL SHIPPED ORDERS HERE</h1>


  <div class="box-content" style="width: 118%;">

    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Agent Name</th>
          <th scope="col">Parcel Description</th>
          <th scope="col">Weight</th>
          <th scope="col">Order Date</th>
          <th scope="col">Booking Amount</th>
          <th scope="col">Processing Amount</th>
          <th scope="col">Profit </th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($viewAllOrders as $showOrdersDetails)

        <tr>
          <th scope="row">{{ $showOrdersDetails->id }}</th>
          <td>{{ $showOrdersDetails->company_name }}</td>
          <td>{{ $showOrdersDetails->parcel_desc }}</td>
          <td>{{ $showOrdersDetails->weight }}</td>
          <td>{{ $showOrdersDetails->order_date }}</td>
          <td>{{ $showOrdersDetails->booking_amount }}</td>
          <td>{{ $showOrdersDetails->processing_amount }}</td>
          <td>{{ $showOrdersDetails->net_profit }}</td>
          
@php $totalProfit = $totalProfit + $showOrdersDetails->net_profit; @endphp

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


    <div>
      <h3> Total profit: {{$totalProfit}} </h3>
    </div>
            
            
  </div>
</div>


@endsection