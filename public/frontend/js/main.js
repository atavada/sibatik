(function ($) {
    "use strict";

    $(document).ready(function($){

        // testimonial sliders
        $(".testimonial-sliders").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:false,
                    loop:true
                }
            }
        });

        // homepage slider
        $(".homepage-slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            nav: true,
            dots: false,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    loop:true
                },
                600:{
                    items:1,
                    nav:true,
                    loop:true
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });

        // logo carousel
        $(".logo-carousel-inner").owlCarousel({
            items: 4,
            loop: true,
            autoplay: true,
            margin: 30,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:false,
                    loop:true
                }
            }
        });

        // count down
        if($('.time-countdown').length){
            $('.time-countdown').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                var $this = $(this).html(event.strftime('' + '<div class="counter-column"><div class="inner"><span class="count">%D</span>Days</div></div> ' + '<div class="counter-column"><div class="inner"><span class="count">%H</span>Hours</div></div>  ' + '<div class="counter-column"><div class="inner"><span class="count">%M</span>Mins</div></div>  ' + '<div class="counter-column"><div class="inner"><span class="count">%S</span>Secs</div></div>'));
            });
         });
        }

        // projects filters isotop
        $(".product-filters li").on('click', function () {

            $(".product-filters li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');

            $(".product-lists").isotope({
                filter: selector,
            });

        });

        // isotop inner
        $(".product-lists").isotope();

        // magnific popup
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        // light box
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });

        // homepage slides animations
        $(".homepage-slider").on("translate.owl.carousel", function(){
            $(".hero-text-tablecell .subtitle").removeClass("animated fadeInUp").css({'opacity': '0'});
            $(".hero-text-tablecell h1").removeClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.3s'});
            $(".hero-btns").removeClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.5s'});
        });

        $(".homepage-slider").on("translated.owl.carousel", function(){
            $(".hero-text-tablecell .subtitle").addClass("animated fadeInUp").css({'opacity': '0'});
            $(".hero-text-tablecell h1").addClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.3s'});
            $(".hero-btns").addClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.5s'});
        });



        // stikcy js
        $("#sticker").sticky({
            topSpacing: 0
        });

        //mean menu
        $('.main-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "992"
        });

         // search form
        $(".search-bar-icon").on("click", function(){
            $(".search-area").addClass("search-active");
        });

        $(".close-btn").on("click", function() {
            $(".search-area").removeClass("search-active");
        });

    });


    jQuery(window).on("load",function(){
        jQuery(".loader").fadeOut(1000);
    });


}(jQuery));

document.addEventListener("DOMContentLoaded", function () {
    const productItems = document.querySelectorAll('.single-product-item');
    const paginationContainer = document.getElementById('pagination');
    const prevButton = document.getElementById('prevBtn');
    const nextButton = document.getElementById('nextBtn');
    const filterButtons = document.querySelectorAll('.filter-button');
    const itemsPerPage = 6;
    let currentPage = 1;
    let filteredItems = [];

    function showPage(pageNumber) {
        const startIndex = (pageNumber - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        productItems.forEach((item, index) => {
            if (filteredItems.includes(item) && index >= startIndex && index < endIndex) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

        // Show or hide previous button
        prevButton.style.display = (pageNumber === 1) ? 'none' : 'inline-block';

        // Show or hide next button
        nextButton.style.display = (endIndex < filteredItems.length) ? 'inline-block' : 'none';
    }

        function generatePaginationButtons() {
        const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
        let buttonsHtml = '';

        for (let i = 1; i <= totalPages; i++) {
            buttonsHtml += `<button type="button" class="btn btn-secondary page-button" data-page="${i}">${i}</button>`;
        }

        paginationContainer.innerHTML = buttonsHtml;

        const pageButtons = document.querySelectorAll('.page-button');
        pageButtons.forEach(button => {
            button.addEventListener('click', function () {
                const pageNumber = parseInt(this.getAttribute('data-page'));
                currentPage = pageNumber;
                showPage(currentPage);
            });
        });
    }

    function filterItems(categorySlug) {
        filteredItems = [];
        productItems.forEach(item => {
            const itemSlug = item.getAttribute('data-slug');
            if (categorySlug === 'all' || categorySlug === itemSlug) {
                filteredItems.push(item);
            }
        });
        return filteredItems;
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categorySlug = this.getAttribute('data-category-slug');
            filteredItems = filterItems(categorySlug);
            const totalFilteredItems = filteredItems.length;
            const totalPages = Math.ceil(totalFilteredItems / itemsPerPage);

            if (totalPages > 1) {
                generatePaginationButtons();
            } else {
                paginationContainer.innerHTML = '';
            }

            currentPage = 1;
            showPage(currentPage);
        });
    });

    // Next button functionality
    nextButton.addEventListener('click', function () {
        if (currentPage < Math.ceil(filteredItems.length / itemsPerPage)) {
            currentPage++;
            showPage(currentPage);
        }
    });

    // Previous button functionality
    prevButton.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    // Initial display
    showPage(currentPage);
    generatePaginationButtons();
});

document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll('.filter-button');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categorySlug = this.getAttribute('data-category-slug');
            switch (categorySlug) {
                case 'red':
                    window.location.href = '/user/red';
                    break;
                case 'gray':
                    window.location.href = '/user/gray';
                    break;
                case 'blue':
                    window.location.href = '/user/blue';
                    break;
                case 'tosca':
                    window.location.href = '/user/tosca';
                    break;
                case 'white':
                    window.location.href = '/user/white';
                    break;
                case 'sarung':
                    window.location.href = '/user/sarung';
                    break;
                default:
                    // Jika slug tidak sesuai dengan yang diharapkan, tambahkan penanganan di sini
                    break;
            }
        });
    });
});
