@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <section id="about" class="light">
		<div id="scene">
			<div class="layer" data-depth="0.50"><div class="about_background"></div></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<div class="section_title">
						<h3>about us</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="about_section_title">
						<h3>What We Do</h3>
						<h1>We Prepare & Guide International Students For Study Abroad</h1>
					</div>
				</div>
			</div>
			<div class="about_text_row">
				<div class="about_section_text">
					<div class="col-md-4">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
					</div>
				</div>
				<div class="col-md-8">
					<img src="img/about/university.jpg" class="img-responsive" width="100%">
				</div>
			</div>
		</div>
	</section>
@endsection
