
@if (count($customer) > 0)

    	<div class="panel pannel-default">

    		<div class="panel pannel-heading">

    			{{$customer->name}} Details	

    		</div>
    		

	    	<div class="panel pannel-body">

	    		<table class="table table-striped task-tabel">

	    		<tbody>

	    		 <form class="form-horizontal" method="POST" action="{{ url('customer/$customer->id/show') }}">
                        {{ csrf_field() }}
	    			
	    				<tr>
	    					<td class="table-text">

                           		<label for="name" class="col-md-4 control-label">Name</label>

                            		<div class="col-md-6">
                                		<input id="name" type="text" class="form-control" name="name" value="{{ $customer->name }}" required autofocus>
                               		 	
                            		</div>

                        		</div>
	    							
	    					</td>
	    				</tr>


	    				<tr>
	    					<td class="table-text">

	  
                           		<label for="email" class="col-md-4 control-label">email</label>

                            		<div class="col-md-6">

                                		<input id="email" type="text" class="form-control" name="email" value="{{ $customer->email }}" required autofocus>

                       
                            		</div>

                        		</div>
	    							
	    					</td>
	   
	    				</tr>

	    				<tr>
	    					<td class="table-text">

                           		<label for="customer_number" class="col-md-4 control-label">customer number</label>

                            		<div class="col-md-6">
                                		<input id="customer_number" type="text" class="form-control" name="customer_number" value="{{$customer->contact_number }}" required autofocus>
                                	</div>

	    				</tr>

	    				<tr>
	    					<td class="table-text">

	    					
                           		<label for="address" class="col-md-4 control-label">address</label>

                            		<div class="col-md-6">
                                		<input id="address" type="textarea" class="form-control" name="address" value="{{ $customer-> address }}" required autofocus>

                                	</div>
	    				</tr>
	    		</form>

	    		</tbody>

	    		</table>
	    		
	    	</div>

	    </div>

@endif

