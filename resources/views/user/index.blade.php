@extends('layouts.master')

@section('content')
    <!-- hero area -->
	<div class="hero-area" style="background-image: url('frontend/img/bg.jpg'); background-size: cover; background-position: center; padding: 100px 0; text-align: center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Batik Tenun Ikat</p>
							<h1>Tenun Mulya</h1>
							<div class="hero-btns">
								<a href="catalog" class="boxed-btn">Product Collection</a>
								<a href="ulasan" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fa-solid fa-arrow-trend-up" style="color: #f28123;"></i>
						</div>
						<div class="content">
							<h3>Update Design</h3>
							<p>Renew design in every production</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>catch admin for your custom!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fa-solid fa-store" style="color: #f28123;"></i>
						</div>
						<div class="content">
							<h3>Support UMKM</h3>
							<p>Shop now for better UMKM!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produk</span> Unggulan</h3>
						<p >Indonesia adalah negara yang kaya akan kebudayaannya, dengan daerah yang memiliki kain khasnya tersendiri.  
							Dengan niat mulia melestarikan produk tradisional khas Kota Kediri Tenun Mulya hadir meramaikan industri tenun di tanah air.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image " >
							<a href="single-product.html"><img src="frontend/img/products/product-1.jpg" alt="" width="200" height="300"></a>
						</div>
						<h3>Kembang Seroja</h3>
						<p class="product-price"><span>Per 90cm&#215;250cm</span></p>
						<a href="cart.html" class="cart-btn">Go to Detail</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="frontend/img/products/product-2.jpg" alt=""></a>
						</div>
						<h3><br><br>Waist Bag</h3>
						<p class="product-price"><span>Waistbag Kuning/Ungu/Merah </p>
						<a href="cart.html" class="cart-btn">Go to Detail</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="frontend/img/products/product-3.jpg" alt=""></a>
						</div>
						<h3><br>Mini Backpack</h3>
						<p class="product-price"><span>Mini Backpack Merah & Biru</span></p>
						<a href="cart.html" class="cart-btn">Go to Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                            </div>
                        </div>
                    	<img src="frontend/img/product-4.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3>Lestarikan Budaya!</h3>
                    <div class="text">Mulai langkah pertamamu dalam mendukung UMKM lokal terbaik!
						Indonesia memiliki kekayaan luar biasa, termasuk produk-produk lokal berkualitas tinggi yang dihasilkan oleh UMKM . Produk-produk ini tak kalah saing dengan produk impor, lho! Keputusan ada ditangan mu, Dengan membeli produk lokal, kita menghargai kerja keras dan kreativitas mereka.</div>
                    <p>Mari bersama-sama kita cintai produk dalam negeri dan dukung UMKM lokal!
						Bersama, kita bisa membangun negeri yang lebih kuat dan sejahtera!
						#CintaProdukDalamNegeri #DukungUMKMLokal #BanggaBuatanIndonesia</p>
                	<a href="catalog" class="cart-btn mt-3">Lihat Katalog</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="frontend/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="frontend/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="frontend/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg"></div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2016</p>
						<h2>We are  <span class="orange-text">Tenun Mulya</span></h2>
						<p>Dengan tujuan melestarikan dan membangkitkan kembali kejayaan industri tenun tradisional di Desa Bandar yang sudah ada sejak tahun 1940-an, Mulya diangkat dari nama “ Mulyadi “ untuk mengenang jasa beliau sebagai pengrajin tenun pada tahun 1950-1970an.
						</p>
						<p>Sesuai dengan namanya “ Mulya “ yang berarti unggul dan bermutu tinggi. Dengan niat mulia melestarikan produk tradisional khas Kota Kediri, Tenun Mulya ingin menjadi produk tradisional unggulan Bangsa Indonesia. </p>
						<a href="about" class="boxed-btn mt-4">Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Tentukan Desainmu!!</h3>
					<p>Kantor mu butuh seragam batik ?
						Pengen Couple Tenun dengan pasangan ?
						Pengen punya tenun kembar 1 tongkrongan ? <br>Tenun Mulya Siap menerima pesanan custom mu, tunggu apa lagi cepat hubungi admin untuk lebih lanjut!
						</p>
					<a href="https://api.whatsapp.com/send/?phone=62881027990757&text&type=phone_number&app_absent=0" class="cart-btn btn-lg">Admin</a>
				</div>
				<div class="col-md-6">
					<img src="frontend/img/product-5.jpg" alt="Image Description" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- end shop banner -->
    
<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">High</span> Light</h3>
						<p>Tidak hanya sebagai warisan budaya, Tenun Ikat juga semakin mendunia dengan adanya kolaborasi dengan desaigner ternama!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3>Dhoho Street Fashion</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>  December, 2019</span>
							</p>
							<p class="excerpt"><br>Ikut Berpartisipasi dalam Dhoho Fashion Street Pada Desember 2019 Bertempat di Hutan Kota Joyoboyo dengan tema 
								“Pride of Jaya Baya”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3>Tenun Mulya x Ammuzaki Fahim</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>  3 November, 2023</span>
							</p>
							<p class="excerpt">The latest collection of Ammuzaki Fahim Collaboration with Tenun Mulya  for East Java Fashion Harmony  2023 at Candra Wilwatikta Park, Pasuruan.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Tenun Mulya x Ivan Gunawan</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 3 November, 2023</span>
							</p>
							<p class="excerpt">The latest collection of Ivan Gunawan Collaboration with Tenun Mulyafor East Java Fashion Harmony 2023 at Candra Wilwatikta Park, Pasuruan.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
@endsection