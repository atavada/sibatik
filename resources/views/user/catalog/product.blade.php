@extends('layouts.master')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>{{ $product->name }}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{ $product->image }}" alt="{{ $product->slug }}">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{ $product->name }}</h3>
						<p class="single-product-pricing">Rp. {{ $product->price }}</p>
						<p>{!! $product->description !!}</p>
						<div class="single-product-form">
                            <div class="cart-btn">
                                <a href="{{ $product->shopee_url }}" class="cart-btn" >Shopee</a>
                                <a href="{{ $product->tokopedia_url }}" class="cart-btn">Tokopedia</a>
                                <a href="https://api.whatsapp.com/send/?phone=62881027990757&text&type=phone_number&app_absent=0" class="cart-btn">By Admin</a>                            
                            </div>
                            
							<p><strong>Kategori: </strong>
								@foreach ($categories as $category)
									@if ($product->category_id == $category->id)
										{{ $category->name }}
									@endif	
								@endforeach
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->
@endsection