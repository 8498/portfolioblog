@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<nav class="left-nav">
				<ul class="nav nav-pills nav-stacked">
					<li id="pill-post" class="active"><a data-toggle="tab" href="#post">Posty</a></li>
					<li id="pill-addpost"><a data-toggle="tab" href="#addpost">Dodaj post</a></li>
					<li id="pill-addpostCategory"><a data-toggle="tab" href="#addpostCategory">Dodaj Kategorie</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-10">
			<section class="section">
				<article class="article">
					<div class="tab-content">
						<div id="post" class="tab-pane fade in active">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Posty</h4></div>
								<div class="panel-body">
									<ul class="list-group">
										@foreach($posts as $post)
										<li class="list-group-item">
											<form class="form-horizontal" role="form" method="post" action="{{ url('posts/'.$post->id) }}">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="PUT">
												<div class="form-group">
													<label class="col-md-2 control-label">Tytuł</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="title" value="{{ $post->title }}">
													</div>
												</div>
												<div class="form-group">
												<label for="categorySelect" class="col-md-2 control-label">Kategoria</label>
												<div class="col-md-8">
													<select class="form-control" id="categorySelect" name="postCategoryID">
														<option value="{{ $post->postCategory_id }}">{{ $post->categoryName }} (obecnie)</option>
													@foreach($postCategories as $postCategory)
														<option value="{{ $postCategory->id }}">{{ $postCategory->name }}</option>
													@endforeach
													</select>
												</div>
											</div>
												<div class="form-group center">
												<label class="control-label">{{ $post->created_at }}</label>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Treść</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="4" name="content">{{ $post->content }}</textarea>
													</div>
												</div>
												<div class="form-group center">
												<button type="submit" class="btn btn-default">Edytuj</button>
												</div>
											</form>
											<form class="form-horizontal" role="form" method="post" action="{{ url('posts/'.$post->id) }}">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">
												<div class="form-group center">
												<button type="submit" class="btn btn-default">Usun</button>
												</div>
											</form>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
						<div id="addpost" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Dodaj Post</h4></div>
								<div class="panel-body">
									<form class="form-horizontal" role="form" method="post" action="{{ url('posts') }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<label class="col-md-2 control-label">Tytuł</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="title">
											</div>
										</div>
											<div class="form-group">
												<label for="categorySelect" class="col-md-2 control-label">Kategoria</label>
												<div class="col-md-8">
													<select class="form-control" id="categorySelect" name="postCategoryID">
													@foreach($postCategories as $postCategory)
														<option value="{{ $postCategory->id }}">{{ $postCategory->name }}</option>
													@endforeach
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Treść</label>
												<div class="col-md-8">
													<textarea class="form-control" rows="10" name="content"></textarea>
												</div>
											</div>
										<div class="form-group center">
										<button type="submit" class="btn btn-default">Dodaj</button>
										</div>
									</form> 
								</div>
							</div>
						</div>
						<div id="addpostCategory" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Dodaj Kategorie</h4></div>
								<div class="panel-body">
									<form class="form-horizontal" role="form" method="post" action="{{ url('postCategories') }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<label class="col-md-2 control-label">Nazwa</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="name">
											</div>
										</div>
										<div class="form-group center">
										<button type="submit" class="btn btn-default">Dodaj</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>
		</div>
	</div>
</div>
@endsection