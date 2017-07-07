@if (count($tasks) > 0)

    	<div class="panel pannel-default">

    		<div class="panel pannel-heading">

    			Update Customer	

    		</div>
    		

	    	<div class="panel pannel-body">

	    		<table class="table table-striped task-tabel">

	    		<tbody>

	    		 <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
	    			
	    			@foreach ($customers as $customer)

	    				<tr>
	    					<td class="table-text">

	    						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           		<label for="name" class="col-md-4 control-label">Name</label>

                            		<div class="col-md-6">
                                		<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                		@if ($errors->has('name'))
                                    		<span class="help-block">
                                       	 		<strong>{{ $errors->first('name') }}</strong>
                                    		</span>
                               		 	@endif
                            		</div>

                        		</div>
	    							
	    					</td>
	    					
	    					<td>
	    						
	    						<form action="/update/{{ $customer->id }}" method="POST">
						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button >Update</button>
						        </form>
	    						
	    					</td>

	    				</tr>


	    				<tr>
	    					<td class="table-text">

	    						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           		<label for="email" class="col-md-4 control-label">email</label>

                            		<div class="col-md-6">
                                		<input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                		@if ($errors->has('email'))
                                    		<span class="help-block">
                                       	 		<strong>{{ $errors->first('email') }}</strong>
                                    		</span>
                               		 	@endif
                            		</div>

                        		</div>
	    							
	    					</td>
	    					
	    					<td>
	    						
	    						<form action="/update/{{ $customer->id }}" method="POST">
						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button >Update </button>
						        </form>
	    						
	    					</td>

	    				</tr>

	    				<tr>
	    					<td class="table-text">

	    						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           		<label for="customer_number" class="col-md-4 control-label">customer number</label>

                            		<div class="col-md-6">
                                		<input id="customer_number" type="text" class="form-control" name="customer_number" value="{{ old('customer_number') }}" required autofocus>

                                		@if ($errors->has('customer_number'))
                                    		<span class="help-block">
                                       	 		<strong>{{ $errors->first('customer_number') }}</strong>
                                    		</span>
                               		 	@endif
                            		</div>

                        		</div>
	    							
	    					</td>
	    					
	    					<td>
	    						
	    						<form action="/update/{{ $customer->id }}" method="POST">
						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button >Update</button>
						        </form>
	    						
	    					</td>

	    				</tr>

	    				<tr>
	    					<td class="table-text">

	    						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           		<label for="address" class="col-md-4 control-label">address</label>

                            		<div class="col-md-6">
                                		<input id="address" type="textarea" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                		@if ($errors->has('address'))
                                    		<span class="help-block">
                                       	 		<strong>{{ $errors->first('address') }}</strong>
                                    		</span>
                               		 	@endif
                            		</div>

                        		</div>
	    							
	    					</td>
	    					
	    					<td>
	    						
	    						<form action="/update/{{ $customer->id }}" method="POST">
						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button >Update</button>
						        </form>
	    						
	    					</td>

	    				</tr>

	    			@endforeach

	    		</form>

	    		</tbody>

	    		</table>
	    		
	    	</div>

	    </div>

@endif