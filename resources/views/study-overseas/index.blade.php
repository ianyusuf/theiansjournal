@extends('layouts.overseas')

@section('title')
    Study Overseas
@endsection

@section('content')
	<section id="locations" class="locations">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<div class="section_title">
						<h3>study overseas</h3>
					</div>
				</div>
			</div>
			<div class="map-row">
				<div class="google-map">
					<img src="img/map.png" alt="">
					<div class="hotspot-wrap">
						<div class="hotspot-item" data-top="37%" data-left="25%">
							<span class="hotspot" data-toggle="tooltip" data-placement="top" title="USA">
								<i class="hotspot-point"></i>                            
							</span>
						</div>
						<div class="hotspot-item" data-top="29%" data-left="53%">
							<span class="hotspot" data-toggle="tooltip" data-placement="top" title="GERMANY">
								<span class="hotspot-point"></span>                            
							</span>
						</div>
						<div class="hotspot-item" data-top="35%" data-left="80%">
							<span class="hotspot" data-toggle="tooltip" data-placement="top" title="HONG KONG">
								<span class="hotspot-point"></span>                            
							</span>
						</div>
						<div class="hotspot-item" data-top="76%" data-left="85%">
							<span class="hotspot" data-toggle="tooltip" data-placement="top" title="SYDNEY">
								<span class="hotspot-point"></span>                            
							</span>
						</div>
						<div class="hotspot-item" data-top="52%" data-left="68%">
							<span class="hotspot" data-toggle="tooltip" data-placement="top" title="INDIA">
								<span class="hotspot-point"></span>                            
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
