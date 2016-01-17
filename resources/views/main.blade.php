<!DOCTYPE html>
<html>
<head>
<!-- For styles  and  Preloading -->
	@include('layouts.head')
	@include('layouts.header')
<!-- End of Style and preloading -->
</head>
	<body class="page-header-fixed page-sidebar-closed-hide-logo">
	<div class="wrapper">
	@if(isset($menu))
	@include('layouts.menu')
	@endif
	<div class="container-fluid">
	@yield('content')
	</div>
<!-- Java scripts -->
	
	@include('layouts.foot')
	@include('layouts.footer')
	</div>
<!-- End of scripts -->
</body>
</html>