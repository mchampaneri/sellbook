<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Sell Desk
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" 
	  href="{{asset('custom/css/selldesk.css')}}">
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<h3> Book to bring for sell by you </h3>
		</div>
		<div class="col-sm-9">		
			<div class="tabbable">
					<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#uploaded" data-toggle="tab">Uploaded</a>
						  </li>
						  <li class=>
						  	<a href="#new" data-toggle="tab">New</a>
						  </li>
					</ul>						
						</br>						
					<div class="tab-content">
						<div class="tab-pane active" id="uploaded">
								
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
											@foreach ($user->sells()->get() as $book) 
												<tr>
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
															<input type="submit" class="btn btn-danger">
														</form>
													</td>
												</tr>
											@endforeach
										@endif
										</tbody>
									</table>
						</div>
						<div class="tab-pane" id="new">
									<h2> Add new Book </h2>
									<div class="box">
										<form class="form-horizontal" role="form" method="POST" action="{{ route('sells.store') }}">
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
													<option value="0">Computer Engineering</option>
													<option value="1">Information Tehcnology</option>
													<option value="2">General </option>
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
												<input type="submit" class="btn btn-success"></input>
											</div>
										</form>
									</div>
						</div>																
					</div>	
			</div>
								
		</div>
		
	</div>
</div>
@endsection

@section('scripts')

@endsection