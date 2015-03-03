@if (Auth::guest())
	<li><a href="{{ route('larfang/user::auth.login') }}">Login</a></li>
	<li><a href="{{ route('larfang/user::registrar.register') }}">Register</a></li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('larfang/user::auth.logout') }}">Logout</a></li>
		</ul>
	</li>
@endif