@extends('userPanel')


@section('content')

@php 
  $totalProfit = 0; 
  $totalCash = 0;
  $totalDue = 0;
@endphp

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
          <th scope="col">Payment Type</th>
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
          <td>{{ $showOrdersDetails->payment_type }}</td>
          <td>{{ $showOrdersDetails->net_profit }}</td>
          
          @php 
            
            if($showOrdersDetails->payment_type == "CASH"){
              $totalCash = $totalCash+$showOrdersDetails->net_profit;
            }else{
            
              $totalDue = $totalDue+$showOrdersDetails->net_profit;
            }            


            $totalProfit = $totalProfit + $showOrdersDetails->net_profit; 

          @endphp

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
      <h3> Total Cash: {{$totalCash}} </h3>
      <h3> Total Due: {{$totalDue}} </h3>
      <h3> Total profit: {{$totalProfit}} </h3>
    </div>
            
            
  </div>
</div>


@endsection