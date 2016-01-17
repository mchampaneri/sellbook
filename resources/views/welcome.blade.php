<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
 	
	<link rel="stylesheet" type="text/css" 
		  href="{{asset("global/plugins/bootstrap/css/bootstrap.min.css")}}">

   
	   <!-- Global sty;e starts -->
	<link rel="stylesheet" type="text/css" 
		  href="{{asset('global/css/components-md.min.css')}}">

	<!-- Global Style Ends -->




    <link rel="stylesheet" type="text/css" 
    		href="{{asset('custom/css/site.css')}}">


</head>
<body>
   
    <div class="headbar">

    		<div class="pull-left">
    			<img src="{{asset('layout/img/logo.png')}}">
    		</div>   
			<div class="pull-right">
				<a href="{{url('/login')}}" class="btn green">Login</a>
				<a href="{{url('/register')}}" class="btn blue">Register</a>
			</div>
			<div style="clear: both"></div>
    </div>

</body>
</html>