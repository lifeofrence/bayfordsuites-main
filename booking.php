<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayford Suites | Luxury Hotel in Abuja, Nigeria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* Floating WhatsApp Icon */
        .whatsapp-float {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 2000;
            background: #25d366;
            color: #fff;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.18);
            font-size: 2rem;
            transition: background 0.2s, box-shadow 0.2s;
        }

        .whatsapp-float:hover {
            background: #128c7e;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.22);
        }

        @media (max-width: 576px) {
            .whatsapp-float {
                width: 46px;
                height: 46px;
                font-size: 1.5rem;
                bottom: 16px;
                right: 16px;
            }
        }

        :root {
            --primary: #000703;
            --secondary: #c19a6b;
            --accent: #d4af37;
            --light: #f8f5f0;
            --dark: #1c1c1c;
            --gray: #6c757d;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 15px 35px rgba(0, 0, 0, 0.12);
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.7;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            line-height: 1.3;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            color: white;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
            box-shadow: var(--shadow);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
            background: linear-gradient(135deg, var(--accent), var(--secondary));
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--secondary);
            color: var(--secondary);
        }

        .btn-secondary:hover {
            background: var(--secondary);
            color: white;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: var(--secondary);
        }

        .section-header p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        /* Header & Navigation */
        header {
            position: static;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        header.scrolled {
            padding: 10px 0;
            background: rgba(255, 255, 255, 0.98);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(26, 71, 42, 0.2);
        }

        .logo-img {
            width: 110px;
            height: 110px;
            object-fit: contain;
            box-shadow: 0 5px 15px rgba(26, 71, 42, 0.2);
            transition: width 0.3s, height 0.3s;
        }

        .logo-text h1 {
            font-size: 1.8rem;
            color: var(--primary);
            line-height: 1.2;
        }

        .logo-text span {
            font-size: 0.9rem;
            color: var(--secondary);
            font-weight: 500;
            letter-spacing: 1px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        .nav-menu a {
            font-weight: 500;
            position: relative;
            padding: 5px 0;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: var(--transition);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .nav-menu a.active {
            color: var(--secondary);
        }

        .header-cta {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            min-height: 700px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Images/exterior.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Rooms Section */
        .rooms {
            padding: 100px 0;
            background: white;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .room-img {
            height: 220px;
            background: #ddd;
            overflow: hidden;
        }

        .room-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .room-card:hover .room-img img {
            transform: scale(1.05);
        }

        .room-content {
            padding: 25px;
        }

        .room-title {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .room-price {
            font-size: 1.8rem;
            color: var(--secondary);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .room-price span {
            font-size: 1rem;
            color: var(--gray);
            font-weight: 400;
        }

        .room-features {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .feature i {
            color: var(--secondary);
        }

        /* Amenities Section */
        .amenities {
            padding: 100px 0;
            background: var(--light);
        }

        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .amenity-card {
            background: white;
            padding: 40px 30px;
            border-radius: var(--radius);
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .amenity-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .amenity-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 1.8rem;
            color: white;
        }

        .amenity-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Gallery Section */
        .gallery {
            padding: 100px 0;
            background: white;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .gallery-item {
            position: relative;
            height: 250px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay span {
            color: white;
            font-size: 1.2rem;
            font-weight: 500;
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 5px;
        }

        /* Contact & Booking */
        .contact-booking {
            padding: 100px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('Images/Reception.jpg') no-repeat center center/cover;
            background-attachment: fixed;
            position: relative;
        }

        .contact-booking .section-header h2,
        .contact-booking .section-header p {
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-text h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--primary);
        }

        /* Booking Form */
        .booking-form {
            background: var(--light);
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            box-sizing: border-box;
            /* ensure consistent sizing for text and select elements */
        }

        /* Specifically target select to ensure height matches input */
        select.form-control {
            height: 52px;
            /* approximate height of input fields */
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(193, 154, 107, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-logo .logo-icon {
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
        }

        .footer-logo p {
            opacity: 0.8;
            margin-top: 15px;
        }

        .footer-links h3,
        .footer-contact h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            color: white;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after,
        .footer-contact h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .footer-contact i {
            color: var(--secondary);
            width: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }

            .section-header h2 {
                font-size: 2.2rem;
            }

            .nav-menu {
                gap: 25px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 15px 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: white;
                flex-direction: column;
                justify-content: flex-start;
                padding: 40px 20px;
                transition: var(--transition);
                gap: 25px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                left: 0;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .booking-form {
                padding: 30px 20px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .room-content,
            .amenity-card {
                padding: 20px;
            }

            .container {
                padding: 0 15px;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <!-- Header & Navigation -->
    <header id="header">
        <div class="container header-container">
            <div class="logo">
                <img src="Images/BAYFORD LOGO.jpg" alt="Bayford Suites Logo" class="logo-img">
                <div class="logo-text">
                    <h1>Bayford Suites</h1>
                    <span>LUXURY HOTEL</span>
                </div>
            </div>

            <nav class="nav-menu" id="navMenu">
                <a href="index.html#home" class="active">Home</a>
                <a href="index.html#rooms">Rooms & Suites</a>
                <a href="index.html#amenities">Amenities</a>
                <a href="index.html#gallery">Gallery</a>
                <a href="index.html#contact-form">Contact</a>
                <a href="#" class="btn btn-secondary">Book Now</a>
            </nav>

            <div class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Booking Section -->
    <section class="contact-booking" id="reservation" style="padding-top: 30px;">
        <div class="container">
            <div class="section-header">
                <h2>Book Your Stay</h2>
                <!-- <p>Reserve your preferred room or suite directly. We're here to make your reservation process
                    seamless.</p> -->
            </div>

            <div class="contact-container" style="display: flex; justify-content: center;">
                <!-- Booking Form -->
                <div class="booking-form fade-in" id="booking">
                    <!-- <h3 style="margin-bottom: 25px; color: var(--primary);">Book Your Stay</h3> -->
                    <form id="bookingForm" action="process_booking.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="checkin">Check-in Date</label>
                                <input type="date" id="checkin" name="checkin" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="checkout">Check-out Date</label>
                                <input type="date" id="checkout" name="checkout" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="guests">Guests</label>
                                <select id="guests" name="guests" class="form-control" required>
                                    <option value="1">1 Guest</option>
                                    <option value="2" selected>2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                    <option value="5+">5+ Guests</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="roomType">Room Type</label>
                                <select id="roomType" name="room" class="form-control" required
                                    onchange="updatePrice()">
                                    <option value="Classic Room" data-price="70000">Classic Room - ₦70,000/night
                                    </option>
                                    <option value="Deluxe Room" data-price="80000">Deluxe Room - ₦80,000/night</option>
                                    <option value="Superior Deluxe Room" data-price="90000">Superior Deluxe Room -
                                        ₦90,000/night</option>
                                    <option value="Diplomatic Suite" data-price="100000">Diplomatic Suite -
                                        ₦100,000/night</option>
                                    <option value="Executive Suite" data-price="120000">Executive Suite - ₦120,000/night
                                    </option>
                                    <option value="Event Hall" data-price="500000">Event Hall - ₦500,000/day</option>
                                </select>
                                <input type="hidden" id="pricePerNight" name="pricePerNight" value="70000">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="nofroom">Number of Rooms</label>
                                <input type="number" id="nofroom" name="nofroom" class="form-control" min="1" value="1"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="payment">Payment Method</label>
                                <select id="payment" name="payment" class="form-control" required>
                                    <option value="Pay on Arrival">Pay on Arrival</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control"></textarea>
                        </div>

                        <button type="button" onclick="confirmBooking()" class="btn" style="width: 100%;">Review &
                            Book</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-logo">
                    <img src="Images/BAYFORD LOGO.jpg" alt="Bayford Suites Logo" class="logo-img">
                    <h3>Bayford Suites</h3>
                    <p>Experience luxury, comfort, and exceptional service in the heart of Abuja's vibrant Wuse
                        district.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.html#home">Home</a></li>
                        <li><a href="index.html#rooms">Rooms & Suites</a></li>
                        <li><a href="index.html#amenities">Amenities</a></li>
                        <li><a href="index.html#contact-form">Contact Us</a></li>
                        <li><a href="#">Book Now</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 4 Malabo Street, Wuse 2, Abuja FCT</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:09066592458">0906 659 2458</a></p>
                    <p><i class="fas fa-envelope"></i> <a
                            href="mailto:info@bayfordsuites.com">info@bayfordsuites.com</a></p>
                    <p><i class="fas fa-globe"></i> <a href="http://bayfordsuites.com"
                            target="_blank">www.bayfordsuites.com</a></p>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2026 Bayford Suites. All Rights Reserved. <i style="color: #ff4757;"></i> </p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/2349066592458" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('active')
                ? '<i class="fas fa-times"></i>'
                : '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Header scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Scroll animation
        const fadeElements = document.querySelectorAll('.fade-in');

        const fadeInOnScroll = () => {
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };

        window.addEventListener('scroll', fadeInOnScroll);
        // Trigger once on load
        fadeInOnScroll();

        // The form posts to process_booking.php naturally now.
        // updatePrice function mapped to the onchange
        function updatePrice() {
            var select = document.getElementById("roomType");
            var price = select.options[select.selectedIndex].getAttribute("data-price");
            document.getElementById("pricePerNight").value = price;
        }

        // Set min date for check-in to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('checkin').min = today;

        // Update checkout min date when checkin changes
        document.getElementById('checkin').addEventListener('change', function () {
            document.getElementById('checkout').min = this.value;
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    <script src="js/bookingAlert.js"></script>
    <script src="js/bookingConfirmation.js"></script>
</body>

</html>