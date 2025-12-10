<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <style>
        body{
            padding:0;
            margin:0;
            margin-top: -20px;
        }
        .main {
            background-image: url('/images/sectionFirst.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 630px;
        }

        .hero-section {
            padding: 80px 0;
            background: #f8f8fa;    /* light background */
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .left-content {
            width: 50%;
        }

        .left-content .tag {
            display: inline-block;
            background: #eee;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
        }

        .left-content h1 {
            font-size: 42px;
            font-weight: 700;
            color: #1a1a1a;
            margin: 20px 0;
        }

        .left-content p {
            color: #555;
            line-height: 1.6;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }

        .btn-primary {
            background: #5145ff;
            color: white;
            padding: 12px 26px;
            border-radius: 30px;
        }

        .btn-light {
            background: #fff;
            border: 1px solid #ccc;
            padding: 12px 26px;
            border-radius: 30px;
        }

        .right-content {
            width: 38%;
            text-align: center;
            background-image: url('/images/boy.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            
            height: 580px;
            border-radius: 20px;
        }

        .hero-img {
            
            height:560px;
           
        }

    </style>
</head>
<body>

    <section class="main">
        
    </section>
    <section class="about-section">
    <div class="about-container">

        <!-- Left Side Content -->
        <div class="about-left">
            <span class="tag">Testimonial</span>

            <h2>What Do Our <br> Clients Say</h2>

            <p>
                We make shipping simple with fast booking, real-time tracking, and on-time delivery
                for every cargo across the globe.
            </p>

            <div class="btn-group">
                <a href="#" class="btn-primary">Contact us</a>
                <a href="#" class="btn-light">Get Started</a>
            </div>
        </div>

        <!-- Right Side Cards -->
        <div class="testimonial-slider">

            <!-- Card 1 -->
            <div class="testimonial-card">
                <div class="user-info">
                    <img src="{{ asset('images/user1.png') }}" alt="">
                    <div>
                        <h4>Olivia Jonathan</h4>
                        <p>CEO of Stripex</p>
                    </div>
                </div>

                <div class="stars">★★★★★</div>

                <p class="review">
                    “ShipX has completely changed the way we manage logistics. The platform is easy to use,
                    and their tracking system keeps us updated at every step.”
                </p>

                <div class="locations">
                    <span>Mumbai</span>
                    <span>→</span>
                    <span>Delhi</span>
                </div>

                <span class="verified">✔ Verified</span>
            </div>

            <!-- Card 2 -->
            <div class="testimonial-card">
                <div class="user-info">
                    <img src="{{ asset('images/user2.png') }}" alt="">
                    <div>
                        <h4>Maria Jane</h4>
                        <p>CFO of Nexa</p>
                    </div>
                </div>

                <div class="stars">★★★★★</div>

                <p class="review">
                    “Excellent service and fast shipping experience. Highly professional team and smooth operations.”
                </p>

                <span class="verified">✔ Verified</span>
            </div>

        </div>
    </div>
</section>


    <section class="hero-section">
        <div class="container">
            <div class="left-content">
                <span class="tag">Tracking</span>

                <h1>Unlock The Full <br> Power of ShipX Logistics</h1>

                <p>
                    Track shipments, monitor vehicles, and analyze data—all from one smart dashboard.
                    ShipX simplifies your logistics with full control and visibility.
                </p>

                <div class="buttons">
                    <a href="#" class="btn btn-primary">Contact us</a>
                    <a href="#" class="btn btn-light">Get Started</a>
                </div>
            </div>

            <div class="right-content">
                {{-- <img src="{{ asset('images/boy.png') }}" alt="Boy Image" class="hero-img"> --}}
            </div>
        </div>
    </section>


    <section class="contact-section">
    <div class="contact-container">

        <!-- Left Side Map -->
        <div class="contact-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.796393178563!2d72.571362!3d23.022505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f122e3e65f%3A0x123456789abcdef!2sIndia!5e0!3m2!1sen!2sin!4v1700000000000"
                width="100%" height="350" style="border:0; border-radius:12px;" allowfullscreen="">
            </iframe>
        </div>

        <!-- Right Side Form -->
        <div class="contact-form">
            <h3>Send Us A Message</h3>

            <form>

                <div class="row">
                    <input type="text" placeholder="Full Name">
                    <input type="text" placeholder="Business Name">
                </div>

                <div class="row">
                    <input type="email" placeholder="Email Id">
                    <input type="text" placeholder="Phone Number">
                </div>

                <div class="row" style=" background-color: transparent; ">
                    <input type="file">
                </div>

                <textarea placeholder="Your Message"></textarea>

                <button class="submit-btn">Submit</button>
            </form>
        </div>

    </div>
</section>




    <footer class="footer">
        <div class="footer-container">

            <!-- Left Branding -->
            <div class="footer-left">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="ShipX Logo">
                </div>

                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

            <!-- Middle Columns -->
            <div class="footer-columns">

                <div class="footer-col">
                    <h4>Subscribe to Channel</h4>
                    <div class="subscribe-wrap">
                        <input type="email" placeholder="Enter your Email">
                        <button>Sign up</button>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Explore</h4>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Solutions</li>
                        <li>Blog</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Solutions</h4>
                    <ul>
                        <li>Freight Management</li>
                        <li>Order Tracking</li>
                        <li>Carrier Integration</li>
                        <li>Analytics Dashboard</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul>
                        <li>Help Center</li>
                        <li>FAQs</li>
                        <li>Terms of Service</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            ©2025 ShipX. All Rights Reserved.
        </div>
    </footer>
<style>


.about-section {
    background: #0f1434;
    color: white;
    padding: 90px 0;
}

.about-container {
    max-width: 1250px;
    margin: auto;
    padding: 0 25px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.about-left {
    width: 35%;
}

.about-left .tag {
    background: rgba(255,255,255,0.12);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 14px;
    display: inline-block;
}

.about-left h2 {
    margin: 20px 0;
    font-size: 40px;
    line-height: 1.2;
}

.about-left p {
    color: #c9c9c9;
    line-height: 1.6;
    margin-bottom: 25px;
}

.btn-group {
    display: flex;
    gap: 15px;
}

.btn-primary {
    background: #5145FF;
    padding: 12px 24px;
    border-radius: 30px;
    color: #fff;
}

.btn-light {
    background: #ffffff;
    color: #000;
    padding: 12px 24px;
    border-radius: 30px;
}

/* Right Testimonials */
.testimonial-slider {
    width: 60%;
    display: flex;
    gap: 20px;
}

.testimonial-card {
    width: 50%;
    background: rgba(255,255,255,0.08);
    border-radius: 18px;
    padding: 25px;
    backdrop-filter: blur(10px);
}

.user-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.user-info img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.stars {
    margin: 12px 0;
    color: #6d84ff;
    font-size: 18px;
}

.review {
    font-size: 15px;
    line-height: 1.6;
    color: #d6d6d6;
    margin-bottom: 15px;
}

.locations span {
    color: #ddd;
    font-size: 14px;
    margin-right: 8px;
}

.verified {
    display: flex;
    margin-top: 10px;
    color: #8aff8a;
    font-size: 14px;
}


.contact-section {
    background: #0f1434;
    padding: 80px 0;
    color: white;
    font-family: "Poppins", sans-serif;
}

.contact-container {
    max-width: 1250px;
    margin: auto;
    padding: 0 25px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

/* Left Map */
.contact-map {
    width: 40%;
}

.contact-map iframe {
    width: 100%;
    height: 420px;
    border-radius: 12px;
}

/* Right Form */
.contact-form {
    width: 55%;
}

.contact-form h3 {
    margin-bottom: 20px;
    font-size: 26px;
}

.contact-form form {
    width: 100%;
}

.contact-form .row {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    background: transparent;
    border: 1px solid #37406a;
    padding: 12px 14px;
    border-radius: 8px;
    color: white;
    outline: none;
}

.contact-form input[type="file"] {
    padding: 6px;
    background: #fff;
    color: #000;
}

/* Message Box */
.contact-form textarea {
    height: 120px;
    resize: none;
}

/* Submit Button */
.submit-btn {
    margin-top: 10px;
    background: #2ecc71;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
}

.submit-btn:hover {
    background: #27ae60;
}


    .footer {
    background: #ffffff;
    padding: 50px 0 25px;
    border-top: 1px solid #eaeaea;
    font-family: "Poppins", sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    padding: 0 25px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.footer-left {
    width: 20%;
}

.footer-left .logo img {
    width: 110px;
}

.social-icons {
    margin-top: 18px;
}

.social-icons i {
    font-size: 18px;
    margin-right: 12px;
    cursor: pointer;
    color: #333;
}

.footer-columns {
    width: 75%;
    display: flex;
    justify-content: space-between;
}

.footer-col h4 {
    font-size: 15px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.footer-col ul li {
    list-style: none;
    margin-bottom: 8px;
    color: #777;
    cursor: pointer;
}

.footer-col ul li:hover {
    color: #5145FF;
}

.subscribe-wrap {
    display: flex;
    gap: 10px;
    margin-top: 5px;
}

.subscribe-wrap input {
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 170px;
}

.subscribe-wrap button {
    background: #5145FF;
    color: #fff;
    border: none;
    padding: 10px 16px;
    border-radius: 8px;
    cursor: pointer;
}

.subscribe-wrap button:hover {
    background: #3d33d9;
}

.footer-bottom {
    margin-top: 30px;
    text-align: right;
    padding-right: 25px;
    color: #888;
    font-size: 14px;
}

</style>

    
</body>
</html>