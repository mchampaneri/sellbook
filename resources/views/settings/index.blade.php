<?php $menu = true //if you need to access menu ?>
@extends('main')

@section('title')
Profile
@endsection

@section('styles')

@endsection

@section('content')
<?php $branches = App\Control::where('field','branch')->get(); ?>

		<div class="page-content">
			<div class="container-fluid">
				@if(isset($user))
                    <div class="col-md-6">
    					<form  role="form" method="POST" action="{{ route('users.update',['id'=>Auth::user()->id]) }}"
                                >
                            {!! csrf_field() !!}

                                <input type="hidden" name='_method' value="put">

                                <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                </div>
                                </div>
                                <br>
                                <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>                                             
                                </div>
                                <br>
                                <div class="form-group">
                                <label class="col-md-4 control-label">Enrollent_number</label>
                                <div class="col-md-6">
                                   <input type="text" class="form-control" name="enrollment_number" value="{{$user->enrollment_number}}">
                                </div>
                                </div>
                                <br>
                            
    	                        <div class="form-group">                
                                <label class="col-md-4 control-label">Semeter</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="sem">
                                        <option value="1" <?php if($user->sem==1) {echo 'selected';} ?> >1</option>
                                        <option value="2" <?php if($user->sem==2) {echo 'selected';} ?> >2</option>
                                        <option value="3" <?php if($user->sem==3) {echo 'selected';} ?> >3</option>
                                        <option value="4" <?php if($user->sem==4) {echo 'selected';} ?> >4</option>
                                        <option value="5" <?php if($user->sem==5) {echo 'selected';} ?> >5</option>
                                        <option value="6" <?php if($user->sem==6) {echo 'selected';} ?> >6</option>
                                        <option value="7" <?php if($user->sem==7) {echo 'selected';} ?> >7</option>
                                        <option value="8" <?php if($user->sem==8) {echo 'selected';} ?> >8</option>
                                    </select>
                                </div>                     
                                </div>
                                <br>
                                <div class="form-group">
                                <label class="col-md-4 control-label">Branch</label>
                                <div class="col-md-6">
                                    <select name="branch" class="form-control">
                                        @if(isset($branches))
                                            @foreach($branches as $branch)
                                                <option value={{$branch->id}}
                                                        <?php if($user->branch==$branch->id) {echo 'selected';} ?> >
                                                        {{$branch->value}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>          
                                </div>

    	                        <div class="form-group">
    	                            <div class="col-md-6 col-md-offset-4">
    	                                <button type="submit" class="btn btn-primary">
    	                                    <i class="fa fa-btn fa-user"></i>Update Profile
    	                                </button>
    	                            </div>
    	                        </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form  role="form" method="POST" action="{{ route('users.update',['id'=>Auth::user()->id]) }}"
                                >
                            {!! csrf_field() !!}

                                <input type="hidden" name='_method' value="put">

                                <div class="form-group">
                                <label class="col-md-4 control-label">Old Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="oldpassword" >
                                </div>
                                </div>
                                <br>

                                 <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="newpassword" >
                                </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Update Password
                                        </button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
				@endif
			</div>
		</div>

@endsection

@section('scripts')

@endsection