@extends('layouts.portfolio')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<nav class="left-nav">
				<ul class="nav nav-pills nav-stacked">
					<li id="pill-personalData" class="active pill"><a data-toggle="tab" href="#personalData">Dane osobowe</a></li>
					<li id="pill-education" class="pill"><a data-toggle="tab" href="#education">Wykszta³cenie</a></li>
					<li id="pill-experience" class="pill"><a data-toggle="tab" href="#experience">Doœwiadczenie zawodowe</a></li>
					<li id="pill-skills" class="pill"><a data-toggle="tab" href="#skills">Umiejêtnoœci</a></li>
					<li id="pill-projects" class="pill"><a data-toggle="tab" href="#projects">Projekty</a></li>
					<li id="pill-hobbies" class="pill"><a data-toggle="tab" href="#hobbies">Zainteresowania</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-md-8">
			<section class="section">
				<article class="article">
					<div class="tab-content">
						<div id="personalData" class="tab-pane fade in active">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Dane personalne</h4></div>
								<div class="panel-body">
								<b>Imie i Nazwisko:</b><center>{{ $personalDetail->firstname }} {{ $personalDetail->lastname }}</center>
								<b>Email:</b><center>{{ $personalDetail->email }}</center>
								<b>Telefon:</b><center>{{ $personalDetail->phone }}</center>
								</div>
							</div>
						</div>
						<div id="education" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Wykszta³cenie</h4></div>
								<div class="panel-body">
								{{ $education->content }}
								</div>
							</div>
						</div>
						<div id="experience" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Doœwiadczenie zawodowe</h4></div>
								<div class="panel-body">
								{{ $experience->content }}
								</div>
							</div>
						</div>
						<div id="skills" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Umiejêtnoœci</h4></div>
								<div class="panel-body">
								{{ $skill->content }}
								</div>
							</div>
						</div>
						<div id="projects" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Projekty</h4></div>
								<div class="panel-body">
								{{ $project->content }}
								</div>
							</div>
						</div>
						<div id="hobbies" class="tab-pane fade">
							<div class="panel panel-default">
								<div class="panel-heading"><h4>Zainteresowania</h4></div>
								<div class="panel-body">
								{{ $hobby->content }}
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>
		</div>
		<div class="col-md-2">
			<div id="box" class="box">
				<a href="{{ url('/blog') }}"><div id= "largeCircle" class="large-circle"><h3>blog</h3></div></a>
			</div>
		</div>
	</div>
</div>
@endsection