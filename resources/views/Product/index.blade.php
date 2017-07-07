
@extends('layouts.app')

@section('content')



	<!-- Bootstrap Boilerplate... -->

	<div class="pannel-body">

		<!-- Display Validation Error -->

		@include('common.errors')


		 <!-- New Product Form -->

		 <form action="/product" method="POST" class="form-horizontal">

{{ csrf_field() }}


		 	<!-- Product Name -->

		 	<div class="form-group">

		 		<label for="product" class="col-sm-3 control-label"> Product </label>
		 		
		 		<div class="col-sm-6">

		 			<input type="text" name="name" id="product-name" class="form-control">
		 			
		 		</div>

		 	</div>




		 	<!-- Add Product Button -->

		 	<div class="form-group">

		 		<div class="col-sm-offset-3 col-sm-6">

		 			<button type="submit" class="btn btn-default">
		 				
		 				<i class="fa fa-plus"></i>  Add Product 

		 			</button>
		 			
		 		</div>
		 		
		 	</div>

		 </form>
		
	</div>


	<!-- Create Product Form... -->

    <!-- Current Product -->


    @if (count($product) > 0)

    	<div class="panel pannel-default">

    		<div class="panel pannel-heading">

    			Current Product	

    		</div>
    		

	    	<div class="panel pannel-body">

	    		<table class="table table-striped task-tabel">
	    			

	    		<!-- Table Heading -->
	    
	    		<thead>
	    			
	    			<th>Product</th>

	    			<th>&nbsp;</th>			

	    		</thead>


	    		<!-- Table Body -->

	    		<tbody>
	    			
	    			@foreach ($products as $product)

	    				<tr>
							
	    				<!-- Product Name -->

	    					<td class="table-text">

	    						<div>{{ $product->name }}</div>
	    							
	    					</td>
	    					
	    					<td>
	    						
	    						<form action="/product/{{ $product->id }}" method="POST">
						            {{ csrf_field() }}
						            {{ method_field('DELETE') }}

						            <button >Delete product</button>
						        </form>
	    						
	    					</td>

	    				</tr>

	    			@endforeach

	    		</tbody>

	    		</table>
	    		
	    	</div>

	    </div>

    @endif

@endsection
