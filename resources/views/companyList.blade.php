@extends('userPanel')



@section('content')



<div class="formBox" style="min-height: 1000px; width: 70%; margin: 0 auto;">
  

<h1 style="text-align: center; padding: 15px;">ALL REGISTERED AGENTS NAMES</h1>


  <div class="box-content" style="width: 118%;">

    <table class="table table-striped display" id="datatable">
      <thead>
        <tr>
          <!-- <th scope="col">ID</th> -->
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
          <!-- <th scope="row">{{ $showCompanyDetails->id }}</th> -->
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
            <button class="btn btn-danger" onclick="deleteAgent({{ $showCompanyDetails->id }})">DELETE</button>
          </a>
          
        </td>


        </tr>


        @endforeach

        
      </tbody>
    </table>
            
            
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agent Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          

  <form class="form-horizontal"> @csrf  
              <fieldset>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Company Name</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="edit_company_name" type="text" name="company_name">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Owner Name</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="edit_owner_name" type="text" name="owner_name">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Email</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="edit_email" type="text" name="email">
                </div>
                </div>  
                <div class="control-group">
                <label class="control-label" for="focusedInput">Phone Number</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="edit_phone" type="text" name="phone">
                </div>
                </div>
                <div class="control-group">
                <label class="control-label" for="focusedInput">Company Type</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="edit_company_type" type="text" name="company_type">
                  </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="edit_address">Company Address</label>
                <div class="controls">
                  <input class="input-xlarge focused" id="edit_address" type="text" name="address">
                 </div>
                </div>  
                  <input id="agent_id" type="hidden" name="agent_id">
              </fieldset>
              </form>
          




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="updateAgent()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript">




function deleteAgent(id){
    
  var x = confirm("Are you sure?");

  if(x){
    $.ajax({
       type:'POST',
       url:'/courier/delete_company',
       data:{
            id : id,
            _token : '<?php echo csrf_token() ?>',
          },



       success:function(data){
         


       }
    });







  }


  
}

  
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
               url:'/courier/insertOrupdate_company',
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



@endsection
