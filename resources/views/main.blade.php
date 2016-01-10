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
	<div class="container-fluid">
	@yield('content')
	</div>
<!-- Java scripts -->
	@include('layouts.footer')
	@include('layouts.foot')
<!-- End of scripts -->
</body>
</html>