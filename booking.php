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
    <link rel="stylesheet" href="css/style.css">
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