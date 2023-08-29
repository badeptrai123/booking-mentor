<?php
include 'layout/header-contact.php';
?>
<div class="wrapper-contact">
    <div class="contact-header">
        <h2 class="text-center">Contact Us</h2>
        <p class="contact-title text-center">Queries, complaints and feedback. We will be happy to serve you</p>
        <div class="container">
            <div class="row row-contact">
                <div class="col-md-12 contact-icon px-5">
                    <div id="phone" class="contact-item d-flex pl-4 bg-white">
                        <div class="icon mx-1 text-white ">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text mx-1 d-flex ">
                            <span>Free Call</span>
                            <span>(406) 555-0120</span>
                        </div>
                    </div>
                    <div id="spp" class="contact-item pl-4 bg-white">
                        <div class="icon mx-1 d-flex">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text mx-1 ">
                            <span>Online Support</span>
                            <span>mail@example.com</span>
                        </div>
                    </div>
                    <div id="location" class="contact-item pl-4 bg-white">
                        <div class="icon mx-1 d-flex">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text ">
                            <span>Online Location</span>
                            <span>3605 Parker Rd.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5  map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.0714548777914!2d106.7799649747676!3d10.882169857234889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d89aad780e49%3A0x54542761d4c22175!2sKTX%20Khu%20B%2C%20%C4%90HQG!5e0!3m2!1svi!2s!4v1688655037384!5m2!1svi!2s"
                        height="547" style="border:0;text-align:center" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-5 mb-10 contact-info">
                    <form action="">
                        <p class="form-title">Get to Know us</p>
                        <div class='borderDash col-12'></div>
                        <div class="info-name col-12">
                            <label for="" class="form-label">Name</label>
                            <input type="text" placeholder="Enter Name" class="form-control">
                        </div>
                        <div class="info-email mt-4 col-12">
                            <label for="">Email</label>
                            <input type="text" placeholder="Enter Email" class="form-control ">
                        </div>
                        <div class="info-message mt-4 col-12">
                            <label for="">Message</label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary mt-4 col-12 ml-3">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>