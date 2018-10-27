<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\companyModel;

class companyController extends Controller
{
    public function insertCompany(Request $request) {

    	$company=new companyModel;
    	$company->company_name=$request->company_name;
    	$company->owner_name=$request->owner_name;
    	$company->email=$request->email;
    	$company->phone=$request->phone;
    	$company->company_type=$request->company_type;
    	$company->address=$request->address;
    	$company->save();



    	if($company->save()) {
            $notification=array(
                'message'=>'Company Information Added Successfully!',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }

        else
                echo "Error";

    }
}
