<?php include 'header.php'; ?>

<section class="main-slider">
    <ul class="slider">

        <li>
            <div class="slider-img">
                <img src="images/s7.jfif" alt="Cupcakes">
                <div class="slider-text">
                    <h6>Fresh Cupcakes</h6>
                    <h1>Sweet Treats Made With Love</h1>
                    <a href="#" class="more_btn">Order Now</a>
                </div>
            </div>
        </li>

        <li>
            <div class="slider-img">
                <img src="images/s6.jfif" alt="Delivery">
                <div class="slider-text">
                    <h6>Home Delivery</h6>
                    <h1>Fresh Cakes At Your Doorstep</h1>
                    <a href="#" class="more_btn">Order Now</a>
                </div>
            </div>
        </li>

        <li>
            <div class="slider-img">
                <img src="images/s8.jfif" alt="Desserts">
                <div class="slider-text">
                    <h6>Custom Desserts</h6>
                    <h1>Perfect Cakes For Every Occasion</h1>
                    <a href="#" class="more_btn">Order Now</a>
                </div>
            </div>
        </li>

    </ul>
</section>

<!-- ABOUT US SECTION -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-md-6 text-center mb-4">
                <img src="images/about-cake.png"
                     alt="Cake Image"
                     class="img-fluid about-img">
            </div>

            <!-- Content -->
            <div class="col-md-6 about-content">
                <h2 class="about-title">About Us</h2>

                <p class="about-text">
                    At <strong>Cake Shop</strong>, we bake happiness every day.
                    Our cakes are made with premium ingredients, love, and creativity.
                </p>

                <p class="about-text">
                    From birthdays to weddings, we create cakes that make your moments
                    sweeter and more memorable.
                </p>

                <a href="#" class="btn about-btn">Read More</a>
            </div>

        </div>
    </div>
</section>


<!-- Service SECTION -->
<section class="services-section">
        <div class="container">
                    <h2 class="text-center section-title mb-5">Our Services</h2>
                    <div class="row">

                            <!-- Service 1 -->
                            <div class="col-md-4 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-img">
                        <img src="images/resize.png"alt="Birthday Cakes">
                    </div>

                    <h5>Birthday Cakes</h5>
                    <p>Custom birthday cakes made to bring joy and sweetness.</p>
                </div>
                            </div>

                            <!-- Service 2 -->
                            <div class="col-md-4 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-img">
                        <img src="images/service_wedding.png" alt="Wedding Cakes">
                    </div>
                    <h5>Wedding Cakes</h5>
                    <p>Elegant and beautiful cakes for your special day.</p>
                </div>
                            </div>

                            <!-- Service 3 -->
                            <div class="col-md-4 mb-4">
                <div class="service-card text-center h-100">
                     <div class="service-img">
                        <img src="images/service-custom.jfif" alt="Custom Cakes">
                     </div>
                    <h5>Custom Cakes</h5>
                    <p>Design your dream cake exactly the way you want.</p>
                </div>
                            </div>

                            <!-- Service 4 -->
                            <div class="col-md-4 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-img">
                         <img src="images/service-cupcake.jfif" alt="Cupcakes">
                    </div>
                    <h5>Cupcakes</h5>
                    <p>Soft, fluffy cupcakes in many delicious flavors.</p>
                </div>
                            </div>

                            <!-- Service 5 -->
                            <div class="col-md-4 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-img">
                        <img src="images/service-dessert.jfif" alt="Desserts">
                    </div>
                    
                    <h5>Desserts</h5>
                    <p>Fresh pastries, brownies, and sweet treats daily.</p>
                </div>
                            </div>

                        <!-- Service 6 -->
                        <div class="col-md-4 mb-4">
                <div class="service-card text-center h-100">
                    <div class="service-img">
                        <img src="images/service-delivery.jfif" alt="Home Delivery">
                    </div>
                    <h5>Home Delivery</h5>
                    <p>Fast and safe delivery to your doorstep with care.</p>
                </div>
                        </div>

                    </div>
        </div>
</section>

<!-- ContactON -->
<section class="contact-section">
        <div class="container">
        <h2 class="section-title">Contact Us</h2>

        <div class="row contact-box">
            
            <!-- MAP -->
            <div class="col-lg-6 contact-map">
                <iframe 
                    src="https://www.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>

            <!-- CONTACT DETAILS + FORM -->
            <div class="col-lg-6 contact-info">

                <h4>Get In Touch</h4>
                <p>We’d love to bake something special for you 🍰</p>

                <div class="info-item">
                    <strong>📍 Address:</strong>
                    <span>123 Sweet Street, Cake City</span>
                </div>

                <div class="info-item">
                    <strong>📞 Phone:</strong>
                    <span>+91 98765 43210</span>
                </div>

                <div class="info-item">
                    <strong>✉ Email:</strong>
                    <span>info@cakebakery.com</span>
                </div>

                <form class="contact-form" id="contactForm">
                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                    <input type="email" name="email" id="email" placeholder="Your Email" required>
                    <textarea name="message" id="message" rows="4" placeholder="Your Message" required></textarea>

                    <button type="submit" id="sendBtn">Send Message</button>

                    <p id="form-status"></p>
                </form>


            </div>

        </div>
        </div>
</section>

<?php include 'footer.php'; ?>
