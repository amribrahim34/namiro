<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">

 <title>CoreUI</title>
 </head>
 <body class="c-app">
<div id="sidebar" class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show">	
	<div class="c-sidebar-brand d-md-down-none">
		{{config('app.name','laravel')}}
	</div>
	<ul class="c-sidebar-nav ps ps--active-y">
		<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="{{route('home')}} ">
				<svg class="c-sidebar-nav-icon">
					<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
				</svg> Dashboard
			</a>
		</li>
	</ul>
</div>
{{-- end of sidebar --}}
<div class="c-wrapper c-fixed-components">
	<header class="c-header c-header-light c-header-fixed c-header-with-subheader">	
		
	</header>
	<div class="c-body">
		<main class="c-main" >
			@yield('content')
		</main>
		<footer class="c-footer">
		<div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
		<div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
		</footer>
	</div>
</div>
 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
 </body>
</html>