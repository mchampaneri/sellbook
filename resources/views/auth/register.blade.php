@extends('main')

@section('title')
Login
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" 
      href="{{asset("custom/css/login.css"
      )}}">
<link href="{{asset("global/plugins/bootstrap-fileinput/bootstrap-fileinput.css")}}"
      rel="stylesheet" type="text/css" />
@endsection

@section('content')
<?php $branches = App\Control::where('field','branch')->get(); ?>
<div class="container">
    <div class="row">
      </br>
        <div class="col-md-12">
            <div class="panel panel-default trans">
                <div class="panel-heading">
                <div class="row">
                    <div class="container-fluid">
                    Register Here,
                    <a href="{{url('/')}}" class="btn btn-default pull-right">Return Back</a>
                    </div>
                </div>
                </div>
                
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}"
                          enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       
                        
                        <div class="form-group{{ $errors->has('enrollment_number') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Enrollent_number</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="enrollment_number">

                                @if ($errors->has('enrollment_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('enrollment_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                     

                        <div class="form-group{{ $errors->has('sem') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Semeter</label>
                            <div class="col-md-6">
                                <select class="form-control" name="sem">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>

                                @if ($errors->has('sem'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sem') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Branch</label>
                            <div class="col-md-6">
                                <select name="branch" class="form-control">
                                    @if(isset($branches))
                                        @foreach($branches as $branch)
                                            <option value={{$branch->id}}>{{$branch->value}}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @if ($errors->has('branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
 <script src="{{asset("global/plugins/bootstrap-fileinput/bootstrap-fileinput.js")}}" 
         type="text/javascript"></script>
@endsection