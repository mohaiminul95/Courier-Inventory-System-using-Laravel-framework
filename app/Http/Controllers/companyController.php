<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\company;

use DB;

class companyController extends Controller
{   



    public function insertOrUpdateCompany(Request $request) {


    	
        $company = company::firstOrNew(['id'=>$request->id]);
    	$company->company_type=$request->company_type;
        $company->company_name=$request->company_name;
    	$company->owner_name=$request->owner_name;
    	$company->email=$request->email;
    	$company->phone=$request->phone;
    	$company->company_desc=$request->company_desc;
    	$company->address=$request->address;
    	

        //dd($company);

    	if($company->save()) {

            if($request->ajax()){
                return "true";
            }

            $notification=array(
                'message'=>'Company Information Added Successfully!',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }

        else
                echo "Error";

    }


      public function deleteCompany(Request $request) {
           
        if($request->ajax()){
            $id = $request->id;
            $company = new company();
            $company = company::find($id);

            
         
            echo $company->delete($id);
        }
    }




    public function addOrder() {

        return view('placeOrder');

    }

    public function displayCompanyName() {

        $allCompanyName=company::all();
        return view('placeOrder')->with('allCompanyName',$allCompanyName);

    }

    public function displayAllCompany() {

        $allCompanyName=company::all();
        return view('companyList')->with('allCompanyName',$allCompanyName);

    }
    


}
