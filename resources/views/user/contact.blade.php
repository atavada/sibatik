@extends('layouts.master')

@section('content')
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Get 24/7 Support</p>
						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p> --}}
					</div>
				<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" id="fruitkha-contact" action="{{ route('user.contact.store') }}">
							@csrf
							
							<p>
								<input class="mr-2 @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" id="name" value="{{ old('name') }}">
								<input class="@error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
							</p>
							<p>
								<textarea class="@error('message') is-invalid @enderror" name="message" id="message" cols="30" rows="10" placeholder="Message">{{ old('message') }}</textarea>
							</p>
							@error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
							@enderror
							@error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
							@enderror
							@error('message')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
							@enderror
							
							@if (session('success'))
								<div class="alert alert-success">
									{{ session('success') }}
								</div>
							@endif
							
							@auth
								<p class="mt-3"><input type="submit" value="submit"></p>
							@endauth
							@guest
								<p class="mt-3"><a href="{{ route('auth.signin') }}" class="boxed-btn">Submit</a></p>
							@endguest
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>Alamat Galery</h4>
							<p>Jl. Bandar Lor Gg. IX A <br> No.15, Bandar Lor, Kec Mojoroto<br>Kota Kediri, Jawa Timur 64114</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Jam Operasional</h4>
							<p>Senin - Sabtu : 08.00-16.00<br> Hari Minggu dan tanggal merah tutup</p>
						</div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contact</h4>
							<a href="https://api.whatsapp.com/send/?phone=62881027990757&text&type=phone_number&app_absent=0"><h5><i class="fab fa-whatsapp"></i> Admin</h5></a>
                        </div>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7053137995713!2d112.00064707588695!3d-7.820983377674104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78571d04821f85%3A0x37ec30c4ddffd50c!2sTenun%20Mulya%20di%20Kediri%20-%20Tenun%20Ikat%20ATBM!5e0!3m2!1sid!2sid!4v1710686468444!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->

@endsection