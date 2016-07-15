@extends('layouts.intro')

@section('content')
<div id="container-intro" class="container">
	<header class="row">
		<div class="col-md-6">
			<a id="block" href="{{ url('/blog') }}" class="btn">
				<p>Blog</p>
				<span class="icon-intro glyphicon glyphicon-pencil" aria-hidden="true"></span>
			</a>
		</div>
		<div class="col-md-6">
			<a id="block" href="{{ url('/portfolio') }}" class="btn">
				<p>Portfolio</p>
				<span class="icon-intro glyphicon glyphicon-briefcase" aria-hidden="true"></span>
			</a>
		</div>
	</header>
</div>
@endsection
