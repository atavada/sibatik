@extends('layouts.master')

@section('content')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Product Tenun Mulya</p>
						<h1>Catalog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active">All</li>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('user.catalog.category', $category->slug) }}" style="color: black">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				@foreach ($products as $product)
					@if ($product->status == 'publish')
						<div class="col-lg-4 col-md-6 text-center strawberry">
							<div class="single-product-item">
								<div class="product-image">
									<a href="{{ route('user.catalog.product', $product->slug) }}">
										<img src="{{ $product->image }}" alt="{{ $product->slug }}">
									</a>
								</div>
								<h3>{{ $product->name }}</h3>
								<p class="product-price"> Rp. {{ $product->price }} </p>
								<a href="{{ route('user.catalog.product', $product->slug) }}" class="cart-btn">Go to Detail</a>
							</div>
						</div>
					@endif
				@endforeach
			</div>
			
			{{-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
	<!-- end products -->
@endsection