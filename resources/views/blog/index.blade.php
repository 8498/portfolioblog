@extends('layouts.blog')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<div id="section" class="tab-content">
				<p style="color: white">Posty</p>
				<div id="posts-all" class="tab-pane fade active in">
					@foreach($posts as $post)
					<article>
					<div class="panel">
						<div class="panel-heading">{{ $post->title }}</div>
						<div class="panel-body">
						{{ $post->content }}
						</div>
						<div class="panel-footer">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>{{ $post->created_at }}
						</div>
					</div>
					</article>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<nav class="left-nav">
				<ul class="nav nav-pills nav-stacked"><p style="color: white">Kategorie</p>
					<li id="pill-posts-all" class="active"><a data-toggle="tab" href="#posts-all">Wszystkie</a></li>
					@foreach($postCategories as $postCategory)
						<li id="pill-posts-{{ $postCategory->name }}"><a data-toggle="tab" href="#posts-{{ $postCategory->name }}">{{ $postCategory->name }}</a></li>
					@endforeach
				</ul>
			</nav>		
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
@endsection