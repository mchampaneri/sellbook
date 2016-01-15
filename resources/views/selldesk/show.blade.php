<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Book Details Page
@endsection

@section('styles')

@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<h3>	Book You May Intrested In </h3>
 		</div>
 		<div class="col-sm-9 ">
 			<div class="panel panel-default">	
	 			<div class="panel-heading">	 
		 			<div class="row ">
			 			<div class="col-md-8">			
			 				<h1 class="box-heading"> 	{{$book->name}} </h1>	 				
			 			</div>	
			 			<div class="col-md-2 ">
							<form method="post" action="{{route('purchases.update',['id'=>$book->id])}}">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="put">
								<input type="submit" class="btn btn-success" value="Purchase">
							</form>
							</div>
							<div class="col-md-2 ">
							<a href="{{route('purchases.index')}}" class="btn btn-primary"> Return Back </a>
			 				</div>
			 			</div>
	 			</div>
		 		<div class="panel-body">
		 			
		 			{{ $book->price }}
		 			{{ $book->condition}}
		 			{{ $book->catagory}}
		 			<?php $Owner = $book->seller()->get()->first(); ?>
		 			{{ $Owner->name}}
		 			{{ $Owner->email}}
		 			
		 		</div>
	 		</div>
 		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection