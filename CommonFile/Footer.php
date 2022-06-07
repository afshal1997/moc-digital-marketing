<footer>
    <div class="footer-info pt-5 pb-5">
        <div class="container">
            <div class="footer-details">
                <div class="row">
                    <div class="col-lg-3">
                        <div>
                            <img class="footerMainLogo" src="Assets/Images/footer/footerMainLogo.png" alt="Assets/Images/footer/footerMainLogo.png">
                            <ul>
                                <li>
                                    <a href="tel:+13134430033">TEL: +13134430033</a>
                                </li>
                                <li>
                                    <p class="emailHeading">EMAIL :</p>
                                    <a href="mailto:contact@mocdigitalmarketing.com" class="text-lowercase">contact@mocdigitalmarketing.com</a>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-lg-1 text-light">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="col-lg-9">
                                            <p class="text-light mb-2"><b>Present Location</b></p>
                                            <a href="javascript:void(0)">
                                                25765 Wilson Dearborn
                                                HTS 48127 Michigan
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-uppercase mb-4">About Us</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">grow</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">pricing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">work</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">about moc</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">contact</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">pricacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-uppercase mb-4">Support</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">get started us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">contact us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">blog posts</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">need helps</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">join with us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">FAQ's</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-uppercase mb-4">Services</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Content Writing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Design</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Google</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Social Media Marketing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h4 class="text-uppercase mb-4">Services</h4>
                        <div class="footer-social-posts">
                            <div class="row ">
                                <div class="col-3 col-lg-3">
                                    <img class="w-100 mb-3" src="Assets/Images/instagram-posts/post1.png" alt="">
                                </div>
                                <div class="col-3 col-lg-3">
                                    <img class="w-100 mb-3" src="Assets/Images/instagram-posts/post2.png" alt="">
                                </div>
                                <div class="col-3 col-lg-3">
                                    <img class="w-100 mb-3" src="Assets/Images/instagram-posts/post3.png" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-lg-3">
                                    <img class="w-100 mb-3" src="Assets/Images/instagram-posts/post4.png" alt="">
                                </div>
                                <div class="col-3 col-lg-3">
                                    <img class="w-100 mb-3" src="Assets/Images/instagram-posts/post5.png" alt="">
                                </div>
                                <div class="col-3 col-lg-3">
                                    <img class="w-100 mb-3" src="Assets/Images/instagram-posts/post5.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-3">
                            <div class="col">
                                <h4 class="text-uppercase mb-0">follow us</h4>
                            </div>
                            <div class="footer-social-link col m-auto">
                                <i class="me-3 fab fa-facebook-f"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-section pt-3 pb-3">
        <div class="container">
            <div class="row justify-content-center m-auto">
                <div class="col-lg-5 m-auto ms-0">
                    <div class="footerBottom">
                        <p class="mb-0">
                            <b>Copyright © 2021 MOC Digital Marketing. All Rights Reserved.</b>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 last-footer">
                    <ul>
                        <li><a href="javascript:void(0)" class="text-light text-decoration-none">Privacy</a></li>
                        <li><a href="javascript:void(0)" class="text-light text-decoration-none">Terms & Conditions</a></li>
                        <li><a href="javascript:void(0)" class="text-light text-decoration-none">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<?php include 'CommonFile/All_Js_Links.php'; ?>
<script>
    $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });

    $('.awards').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        // fade: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }
        ]
    });

    var navbar = document.querySelector('.navbar')
    window.onscroll = function() {
        if (window.pageYOffset > 0) {
            navbar.classList.add('scrolled')
        } else {
            navbar.classList.remove('scrolled')
        }
    }

    $("#slider01").on("input change", (e) => {
        const sliderPos = e.target.value;
        // Update the width of the foreground image
        $('.foreground-img01').css('width', `${sliderPos}%`)
        // Update the position of the slider button
        $('.slider-button01').css('left', `calc(${sliderPos}% - 18px)`)
    });

    $("#slider02").on("input change", (e) => {
        const sliderPos = e.target.value;
        // Update the width of the foreground image
        $('.foreground-img02').css('width', `${sliderPos}%`)
        // Update the position of the slider button
        $('.slider-button02').css('left', `calc(${sliderPos}% - 18px)`)
    });

    $("#slider03").on("input change", (e) => {
        const sliderPos = e.target.value;
        // Update the width of the foreground image
        $('.foreground-img03').css('width', `${sliderPos}%`)
        // Update the position of the slider button
        $('.slider-button03').css('left', `calc(${sliderPos}% - 18px)`)
    });

    $("#slider04").on("input change", (e) => {
        const sliderPos = e.target.value;
        // Update the width of the foreground image
        $('.foreground-img04').css('width', `${sliderPos}%`)
        // Update the position of the slider button
        $('.slider-button04').css('left', `calc(${sliderPos}% - 18px)`)
    });

    AOS.init();
</script>

</html>