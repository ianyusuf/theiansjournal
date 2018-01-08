@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <section id="service" class="light">
		<div class="container" id="desktop-only">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<div class="section_title">
						<h3>our service</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-md-4 feature_card">
					<a class="" data-toggle="collapse" data-parent="#accordion-career" href="#collapseOne">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-01.png" class="icedu-icons">
							<h3 class="service-text">Consultation</h3>
						</div>
					</a>
					<div style="" id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
							Nullam euismod, dolor ac pulvinar accumsan, neque nisl sollicitudin erat, nec fermentum metus diam eu purus. Aliquam euismod neque suscipit, mollis eros sit amet, volutpat ante. Praesent pretium rutrum nibh. Duis et bibendum ante, sit amet gravida mauris. Nam id placerat massa. Fusce non nibh purus. Quisque non ipsum vitae odio faucibus volutpat dictum in erat.
							<div class="clearfix space20"></div>
							<p><a href="#" class="button btn-small color2">Apply Now</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-02.png" class="icedu-icons">
						<h3 class="service-text">Study Overseas</h3>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-03.png" class="icedu-icons">
						<h3 class="service-text">English Course</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-04.png" class="icedu-icons">
						<h3 class="service-text">International English Course</h3>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-05.png" class="icedu-icons">
						<h3 class="service-text">Pick A School</h3>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-06.png" class="icedu-icons">
						<h3 class="service-text">Visa Processing</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-07.png" class="icedu-icons">
						<h3 class="service-text">Document Translation</h3>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-08.png" class="icedu-icons">
						<h3 class="service-text">Accomodation Placement</h3>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-09.png" class="icedu-icons">
						<h3 class="service-text">Pick Up Arrangement</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="mobile-only">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<div class="section_title">
						<h3>our service</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-01.png" class="icedu-icons">
						<h3 class="service-text">Consultation</h3>
					</div>
				</div>
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-02.png" class="icedu-icons">
						<h3 class="service-text">Study Overseas</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-03.png" class="icedu-icons">
						<h3 class="service-text">English Course</h3>
					</div>
				</div>
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-04.png" class="icedu-icons">
						<h3 class="service-text">International English Course</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-05.png" class="icedu-icons">
						<h3 class="service-text">Pick A School</h3>
					</div>
				</div>
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-06.png" class="icedu-icons">
						<h3 class="service-text">Visa Processing</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-07.png" class="icedu-icons">
						<h3 class="service-text">Document Translation</h3>
					</div>
				</div>
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-08.png" class="icedu-icons">
						<h3 class="service-text">Accomodation Placement</h3>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-xs-6 feature_card">
					<div class="feature_card_content trans_200">
						<img src="img/service/item-09.png" class="icedu-icons">
						<h3 class="service-text">Pick Up Arrangement</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
