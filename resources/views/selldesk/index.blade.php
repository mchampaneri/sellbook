<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Sell Desk
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" 
	  href="{{asset('custom/css/selldesk.css')}}">
<link rel="stylesheet" type="text/css" 
		href="{{asset("plugins/datatables/datatables.min.css")}}">
<link rel="stylesheet" type="text/css" 
		href="{{asset("plugins/datatables/plugins/bootstrap/datatables.bootstrap.css")}}">
@endsection

@section('content')

		<div class="page-content">	
			
				<div class="portlet light">
					<div class="portlet-body">	
								<ul class="nav nav-tabs ">
									  <li class="active">
									    <a href="#new" data-toggle="tab">New</a>
									  </li>
									  <li class=>
									  	<a href="#inprogress" data-toggle="tab">Unsold</a>
									  </li>
									  <li class=>
									  	<a href="#sold" data-toggle="tab">Sold</a>
									  </li>
									  <li class=>
									  	<a href="#deals" data-toggle="tab">Deals</a>
									  </li>
								</ul>				
													
								<div class="tab-content">
									<div class="tab-pane " id="inprogress">
											<h2>In Progress</h2>
											<br>										
												<table class="table table-hover" id="table1">
													<thead>
														<tr>
															<th>Book Name</th>
															<th>Price</th>
															<th>Edit</th>
															<th>Remove</th>
														</tr>
													</thead>
													<tbody>
													@if(isset($user))
														@foreach ($user->sells()->where('status',0)->get() as $book) 
															<tr >
																<td>{{$book->name}}</td>
																<td>{{$book->price}}</td>						
																<td><a class="btn btn-primary"
																       href="{{route('sells.edit',['id'=>$book->id])}}">
																       Edit</a>
																</td>
																<td>
																	<form class="form-horizontal" role="form" method="POST" action="{{ route('sells.destroy',['id'=>$book->id]) }}">
			                       									 {!! csrf_field() !!}
			                       									 	<input type="hidden" name="_method" value="delete">
																		<input type="submit" class="btn btn-danger" value="Remove Book">
																	</form>
																</td>
															</tr>
														@endforeach
													@endif
													</tbody>
												</table>
									</div>
									<div class="tab-pane active" id="new">
												<h2> Add new Book </h2>
												<div class="box">
													<form class="form-horizontal" role="form" 
														  method="POST" action="{{ route('sells.store') }}">
			                       						 {!! csrf_field() !!}
														</br>
														<div class="form-group">
															<label >Book Name</label>
															<input type="text" name="name" class="form-control">
														</div>
														<div class="form-group">
															<label>Expected Price</label>
															<input type="text" name="price" class="form-control">
														</div>
														<div class="form-group">
															<label>Subject Code (if Applicable)</label>
															<input type="text" name="subject_code" class="form-control">
														</div>
														<div class="form-group">
															<label>Catagory</label><br>
															<select  class="form-control" name="catagory">
																@if(isset($catagories))
																	@foreach($catagories as $catagory)
																		<option value={{$catagory->id}}>{{$catagory->value}}</option>
																	@endforeach
																@endif
															</select>
														</div>
														<div class="form-group">
															<label>Book Condition</label><br>
															<select  class="form-control" name="condition">
																<option value="0">Perfect</option>
																<option value="1" selected>Good</option>
																<option value="2">Useable </option>
															</select>
														</div>
														
														<div class="form-group">
														<input type="submit" class="btn btn-success" value="Add BooK"></input>
														</div>
													</form>
												</div>
									</div>												
									<div class="tab-pane " id="deals">
										<h2> Books For You Got Deal</h2>	
												<table class="table table-hover" id="table2">
													<thead>
														<tr>
															<th>Book Name</th>
															<th>Price</th>
															<th>Person</th>
															<th>Branch</th>
															<th>Enrollment Number</th>
															<th>Action</th>
															<th>Remove</th>
														</tr>
													</thead>
													<tbody>
													@if(isset($user))
														@foreach ($user->sells()->where('status',1)->get() as $book) 
															<tr >
																<td>{{$book->name}}</td>
																<td>{{$book->price}}</td>	
																<td>{{$book->buyer()->first()->name}}</td>
																<td>{{$book->buyer()->first()->enrollment_number}}</td>					
																@if(isset($book->buyer_id))
																<td ><a class="btn btn-success"
																       href="{{url('/sells/sold/'.$book->id)}}">
																       Deal Complete</a>													
																</td>
																@endif
																<td>
																	<form class="form-horizontal" role="form" method="get" action="{{ url('sells/close/'.$book->id) }}">
			                       									 {!! csrf_field() !!}
			                       									 	<input type="hidden" name="_method" value="put">
																		<input type="submit" class="btn btn-danger" value="Close Deal">
																	</form>
																</td>
															</tr>
														@endforeach
													@endif
													</tbody>
												</table>
									</div>													
								</div>	
							
					</div>		
				</div>			
					
		</div>		

@endsection

@section('scripts')
<!-- Plugin Js Start -->
<script src="{{asset("plugins/datatables/datatables.min.js")}}" 
	type="text/javascript"></script>
<script src="{{asset("plugins/datatables/plugins/bootstrap/datatables.js")}}" 
	type="text/javascript"></script>
<!-- Plugin Js End -->
<!-- Script Js Start -->
<script src="{{asset("custom/js/datatable.js")}}" 
	type="text/javascript"></script>
<!-- Script Js End-->
@endsection