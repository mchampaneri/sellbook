<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Search Desk
@endsection

@section('styles')

@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<h3> Select Book you Want to  Purchase </h3>
		</div>
		<div class="col-sm-9">
			<div class="tabbable">
					<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#inprogress" data-toggle="tab">In Progress</a>
						  </li>
						  <li class=>
						  	<a href="#findnew" data-toggle="tab">Find New Book</a>
						  </li>
						  <li class=>
						  	<a href="#sembooks" data-toggle="tab">My Semester Books</a>
						  </li>
					</ul>						
						</br>						
					<div class="tab-content">
						<div class="tab-content">
							<div class="tab-pane active" id="inprogress">
									
										<table class="table table-hover">
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
											@foreach ($user->purchases()->get() as $book) 
												<tr>
													<td>{{$book->name}}</td>
													<td>{{$book->price}}</td>						
													<td><a class="btn btn-primary"
													       href="{{route('sells.edit',['id'=>$book->id])}}">
													       Edit</a>
													</td>
													<td>
														<form class="form-horizontal" role="form" method="POST" action="{{ route('purchases.destroy',['id'=>$book->id]) }}">
                       									 {!! csrf_field() !!}
                       									 	<input type="hidden" name="_method" value="delete">
															<input type="submit" class="btn btn-danger">
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
													<div class="f col-sm-8">
														<table class="table table-hover table-striped">
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
																<td>{{$book->condition}}</td>
																<td><a class="btn btn-primary" 
																	href="{{route('sells.show',['id'=>$book->id])}}"> 
																	Book Detail
																	</a>
																</td>
																<td>
																<form method="post" action="{{route('purchases.update',['id'=>$book->id])}}">
																	{{ csrf_field()}}
																	<input type="hidden" name="_method" value="put">
																	<input type="submit" class="btn btn-sucess">
																</form>
																</td>
															</tr>
														@endforeach
														</table>
													</div>
													<div class="col-sm-1"></div>
											</div>
							</div>	
							<div class="tab-pane" id="sembooks">
								
							</div>															
						</div>	
					</div>
		</div>
	</div>	
</div>
@endsection

@section('scripts')

@endsection