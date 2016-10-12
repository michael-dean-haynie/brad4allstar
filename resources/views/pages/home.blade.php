@extends('layouts.master')


@section('master-content')
	<div class="jumbo-mobile-header">
		<div class="blue">
			I&nbsp;&nbsp;want&nbsp;&nbsp;<span class="you">YOU</span>&nbsp;&nbsp;to&nbsp;&nbsp;choose
		</div>
	</div>
	<div class="jumbotron-container">
		<div class="jumbotron-image">
			<div class="jumbo-text">
				<div class="totheleft">
					<span>
						<img id="choose-img" src="img/choose1.png"/>
					</span>
				</div>
				<span>
					<img id="brad4allstar-img"src="img/brad4allstar1.png"/>
				</span>
			</div>
			<div class="click-ribbon why-ribbon">
				<div class="click-ribbon-under">
					<div class="click-ribbon-body"></div><!--
					This Comment removes the space inbetween inline-block elements
					--><div class="click-ribbon-tip"></div>
				</div>
				<div class="click-ribbon-cover">
					<div class="click-ribbon-body"></div><!--
					This Comment removes the space inbetween inline-block elements
					--><div class="click-ribbon-tip"></div>
				</div>
				<div class="click-ribbon-text"><a href="#">Why?</a></div>
			</div>
			<div class="click-ribbon how-ribbon">
				<div class="click-ribbon-under">
					<div class="click-ribbon-body"></div><!--
					This Comment removes the space inbetween inline-block elements
					--><div class="click-ribbon-tip"></div>
				</div>
				<div class="click-ribbon-cover">
					<div class="click-ribbon-body"></div><!--
					This Comment removes the space inbetween inline-block elements
					--><div class="click-ribbon-tip"></div>
				</div>
				<div class="click-ribbon-text"><a href="#">How?</a></div>
			</div>
			<div class="brad-image"></div>
		</div>
	</div>
	<div class="jumbo-mobile-footer">
		<div class="blue">
			<span><img id="brad4allstar-img"src="img/brad4allstar1.png"/></span>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row footer-why-and-how">
			<div class="col-xs-6">
				<div class="card card-poppy card-rounded">
					<span><a href="#">Why?</a></span>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="card card-poppy card-rounded">
					<span><a href="#">How?</a></span>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-xs-12">
			<div class="card">

				<div class="tothecenter quote">
					<span>"I need <b>your</b> help to achieve my career long dream!"</span>
				</div>
				<br>
				<div class="totheright">
					<span>-Brad&nbsp;&nbsp;&nbsp;</span>
				</div>
			</div>
		</div>
	</div>
@endsection