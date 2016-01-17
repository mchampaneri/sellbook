<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Book Details Page
@endsection

@section('styles')

@endsection

@section('content')

		<div class="page-content">
			<div class="container">
	 			<div class="portlet solid grey-cascade">	
		 			<div class="portlet-title">	 
			 			<div class="row ">
				 			<div class="col-md-8">			
				 				 <h2 style="text-align: center">	{{$book->name}} </h2> 	 				
				 			</div>	
				 			<div class="col-md-2 ">
								<form method="post" action="{{route('purchases.update',['id'=>$book->id])}}">
									{{ csrf_field()}}
									<input type="hidden" name="_method" value="put">
									<input type="submit" class="btn btn-success" value="Create Deal">
								</form>
								</div>
								<div class="col-md-2 ">
								<a href="{{route('purchases.index')}}" class="btn btn-primary"> Return Back </a>
				 				</div>
				 			</div>
		 			</div>
			 		<div class="portlet-body"  >
				 	<table class="table table-boarderd">
				 		<thead>
				 			<tr>
				 				<td>Book Price</td>
				 				<td>Condition</td>
				 				<td>Catagory</td>
				 				<td>Current Owner</td>
				 				<td>Email Address of Owner</td>
				 				<td></td>
				 			</tr>
				 		</thead>
				 		<tbody>
				 		<tr>	
				 			<td>	{{ $book->price }} </td>
				 			<td>	{{ $book->condition}} </td>
				 			<td>    {{ $book->catagory}} </td>
				 				<?php $Owner = $book->seller()->get()->first(); ?> 
				 			<td>	{{ $Owner->name}} </td>
				 			<td>    {{ $Owner->email}} </td>
				 		</tr>
				 		</tbody>
			 		</table>
				 	<div class="row">	
				 		<p><div class="col-sm-8">
				 			<h2> Description About Book</h2>							
				 			.... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book 
				 			.... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book .... Book 
				 			</div>
			 			</p>
			 		</div>		
			 		</div>
		 		</div>
	 		</div>
 		</div>
	
@endsection

@section('scripts')

@endsection