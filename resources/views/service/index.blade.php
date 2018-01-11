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
					<a data-toggle="modal" data-target="#modal-1">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-01.png" class="icedu-icons">
							<h3 class="service-text">Consultation</h3>
						</div>
					</a>
					<div id="modal-1" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-01.png" class="img-responsive">
										</div>
										<div class="col-xs-6">
											<h1 class="service_modal_header">Consultation</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-2">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-02.png" class="icedu-icons">
							<h3 class="service-text">Study Overseas</h3>
						</div>
					</a>
					<div id="modal-2" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-02.png" class="img-responsive">
										</div>
										<div class="col-xs-7">
											<h1 class="service_modal_header">Study Overseas</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
											<p>
											<b><span style="font-weight:600; color: #fd431a">Benefit study overseas:</span></b>
												<ul style="list-style-type: square; padding:0 20px; line-height:200%">
													<li>Experience a new culture</li>
													<li>Make a friends from around the world</li>
													<li>Become independent</li>
													<li>Change the way of think</li>
													<li>Get ready for international work place</li>
													<li>Develop language skill</li>
													<li>Travel more widely</li>
												</ul>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-3">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-03.png" class="icedu-icons">
							<h3 class="service-text">English Course</h3>
						</div>
					</a>
					<div id="modal-3" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-03.png" class="img-responsive">
										</div>
										<div class="col-xs-7">
											<h1 class="service_modal_header">English Course</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-4">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-04.png" class="icedu-icons">
							<h3 class="service-text">International English Course</h3>
						</div>
					</a>
					<div id="modal-4" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-04.png" class="img-responsive">
										</div>
										<div class="col-xs-7" style="margin-top:-10px">
											<h1 class="service_modal_header" style="font-size:1.5em">International English Course</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-5">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-05.png" class="icedu-icons">
							<h3 class="service-text">Pick A School</h3>
						</div>
					</a>
					<div id="modal-5" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4 col-xs-offset-1">
											<img src="img/service/item-05.png" class="img-responsive">
										</div>
										<div class="col-xs-6">
											<h1 class="service_modal_header">Pick A School</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-6">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-06.png" class="icedu-icons">
							<h3 class="service-text">Visa Processing</h3>
						</div>
					</a>
					<div id="modal-6" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-06.png" class="img-responsive">
										</div>
										<div class="col-xs-7">
											<h1 class="service_modal_header">Visa Processing</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row feature_cards">
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-7">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-07.png" class="icedu-icons">
							<h3 class="service-text">Document Translation</h3>
						</div>
					</a>
					<div id="modal-7" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-07.png" class="img-responsive">
										</div>
										<div class="col-xs-7" style="margin-top:-10px">
											<h1 class="service_modal_header">Document Translation</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-8">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-08.png" class="icedu-icons">
							<h3 class="service-text">Accomodation Placement</h3>
						</div>
					</a>
					<div id="modal-8" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-08.png" class="img-responsive">
										</div>
										<div class="col-xs-7" style="margin-top:-10px">
											<h1 class="service_modal_header">Accomodation Placement</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 feature_card">
					<a data-toggle="modal" data-target="#modal-9">
						<div class="feature_card_content trans_200">
							<img src="img/service/item-09.png" class="icedu-icons">
							<h3 class="service-text">Pick Up Arrangement</h3>
						</div>
					</a>
					<div id="modal-9" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-4">
											<img src="img/service/item-09.png" class="img-responsive">
										</div>
										<div class="col-xs-7">
											<h1 class="service_modal_header">Pick Up Arrangement</h1>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 service_modal_text">
											<p>Study overseas is everybody dreams, we help student to reach their dream by preparing early with many option countries destination: <b>Australia, Canada, China, New Zealand, Switzerland, United Kingdom, United States of America</b> and many more.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
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
