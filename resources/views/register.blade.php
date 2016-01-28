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
                <form action="{{url('/register')}}" method="post">
                {{ csrf_field() }}
                    <div class="form-group" >
                        <h3> Login Here, </h3>
                    </div>
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" 
                                name="name" placeholder="user example">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" 
                                name="email" placeholder="user@example.com">
                    </div>
                     <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" 
                                name="contact_number" placeholder="1122334455">
                    </div>
                    <div class="form-group">
                        <label>Enrollment Number</label>
                        <input type="text" class="form-control" 
                                name="enrollment_number" placeholder="13021010XXXX (15 digit long)">
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <Select class="form-control" 
                                name="branch" placeholder="Your Branch">
                            <option value="6">Computer Engineering</option>
                        </Select>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <select class="form-control" 
                                name="sem">
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" 
                               name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Register Me!"></input>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection