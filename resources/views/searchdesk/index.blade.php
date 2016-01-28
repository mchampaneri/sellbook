<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Search Desk
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" 
		href="{{asset("plugins/datatables/datatables.min.css")}}">
@endsection

@section('content')

		<div class="page-content">
			
				<div class="portlet light">
					<div class="portlet-body">
						
								<ul class="nav nav-tabs ">
									  <li class="active">
									    <a href="#inprogress" data-toggle="tab">In Progress</a>
									  </li>
									  <li class=>
									  	<a href="#findnew" data-toggle="tab">Find New Book</a>
									  </li>
									  <li class=>
									  	<a href="#purchased" data-toggle="tab">Purchased Book</a>
									  </li>
								</ul>						
							
						
								<div class="tab-content">							
										<div class="tab-pane active" id="inprogress">
												
													<table class="table table-hover table-striped" id="table1">
														<thead>
															<tr>
																<th>Book Name</th>
																<th>Price</th>
																<th>Owner</th>
																<th>Remove</th>
															</tr>
														</thead>
														<tbody>
														@if(isset($user))
														@foreach ($user->purchases()->where('status',1)->get() as $book) 
															<tr>
																<td>{{$book->name}}</td>
																<td>{{$book->price}}</td>						
																<td>{{$book->seller()->get()->first()->name}}
																</td>
																<td>
																	<form class="form-horizontal" role="form" method="POST" action="{{ route('purchases.destroy',['id'=>$book->id]) }}">
			                       									 {!! csrf_field() !!}
			                       									 	<input type="hidden" name="_method" value="delete">
																		<input type="submit" class="btn btn-danger" value="Cancel Deal">
																	</form>
																</td>
															</tr>
														@endforeach
													@endif
														</tbody>
													</table>
										</div>
										<div class="tab-pane" id="findnew">
													<h2> Find Book </h2>
													<div class="box">
														<div class="row">
																<div class="col-sm-12">
																	<table class="table table-hover table-striped" id="table2">
																	<thead>
																		<th>Book</th>
																		<th>Price</th>
																		<th>Catagory</th>
																		<th>Condition</th>
																		<th>Owner</th>
																		<th>Add to List</th>
																	</thead>
																	@foreach($books as $book)
																		<tr>
																			<td>{{$book->name}}</td>
																			<td>{{$book->price}}</td>
																			<td>{{$book->catagory}}</td>
																<?php 
																     $value = ["Good","Perfect","Usable"]; ?>
																			<td>{{$value[$book->condition]}}</td>
																			<td><a class="btn btn-primary" 
																				href="{{route('sells.show',['id'=>$book->id])}}"> 
																				Book Detail
																				</a>
																			</td>
																			<td>
																			<form method="post" action="{{route('purchases.update',['id'=>$book->id])}}">
																				{{ csrf_field()}}
																				<input type="hidden" name="_method" value="put">
																				<input type="submit" class="btn btn-success" value="Create Deal">
																			</form>
																			</td>
																		</tr>
																	@endforeach
																	</table>
																</div>
														</div>	
												    </div>
										</div>
										
								</div>	
						
					</div>
				</div>	
			
		</div>

@endsection

@section('scripts')
<script src="{{asset("plugins/datatables/datatables.min.js")}}" 
	type="text/javascript"></script>
<script src="{{asset("custom/js/datatable.js")}}" 
	type="text/javascript"></script>
@endsection