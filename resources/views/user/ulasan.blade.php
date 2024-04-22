@extends('layouts.master')
@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="col-lg-12">
				<div class="checkout-accordion-wrap">
					<div class="accordion" id="accordionExample">
						<div class="card single-accordion">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Ulasan Pengguna
							</button>
							</h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
							<div class="billing-address-form">
								<form action="index">
									<p><input type="text" placeholder="Name"></p>
									<p><input type="email" placeholder="Email"></p>
									<p><input type="text" placeholder="Address"></p>
									<p><input type="tel" placeholder="Phone"></p>
									<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
								</form>
							</div>
							<a href="#" class="boxed-btn">Submit</a>
							</div>
						</div>
						</div>
						<div class="card single-accordion">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Staring Experience!
							</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
							<div class="shipping-address-form">
								<div class="rating-box">
									<header>How was your experience?</header>
									<div class="stars">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
									<a href="#" type="button" class="btn btn-outline-warning">Send</a>
								</div>	
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@endsection