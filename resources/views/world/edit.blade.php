@extends('layouts.app')


@section ('content')
<div class="container">
	<h2>Default World</h2>
	<div class="nav nav-tabs nav-fill" id="section-tab-nav">
		<a class="nav-item nav-link active" href="#locations"
			data-toggle="tab">Locations</a>
		<a class="nav-item nav-link" href="#characters"
			data-toggle="tab">Characters</a>
	</div>
	<div class="tab-content border border-top-0 rounded-bottom p-3" id="section-tab">
		<section class="tab-pane fade show active" id="locations">
			<h3>Locations</h3>
		</section>
		<section class="tab-pane fade" id="characters">
			<h3>Characters</h3>
		</section>
	</div>
</div>
@stop