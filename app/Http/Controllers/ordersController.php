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



    public function viewOrder() {


    	// $viewAllOrders=order::all();

    	$viewAllOrders=DB::table('orders')
    		->join('companies','orders.agent_id','companies.id')
    		->select('orders.*','companies.company_name')
    		->where('orders.is_processed','no')
    		->get();

        return view('orderList')->with('viewAllOrders',$viewAllOrders);

    }



}
