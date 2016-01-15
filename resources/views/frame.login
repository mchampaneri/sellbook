@extends('main')

@section('title')
Login
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" 
      href="{{asset('custom/css/login.css')}}">
@endsection

@section('content')

    <div class="headbar">
        <h2> A UNION 5 Project </h2>
    </div>
    <div class="row">
        
        <div class="col-sm-4">
            
        </div>

        <div class="col-sm-4">
            <div class="login-box">
                <form action="{{url('login')}}" method="post">
                {{ csrf_field() }}
                    <div class="form-group" >
                        <h3> Login Here, </h3>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" 
                                name="email" placeholder="user@example.com">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" 
                               name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default"></input>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection