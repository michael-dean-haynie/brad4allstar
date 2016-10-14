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
		<div class="head-ribbon-text">Merchandise</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
				<div class="card">
					<div class="well tothecenter">
						<span class="sub-heading">Yes, if you want a truck with Brad's face on it that can be arranged. Not really. JK. But seriously...</span>
					<div>
				</div>
				
				<ul class="list-group">
					<li class="list-group-item">
						<img class="img-responsive" src="img/merch1.jpg">
					</li>
					<li class="list-group-item">
						<img class="img-responsive" src="img/merch2.jpg">
					</li>
					<li class="list-group-item">
						<img class="img-responsive" src="img/merch3.jpg">
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection