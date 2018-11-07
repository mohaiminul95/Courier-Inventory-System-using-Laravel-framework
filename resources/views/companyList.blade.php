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
          <td id = "company_name_{{ $showCompanyDetails->id }}">{{ $showCompanyDetails->company_name }}</td>
          <td id = "owner_name_{{ $showCompanyDetails->id }}">{{ $showCompanyDetails->owner_name }}</td>
          <td id = "email_{{ $showCompanyDetails->id }}">{{ $showCompanyDetails->email }}</td>
          <td id = "phone_{{ $showCompanyDetails->id }}">{{ $showCompanyDetails->phone }}</td>
          <td id = "company_type_{{ $showCompanyDetails->id }}">{{ $showCompanyDetails->company_type }}</td>
          <td id = "address_{{ $showCompanyDetails->id }}">{{ $showCompanyDetails->address }}</td>


          <td>
          <a href="">
            <button class="btn btn-primary" onclick="edit({{ $showCompanyDetails->id }})"  data-toggle="modal" data-target="#editModal">EDIT</button>
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

<script type="text/javascript">
  
function edit(id) {

  $("#edit_company_name").val($("#company_name_"+id).html());
  $("#edit_owner_name").val($("#owner_name_"+id).html());
  $("#edit_email").val($("#email_"+id).html());
  $("#edit_phone").val($("#phone_"+id).html());
  $("#edit_company_type").val($("#company_type_"+id).html());
  $("#edit_address").val($("#address_"+id).html());
  $("#agent_id").val(id);

}


function updateAgent() {
  
 company_name = $("#edit_company_name").val();
 owner_name = $("#edit_owner_name").val();
 email = $("#edit_email").val();
 phone = $("#edit_phone").val();
 company_type = $("#edit_company_type").val();
 address = $("#edit_address").val();
 id = $("#agent_id").val();


 $.ajax({
               type:'POST',
               url:'/courier/insert_company',
               data:{company_name : company_name,
                    owner_name : owner_name,
                    email : email,
                    phone : phone,
                    company_type : company_type,
                    address : address,
                    id : id,
                    _token : '<?php echo csrf_token() ?>',
                  },



               success:function(data){
                
                  if(data == "true"){
                   $("#editModal").modal('hide');
                    $('#company_name_'+id).html(company_name);
                    $("#owner_name_"+id).html(owner_name);
                    $("#email_"+id).html(email);
                    $("#phone_"+id).html(phone);
                    $("#company_type_"+id).html(company_type);
                    $("#address_"+id).html(address);
                    
                  }
               }
            });

}



</script>



