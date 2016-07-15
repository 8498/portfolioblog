@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<nav class="left-nav">
				<ul class="nav nav-pills nav-stacked">
					<li id="pill-personalData" class="active"><a data-toggle="tab" href="#personalData">Dane osobowe</a></li>
					<li id="pill-education"><a data-toggle="tab" href="#education">Wykszta³cenie</a></li>
					<li id="pill-experience"><a data-toggle="tab" href="#experience">Doœwiadczenie zawodowe</a></li>
					<li id="pill-skills"><a data-toggle="tab" href="#skills">Umiejêtnoœci</a></li>
					<li id="pill-projects"><a data-toggle="tab" href="#projects">Projekty</a></li>
					<li id="pill-hobbies"><a data-toggle="tab" href="#hobbies">Zainteresowania</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-10">
			<section class="section">
				<article class="article">
					<div class="tab-content">
						<div id="personalData" class="tab-pane fade in active">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Dane personalne</h4></div>
								<div class="panel-body">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/editPersonalDetail/'.$personalDetail->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
										<label class="col-md-4 control-label">Imie</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="firstname" value="{{ $personalDetail->firstname}}">
											@if($errors->has('firstname'))
												<span class="help-block">
													<strong>{{ $errors->first('firstname') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Nazwisko</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="lastname" value="{{ $personalDetail->lastname}}">
											@if($errors->has('lastname'))
												<span class="help-block">
													<strong>{{ $errors->first('lastname') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Email</label>
										<div class="col-md-6">
											<input type="email" class="form-control" name="email" value="{{ $personalDetail->email}}">
											@if($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Telefon</label>
										<div class="col-md-6">
											<input type="tel" class="form-control" name="phone" value="{{ $personalDetail->phone}}">
											@if($errors->has('phone'))
												<span class="help-block">
													<strong>{{ $errors->first('phone') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="form-group center">
										<button type="submit" class="btn btn-default">Edytuj</button>
									</div>
								</form>
								</div>
							</div>
						</div>
						<div id="education" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Wykszta³cenie</h4></div>
								<div class="panel-body">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/editEducationContent/'.$education->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
									<textarea class="form-control" rows="20" name="content">{{ $education->content}}</textarea>
									</div>
									<div class="form-group center">
										<button type="submit" class="btn btn-default">Edytuj</button>
									</div>
								</form>
								</div>
							</div>
						</div>
						<div id="experience" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Doœwiadczenie zawodowe</h4></div>
								<div class="panel-body">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/editExperienceContent/'.$experience->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
									<textarea class="form-control" rows="20" name="content">{{ $experience->content}}</textarea>
									</div>
									<div class="form-group center">
										<button type="submit" class="btn btn-default">Edytuj</button>
									</div>
								</form>
								</div>
							</div>
						</div>
						<div id="skills" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Umiejêtnoœci</h4></div>
								<div class="panel-body">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/editSkillContent/'.$skill->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group center">
									<textarea class="form-control" rows="20" name="content">{{ $skill->content}}</textarea>
									</div>
									<div class="form-group center">
										<button type="submit" class="btn btn-default">Edytuj</button>
									</div>
								</form>
								</div>
							</div>
						</div>
						<div id="projects" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Projekty</h4></div>
								<div class="panel-body">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/editProjectContent/'.$project->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
									<textarea class="form-control" rows="20" name="content">{{ $project->content}}</textarea>
									</div>
									<div class="form-group center">
										<button type="submit" class="btn btn-default">Edytuj</button>
									</div>
								</form>
								</div>
							</div>
						</div>
						<div id="hobbies" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Zainteresowania</h4></div>
								<div class="panel-body">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/editHobbyContent/'.$hobby->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
									<textarea class="form-control" rows="20" name="content">{{ $hobby->content}}</textarea>
									</div>
									<div class="form-group center">
										<button type="submit" class="btn btn-default">Edytuj</button>
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