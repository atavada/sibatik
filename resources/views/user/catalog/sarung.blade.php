@extends('layouts.master')

@section('content')
    <!-- hero area -->
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
                            <h1>KATALOG</h1>
							<p class="subtitle">WARISAN BUDAYA INDONESIA</p>
							<p class="subtitle">WASTRA NUSANTARA</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->


	<!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="btn-group filter-buttons" role="group" aria-label="Filter products">
                        <button type="button" class="btn btn-primary rounded-pill filter-button" data-filter="all">Show</button>
                        <a href="{{ route('category.products', ['slug' => 'white']) }}" class="btn btn-primary rounded-pill filter-button" data-filter="all">White</a>
                        <a href="{{ route('category.products', ['slug' => 'blue']) }}" class="btn btn-primary rounded-pill filter-button">Blue</a>
                        <a href="{{ route('category.products', ['slug' => 'red']) }}" class="btn btn-primary rounded-pill filter-button">Red</a>
                        <a href="{{ route('user.catalog') }}" class="btn btn-primary rounded-pill filter-button" data-filter="all">All</a>
                        <a href="{{ route('category.products', ['slug' => 'gray']) }}" class="btn btn-primary rounded-pill filter-button">Gray</a>
                        <a href="{{ route('category.products', ['slug' => 'tosca']) }}" class="btn btn-primary rounded-pill filter-button">Tosca</a>
                        <a href="{{ route('category.products', ['slug' => 'sarung']) }}" class="btn btn-primary rounded-pill filter-button">Sarung</a>
                    </div>
                </div>
            </div>

            <div class="row" id="productContainer">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 text-center filter {{ $product->category->slug }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="#"><img src="{{ $product->image }}" alt="{{ $product->name }}"></a>
                            </div>
                            <h3>{{ $product->name }}</h3>
                            <p class="product-price"><span>{{ $product->description }}</span> {{ $product->price }} </p>
                            <a href="#" class="cart-btn">Go to Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 text-center pagination-buttons">
                    <button id="prevBtn">Prev</button>
                    <div id="pagination"></div>
                    <button id="nextBtn">Next</button>
                </div>
            </div>
        </div>
    </div>
	<!-- end product section -->





	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">

        </div>
    </section>
	<!-- end shop banner -->

	{{-- <!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> News</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news --> --}}




@endsection
