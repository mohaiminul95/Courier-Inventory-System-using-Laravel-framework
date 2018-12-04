@extends('userPanel')


@section('content')


<div class="formBox" style="min-height: 50px; width: 70%; margin: 0 auto;">
	


<h1 style="text-align: center; padding: 15px;">ADD NEW AGENT</h1>

<div class="box-content">
						<form class="form-horizontal" action="{{ url('insertOrupdate_company') }}" method="POST"> @csrf  
							<fieldset>
								<div class="control-group">
				                <label class="control-label" for="focusedInput">Company Type</label>
				                <div class="controls">
				                  <select name="company_type" >
				                    <option value="Agent">Agent</option>
				                    <option value="Vendor">Vendor</option>
				                  </select>
				                 </div>
				                </div> 
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="company_name">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Owner Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="owner_name">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
								</div>
							  </div>	
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Phone Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="phone">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Description</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="company_desc">
							    </div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Company Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="address">
							   </div>
							  </div>  


							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Company</button>
									
							  </div>
							</fieldset>
						  </form>
					
					</div>
</div>


@endsection