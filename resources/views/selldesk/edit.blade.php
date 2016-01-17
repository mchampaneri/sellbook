<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Login
@endsection

@section('styles')

@endsection

@section('content')

		<div class="page-content">	
			<div class="container-fluid">
				<div class="portlet light">
																	<div class="portlet-body ">
																		<h2> Edit Book </h2>
																		<div class="box">
																			<form class="form-horizontal" role="form" method="POST" action="{{ route('sells.update',['id'=>$book->id]) }}">
													                       						 {!! csrf_field() !!}
																				</br>
																				   <input type="hidden" name="_method" value="put" >
																				<div class="form-group">
																					<label >Book Name</label>
																					<input type="text" name="name" class="form-control" value="{{$book->name}}">
																				</div>
																				<div class="form-group">
																					<label>Expected Price</label>
																					<input type="text" name="price" class="form-control" value="{{$book->price}}">
																				</div>
																				<div class="form-group">
																					<label>Subject Code(if applicable)</label>
																					<input type="text" name="subject_code" class="form-control" value="{{$book->subject_code}}" >
																				</div>
																				<div class="form-group">
																					<label>Category</label><br>
																					<select  class="form-control" name="catagory">
																						<option >Computer Engineering</option>
																						<option>Information Tehcnology</option>
																						<option>General </option>
																					</select>
																				</div>
																				<div class="form-group">
																					<label>Book Condition</label><br>
																					<select  class="form-control" name="codition">
																						<option>Perfect</option>
																						<option>Good</option>
																						<option>Useable </option>
																					</select>
																				</div>
																				<div class="form-group">
																					<input type="submit" class="btn btn-success" value="Edit Detail">
																					<input type="button" class="btn btn-default" value="cancel">
																				</div>
																			</form>
																		</div>
																	</div>
				</div>	
			</div>
		</div>

@endsection

@section('scripts')

@endsection