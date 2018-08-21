@extends ('layouts.app')

@section ('content')
<div class="container">
	<div class="col-md-6 offset-md-3 text-center">
		<h3>Pathfinder Campaign Tool</h3>
		<h1 class="my-5">AUGUR</h1>
		<p>Create your own universe and play with your friends online.</p>
		<div class="row">
			<div class="col-sm-6">
				<a href="{{ route('auth.register') }}"class="btn btn-primary btn-lg btn-block">Register Now</a>
			</div>
			<div class="col-sm-6 mt-3 mt-sm-auto">
				<a href="{{ route('auth.login') }}"class="btn btn-outline-secondary btn-lg btn-block">Login</a>
			</div>
		</div>
	</div>
</div>
@endsection