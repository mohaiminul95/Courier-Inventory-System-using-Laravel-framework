<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\order;

use DB;


class ordersController extends Controller
{

     
    
    public function selectOrderCompany($id) {

        $allCompanyName=company::all();
        return view('placeOrder')->with('allCompanyName',$allCompanyName);

    }


    public function insertOrder(Request $request) {



    	$order=new order;
    	$order->agent_id=$request->agent_id;
    	$order->order_id=$request->order_id;
    	$order->order_date=$request->order_date;
    	$order->parcel_desc=$request->parcel_desc;
    	$order->weight=$request->weight;
    	$order->booking_amount=$request->booking_amount;
    	$order->save();



    	if($order->save()) {
            $notification=array(
                'message'=>'Order Placed Successfully!',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }

        else
                echo "Error";


    }



    public function allOrder() {


        // $viewAllOrders=order::all();

        $viewAllOrders=DB::table('orders')
            ->join('companies','orders.agent_id','companies.id')
            ->select('orders.*','companies.company_name')
            ->get();


        //var_dump($viewAllOrders); die;
        return view('allOrderList')->with('viewAllOrders',$viewAllOrders);

    }



    public function viewPendingOrder() {


    	// $viewAllOrders=order::all();

    	$viewAllOrders=DB::table('orders')
    		->join('companies','orders.agent_id','companies.id')
    		->select('orders.*','companies.company_name')
    		->where('orders.is_processed','no')
    		->get();

        return view('pendingOrderList')->with('viewAllOrders',$viewAllOrders);

    }


    public function viewShippedOrder() {


        // $viewAllOrders=order::all();

        $viewAllOrders=DB::table('orders')
            ->join('companies','orders.agent_id','companies.id')
            ->select('orders.*','companies.company_name')
            ->where('orders.is_processed','yes')
            ->get();

        return view('shippedOrderList')->with('viewAllOrders',$viewAllOrders);

    }



    public function updateOrder(Request $request) {



        $order=order::find($id);
        $order->company_name = $request->company_name;
        $order->parcel_desc = $request->parcel_desc;
        $order->weight = $request->weight;
        $order->order_date = $request->order_date;
        $order->booking_amount = $request->booking_amount;
        $order->processing_amount = $request->processing_amount;
        $order->processing_date = $request->processing_date;
        $order->net_profit = $request->net_profit;
        $order->is_processed = $request->is_processed;
        $order->orderId = $request->orderId;
        $order->id = $request->id;
        $order->save();

        if($order->save()) {
            $notification=array(
                'message'=>'Order Placed Successfully!',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }

        else
                echo "Error";


    }


}
