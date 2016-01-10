@extends('main')

@section('title')
Login
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" 
	  href="{{asset('custom/css/login.css')}}">
@endsection

@section('content')

	<div class="row">
		
		<div class="col-sm-8">
			
		</div>

		<div class="col-sm-3">
			<div class="login-box">
				<form>
					<div class="form-group">
						<h3> Login Here, </h3>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" 
								name="username" placeholder="user@example.com">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" 
						       name="password" placeholder="password">
					</div>
					<div class="form-group">
						<submit class="btn btn-default"> Singin</submit>
					</div>
				</form>
			</div>
		</div>

	</div>

@endsection

@section('scripts')

@endsection