@extends('layouts.master')


@section('master-content')
	<div class="head-ribbon">
		<div class="head-ribbon-under">
			<div class="head-ribbon-body"></div><!--
			This Comment removes the space inbetween inline-block elements
			--><div class="head-ribbon-tip"></div>
		</div>
		<div class="head-ribbon-cover">
			<div class="head-ribbon-body"></div><!--
			This Comment removes the space inbetween inline-block elements
			--><div class="head-ribbon-tip"></div>
		</div>
		<div class="head-ribbon-text">Trivia</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
				<div class="card">
					<div class="well tothecenter">
						<span class="sub-heading">Brad is one of <b>10</b> children!</span>
				</div>
				<img class="img-responsive space-on-bottom" src="img/family1.jpg">
				<ul class="list-group">
					<li class="list-group-item">Brad can speak fluent spanish.</li>
					<li class="list-group-item">Brad can speak fluent spanish.</li>
					<li class="list-group-item">Brad can speak fluent spanish.</li>
					<li class="list-group-item">Brad can speak fluent spanish.</li>
				</ul>
			</div>
		</div>
	</div>
@endsection