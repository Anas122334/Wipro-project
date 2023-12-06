<?php
$title = "Contact IRG here for any questions, queries, or complaints.";
$description = "Contact IRG; Contact Imperial Resource Group by phone or live chat to order new service, track orders and get customer service, billing, and tech support.";
include("./include/header.php") ?>

<div class="container mt-5 mb-3">
    <div class="row g-3">
        <div class="col-12 col-md-4 col-sm-12">
            <img src="assets/image/contact-img.webp" class="img-fluid" style="height: 85%; border-top-right-radius: 13px; border-bottom-left-radius: 13px;" alt="">
        </div>
        <div class="col-12 col-md-8 col-sm-12">
            <h2 class="fw-bold">Leave Your Comment or Query Below.</h2>
            <div class="row g-5">
                <div class="col-12 col-md-7 col-sm-12">
                    <form class="row mt-3 g-4">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-12">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message:</label>
                            </div>
                        </div>

                        <div class="col-12 d-flex flex-column">
                            <button type="submit" class="btn text-white rounded  header-btn">Submit Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-5 col-sm-12">
                    <h2 class="mt-4 ">Our Address</h2>
                    <ul class="p-0 lh-lg">
                        <li class="fw-bold fs-5">Address</li>
                        <li><a href="" class="text-decoration-none text-dark">869 Walnut St, Macon, GA 31201</a> </li>
                        <li class="fw-bold fs-5">Phone Number</li>
                        <li><a href="tel:(888) 522 7703" class="text-decoration-none text-dark">(888) 522 7703</a></li>
                        <li class="fw-bold fs-5">Email Us</li>
                        <li><a href="mailto:info@irgdigital.com" class="text-decoration-none text-dark">info@irgdigital.com</a> </li>
                        <li class="fs-4"><i class="bi bi-facebook me-3"></i> <i class="bi bi-instagram me-3"></i> <i class="bi bi-twitter "></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid overflow-hidden p-0">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.1276470130388!2d-83.63277088481631!3d32.841871780952424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f3fe6397157f79%3A0x77a9e61de6e46e75!2s869%20Walnut%20St%2C%20Macon%2C%20GA%2031201%2C%20USA!5e0!3m2!1sen!2s!4v1612369422705!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php
include('./include/footer.php');
?>