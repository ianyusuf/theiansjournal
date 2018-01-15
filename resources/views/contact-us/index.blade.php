@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <section id="contact" class="light">
		<div class="contact_form_background"></div>
		<div class="row">
				<div class="container">
				<div class="col-md-2 col-md-offset-10">
					<div class="section_title">
						<h3>contact us</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="contact_bg">
			<div class="col-md-4" id="contact_left">
				<div class="contact_left_row">
					<div class="contact_text_white">
						<h3>Address</h3>
						<h4>ICEDU - Kantorku Coworking Space</h4>
						<p>Agro Plaza<br>
						Jl. H.R. Rasuna Said Kav. X 2-1,<br>
						Setiabudi, Kuningan Timur<br>
						Jakarta 12950, Indonesia</p>
					</div>
				</div>
				<div class="contact_row">
					<div class="contact_text_white">
						<p><b>P. <span></b>+62 2145 6783</span><br>
						<b>E. <span></b>info@icedu.id</span>
					</div>
				</div>
				<div class="contact_row">
					<div class="contact_text_white">
						<p>
							<a class="contact_socmed" href="https://www.instagram.com/iceduindo/" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i><span>@iceduindo</span>
							</a>
						</p>
						<p>
							<a class="contact_socmed" href="https://www.instagram.com/iceduindo/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i><span>/icedu.indonesia</span>
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-8" id="contact_right">
				<div class="contact_form_container">
					<div class="contact_text">
						<h3>SAY HELLO!</h3>
					</div>
					<form id="contact-form" method="post">
						<div class="controls">
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<div class="name_focus">Name</div>
										<input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name..." required="required" data-error="Name is required.">
										<div class="help-block with-errors contact_errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<div class="email_focus">Email</div>
										<input id="form_email" type="email" name="email" class="form-control" placeholder="Fill with your email..." required="required" data-error="Valid email is required.">
										<div class="help-block with-errors contact_errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<div class="form-group">
										<div class="tel_focus">Phone</div>
										<input id="form_tel" type="text" name="tel" class="form-control" placeholder="Input your phone number..." required="required" data-error="Valid phone number is required.">
										<div class="help-block with-errors contact_errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<textarea id="form_message" name="message" class="form-control" placeholder="Your message here..." rows="4" required data-error="Please, leave us a message."></textarea>
										<div class="help-block with-errors contact_errors"></div>
									</div>
								</div>
								<button type="submit" class="button_b button_contact" value="Submit">send</button>
							</div>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="contact_row">
					<div class="contact_container">
						<div class="row">
							<div class="col-sm-12">
								<div class="contact_text">
									<h3>FIND US</h3>
								</div>
							</div>
						</div>
						<div class="maps-row">
							<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2621797722254!2d106.83162831463812!3d-6.229124995490884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ee5ccc3a95%3A0x2e060c93c21c1d18!2sAgro+Plaza!5e0!3m2!1sen!2sid!4v1513256094012' width='100%' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
