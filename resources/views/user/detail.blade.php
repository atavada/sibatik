@extends('layouts.master')

@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Detail Produk</h1>
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
						<img src="frontend/img/products/product-img-5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>Kain Tenun Ikat B 216 (1)</h3>
						<p class="single-product-pricing"><span>250 x 90 cm</span>Rp. 210.000</p>
						<p>Motif Puspa Selaras dari Tenun Mulya ini tersedia dalam 3 warna, yaitu pink, abu-abu dan hitam. Dapatkan produk dengan mengunjungi e-commerce berikut untuk memilih ekspedisi kesayangmu! <br> Pesanan dalam Jumlah Banyak Dapat Menghbungi Admin</p>
						<div class="single-product-form">
							<form action="index.html">
								<input type="number" placeholder="0" disabled>
							</form>
                            <div class="cart-btn">
                                <a href="https://shopee.co.id/tenunmulya_kediri" class="cart-btn cart-btn-shoope" ><i class="fas fa-shopping-cart"></i>Shoope</a>
                                <a href="https://tokopedia.link/y2xZYeMKjGb" class="cart-btn cart-btn-tokopedia"><i class="fas fa-shopping-cart"></i>Toko Pedia</a>
                                <a href="https://api.whatsapp.com/send/?phone=62881027990757&text&type=phone_number&app_absent=0" class="cart-btn cart-btn-wa"><i class="fas fa-shopping-cart"></i>By Admin</a>                            
                            </div>
                            
							<p><strong>Categories: </strong>Fruits, Organic</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="frontend/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="frontend/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="frontend/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end more products -->

@endsection