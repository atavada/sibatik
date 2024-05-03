@extends('layouts.master')

@section('content')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>We'd love to hear from you!</p>
						<h1>Give us Your Feedback!</h1>
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
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" >
							<div class="card-body">
								<div class="billing-address-form">
									<form method="POST" action="{{ route('user.rating.store') }}">
										@csrf

                                        <div class="rating-box">
											<header>How was your experience?</header>
											<div class="rating" style="width: 20rem">
												<input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fa-solid fa-star"></i></label>
												<input id="rating-4" type="radio" name="rating" value="4"/><label for="rating-4"><i class="fa-solid fa-star"></i></label>
												<input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fa-solid fa-star"></i></label>
												<input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fa-solid fa-star"></i></label>
												<input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fa-solid fa-star"></i></label>
											</div>
											@error('rating')
												<span class="error-message"><span class="error-text">{{ $message }}!</span></span>
											@enderror
										</div>

										<p>
											<input class="@error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" id="name" value="{{ old('name')}}">
											@error('name')
												<span class="error-message"><span class="error-text">{{ $message }}!</span></span>
											@enderror
										</p>
										<p>
											<textarea class="@error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="10" placeholder="Message">{{ old('content') }}</textarea>
											@error('content')
												<span class="error-message"><span class="error-text">{{ $message }}!</span></span>
											@enderror
										</p>

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
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end check out section -->
@endsection