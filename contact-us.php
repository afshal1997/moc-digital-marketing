<?php include 'CommonFile/Header.php'; ?>

<main>
    <section class="contactUsMainBanner">
        <div class="container">
            <div class="card contactUsMainBannerCard position-relative">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 text-center m-auto">
                            <h2 data-aos="fade-right" data-aos-duration="3000">Contact Us</h2>
                            <a href="#contactUsSection02" class="scroll-down" address="true"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contactUsSection02" id="contactUsSection02">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-2 mt-2">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11801.240254138354!2d-83.305161!3d42.314585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b4afe5c7e59e3%3A0x1c87f2c4f0f6e6a7!2s25765%20Wilson%20Dr%2C%20Dearborn%20Heights%2C%20MI%2048127!5e0!3m2!1sen!2sus!4v1645461103488!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-5 m-auto mb-2 mt-2">
                    <div class="contactForm">
                        <h5 class="mb-0">CONTACT US</h5>
                        <h4>GET IN TOUCH</h4>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="number" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" id="number" placeholder="Enter Number">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <a data-aos="fade-left" type="submit" data-aos-duration="1000" class="btnKnowMore" href="javascript:void(0)">Submit Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'CommonFile/asSeenOnSection.php'; ?>

    <?php include 'CommonFile/subscribtionSection.php'; ?>

</main>

<?php include 'CommonFile/Footer.php'; ?>