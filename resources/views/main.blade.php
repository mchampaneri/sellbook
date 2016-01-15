<!DOCTYPE html>
<html>
<head>
<!-- For styles  and  Preloading -->
	@include('layouts.head')
	@include('layouts.header')
<!-- End of Style and preloading -->
</head>
	<body>
	@if(isset($menu))
	@include('layouts.menu')
	@endif
	
	@yield('content')
	
<!-- Java scripts -->
	
	@include('layouts.foot')
	@include('layouts.footer')
<!-- End of scripts -->
</body>
</html>