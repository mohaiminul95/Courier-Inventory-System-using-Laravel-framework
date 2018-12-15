<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\company;

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
        if(is_int($request->vendor_id)){
            $order->vendor_id=$request->vendor_id;
        }else{            
            $order->vendor_id=NULL;
        }
    	$order->order_id=$request->order_id;
    	$order->order_date=$request->order_date;
    	$order->parcel_desc=$request->parcel_desc;
    	$order->weight=$request->weight;
    	$order->booking_amount=$request->booking_amount;
        $order->payment_type=$request->payment_type;
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

        //dd("sdf");
        $viewAllOrders=DB::table('orders')
            ->join('companies','orders.agent_id','companies.id')
            ->select('orders.*','companies.company_name')
            ->where('orders.is_processed','no')
            ->get();
            
            $vendors = $this->getVendorList();


            //return  view('admin.products.create', compact('categorys','brands','selected_catagories','selected_brand'));

      //  return view('pendingOrderList')->with('viewAllOrders', $viewAllOrders);
              return view('pendingOrderList',compact('viewAllOrders','vendors'));

    }


    public function getVendorList() {
        return DB::table('companies')->select('companies.id', 'companies.company_name')->where('companies.company_type','vendor')->get();
    }


    public function viewShippedOrder() {


        // $viewAllOrders=order::all();

        $viewAllOrders=DB::table('orders')
            ->join('companies','orders.agent_id','companies.id')
            ->select('orders.*','companies.company_name', 'orders.net_profit')
            ->where('orders.is_processed','yes')
            ->get();


        return view('shippedOrderList')->with('viewAllOrders',$viewAllOrders);

    }



    public function updateOrder(Request $request) {


        
        $id = $request->id;
        $order=order::find($id);       
        $order->parcel_desc = $request->parcel_desc;
        $order->weight = $request->weight;
        $order->order_date = $request->order_date;
        $order->booking_amount = $request->booking_amount;
        $order->processing_amount = $request->processing_amount;
        $order->net_profit = $order->booking_amount - $order->processing_amount;
        $order->processing_date = $request->processing_date;
        $order->id = $request->id;
        $order->agent_id = $request->agent_id;
        $order->payment_type = $request->payment_type;

        if(is_numeric($request->vendor_id)){
            $order->vendor_id = $request->vendor_id;
            
        }else{
            $order->vendor_id = NULL;
        }

        
        if($request->is_processed == 1){
            $order->is_processed = 'yes';            
        }else{
            $order->is_processed = 'no';                        
        }     
       


        if($order->save()) {
         // echo "true";
        }

        else{
                echo "Error";
        }

    }


}
