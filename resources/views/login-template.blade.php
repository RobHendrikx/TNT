<!DOCTYPE html>
<html lang="en">
	@include('partials.main._header')

 	<body>
		<div id="login-page">
		  	<div class="container">
			    @yield('content')
		  	</div>
		</div>

    <!-- js placed at the end of the document so the pages load faster -->
    @include('partials.login._js')
    @yield('scripts')
  	</body>
</html>
