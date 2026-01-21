<?php include 'includes/header.php'; ?>

<main>
    <!-- New Hero Design (Architect Style) -->
    <section id="home" class="architect-hero">
        <div class="hero-split-layout">
            <!-- Left Panel -->
            <div class="hero-panel-left">
                <div class="hero-logo" data-aos="fade-down">
                    <i class="fas fa-layer-group"></i> EMAARA <span>INTERIORS</span>
                </div>
                
                <div class="hero-main-content" data-aos="fade-up" data-aos-delay="200">
                    <h1>WE CREATE <span class="highlight-yellow">ARCHITECT</span> <br> <span class="highlight-yellow">SOMETHING SPECIAL</span> <br> FOR YOU</h1>
                    <p>Transform your space into a masterpiece with our expert design services.</p>
                    <br>
                    <div class="hero-cta-wrapper">
                        <a href="#contact" class="btn-architect">Contact Us <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="hero-inset-image" data-aos="fade-up" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=400&q=80" alt="Interior Detail">
                </div>
            </div>

            <!-- Right Panel -->
            <div class="hero-panel-right">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=80" alt="Hero Main" class="hero-bg-img" data-aos="zoom-out" data-aos-duration="1500">
                
                <!-- Vertical Navigation -->
                <nav class="vertical-nav" data-aos="fade-left" data-aos-delay="600">
                    <div class="menu-trigger">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="v-nav-links">
                        <li><a href="#contact">CONTACT US</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#essentials">ESSENTIALS</a></li>
                        <li><a href="#banner-services">SERVICES</a></li>
                        <li><a href="#home" class="active">HOME</a></li>
                    </ul>
                </nav>

                <!-- Trust Stats Badge -->
                <div class="trust-badge" data-aos="fade-up" data-aos-delay="800">
                    <div class="trust-header">
                        <span>Those Who Trust Us</span>
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </div>
                    <div class="trust-count">
                        <strong>4.1k</strong>
                        <p><span>+</span> Companies <br> Thriving</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services / Banner Grid Section (Urban Company Style) -->
    <section id="banner-services" class="banner-services">
        <div class="container">
            <h2 class="services-main-title" data-aos="fade-right">Home services at your <br> doorstep</h2>
            
            <div class="services-split-layout">
                <!-- Left Side: Service Selector -->
                <div class="services-left" data-aos="fade-right">
                    <div class="service-selector-card">
                        <h3>What are you looking for?</h3>
                        <div class="services-icon-grid">
                            <div class="service-icon-item" onclick="openPopup('Insta Help')">
                                <div class="icon-box">
                                    <i class="fas fa-bolt" style="color: #10B981;"></i>
                                    <span class="badge-tag new">New</span>
                                </div>
                                <span>Insta Help</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Salon')">
                                <div class="icon-box"><i class="fas fa-spa"></i></div>
                                <span>Women's Salon & Spa</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Mens Salon')">
                                <div class="icon-box"><i class="fas fa-scissors"></i></div>
                                <span>Men's Salon & Massage</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Cleaning')">
                                <div class="icon-box"><i class="fas fa-broom"></i></div>
                                <span>Cleaning & Pest Control</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Electrician')">
                                <div class="icon-box"><i class="fas fa-hammer"></i></div>
                                <span>Electrician, Plumber & Carpenter</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Water Purifier')">
                                <div class="icon-box"><i class="fas fa-filter"></i></div>
                                <span>Native Water Purifier</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Painting')">
                                <div class="icon-box"><i class="fas fa-paint-roller"></i></div>
                                <span>Painting & Waterproofing</span>
                            </div>
                             <div class="service-icon-item" onclick="openPopup('AC Repair')">
                                <div class="icon-box">
                                    <i class="fas fa-snowflake"></i>
                                    <span class="badge-tag sale">Sale</span>
                                </div>
                                <span>AC & Appliance Repair</span>
                            </div>
                            <div class="service-icon-item" onclick="openPopup('Revamp')">
                                <div class="icon-box"><i class="fas fa-couch"></i></div>
                                <span>Wall makeover by Revamp</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Image Collage (Urban Company Style) -->
                <div class="services-right" data-aos="fade-left">
                    <div class="collage-grid">
                        <img src="https://images.unsplash.com/photo-1560750588-73207b1ef5b8?auto=format&fit=crop&w=800&q=80" alt="Women Salon" class="collage-img img-1">
                        <img src="https://tse1.mm.bing.net/th/id/OIP.gTXR-cYi2SYuYRItGoE8mAHaFP?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Men Massage" class="collage-img img-2">
                        <img src="https://img.freepik.com/premium-photo/classic-luxury-living-room-interior-with-sofa-plants_1090394-26592.jpg" alt="Cleaning" class="collage-img img-3">
                        <img src="https://tse1.mm.bing.net/th/id/OIP.Hj3MCTRR_F9XoCSv8qb7OwAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="AC Repair" class="collage-img img-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- In the Spotlight Slider Section -->
    <section id="spotlight" class="spotlight-section">
        <div class="container">
            <h2 data-aos="fade-right">In the spotlight</h2>
            <div class="spotlight-slider" data-aos="fade-up">
                <div class="spotlight-card">
                    <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=600&q=80" alt="Spotlight 1">
                    <div class="spotlight-content">
                        <h3>Big transformations, zero stress.</h3>
                        <a href="https://wa.me/yournumber" class="btn-outline">Explore</a>
                    </div>
                </div>
                <div class="spotlight-card">
                    <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=600&q=80" alt="Spotlight 2">
                    <div class="spotlight-content">
                        <h3>Trained house help when your maid is on leave</h3>
                        <a href="https://wa.me/yournumber" class="btn-outline">Book now</a>
                    </div>
                </div>
                <div class="spotlight-card">
                    <img src="https://scdecorum.com/wp-content/uploads/2023/09/image-364.png" alt="Spotlight 3">
                    <div class="spotlight-content">
                        <h3>Upgrade to Luxe at ₹249 more</h3>
                        <a href="https://wa.me/yournumber" class="btn-outline">Book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Testimonials Section (SkillZen Style) -->
    <section id="video-testimonials" class="video-testimonials">
        <div class="container video-container">
            <div class="video-info" data-aos="fade-right">
                <span class="badge">Highlights</span>
                <h2>Real Results Shared by <br> <span>SkillZen Community</span></h2>
                <p>Listen to our franchise partners as they discuss their growth, operational experience, and the impact of running a SkillZen Studio.</p>
            </div>
            <div class="video-grid" data-aos="fade-left">
                <div class="video-item">
                    <div class="play-btn"></div>
                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&w=400&q=80" alt="Video 1">
                </div>
                <div class="video-item">
                    <div class="play-btn"></div>
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&w=400&q=80" alt="Video 2">
                </div>
                <div class="video-item">
                    <div class="play-btn"></div>
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=400&q=80" alt="Video 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Cleaning Essentials / Service Cards -->
    <section id="essentials" class="essentials-section">
        <div class="container">
            <div class="section-header">
                <h2>Cleaning Essentials</h2>
                <p>Monthly cleaning essential services</p>
                <a href="#services" class="btn-link">See all</a>
            </div>
            <div class="essentials-wrapper">
                <button class="essentials-arrow left">&#10094;</button>
                <div class="essentials-grid" data-aos="fade-up">
                    <div class="essential-card">
                        <img src="https://tse2.mm.bing.net/th/id/OIP.9-4Ipg9SMplVacW10QhcgAHaFi?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bathroom Cleaning">
                        <div class="card-details">
                            <h3>Intense bathroom cleaning</h3>
                        <p class="rating">★ 4.80</p>
                        <p class="price">₹449 <span class="strike">₹549</span></p>
                    </div>
                </div>
                <div class="essential-card">
                    <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80" alt="Toilet Cleaning">
                    <div class="card-details">
                        <h3>Intense cleaning (2 bathrooms)</h3>
                        <p class="rating">★ 4.80</p>
                        <p class="price">₹898 <span class="strike">₹1,098</span></p>
                    </div>
                </div>
                <div class="essential-card">
                    <img src="https://th.bing.com/th/id/OIP.pGIRg2vZ8FqLjBzSDpMolwHaE8?w=292&h=195&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Chimney Cleaning">
                    <div class="card-details">
                        <h3>Chimney cleaning</h3>
                        <p class="rating">★ 4.84</p>
                        <p class="price">₹399</p>
                    </div>
                </div>
                <div class="essential-card">
                    <img src="https://images.unsplash.com/photo-1588854337221-4cf9fa96059c?auto=format&fit=crop&w=400&q=80" alt="Fridge Cleaning">
                    <div class="card-details">
                        <h3>Fridge cleaning</h3>
                        <p class="rating">★ 4.83</p>
                        <p class="price">₹399</p>
                    </div>
                </div>
                <div class="essential-card">
                    <img src="https://images.unsplash.com/photo-1587560699334-cc4ff634909a?auto=format&fit=crop&w=400&q=80" alt="Pest Control">
                    <div class="card-details">
                        <h3>Cockroach control</h3>
                        <p class="rating">★ 4.79</p>
                        <p class="price">₹1,249</p>
                    </div>
                </div>
            </div>
            <button class="essentials-arrow right">&#10095;</button>
</div>
        </div>
    </section>

    <!-- Smart Locks / Featured Section -->
    <section id="smart-locks" class="featured-section">
        <div class="container featured-container">
            <div class="featured-text" data-aos="fade-right">
                <span class="promo-badge">Up to ₹3,700 off</span>
                <h2>NATIVE</h2>
                <h3>Smart locks</h3>
                <p>Camera. Doorbell. All-in-one. Living Room With Sofa Plants royalty.</p>
                <a href="#" class="btn-primary">Buy now</a>
            </div>
            <div class="featured-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1558211583-d26f610c1eb1?auto=format&fit=crop&w=800&q=80" alt="Smart Lock">
            </div>
        </div>
    </section>

    <!-- About Us Section (Architectural Journey Style) -->
    <section id="about" class="about-section">
        <div class="container about-container">
            <div class="about-content" data-aos="fade-right">
                <span class="sub-title">About us</span>
                <h2>Our Architectural <br> Journey</h2>
                <p>Founded with a belief in the transformative power of architecture, VerdeVista Design Group traces its roots back to a small team with big dreams.</p>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <h3>50+ years</h3>
                        <p>of shaping architectural landscapes</p>
                    </div>
                    <div class="stat-item">
                        <h3>100+ Projects</h3>
                        <p>successfully delivered with excellence</p>
                    </div>
                    <div class="stat-item">
                        <h3>20+ Awards</h3>
                        <p>won, underscoring our dedication to innovative</p>
                    </div>
                    <div class="stat-item">
                        <h3>99% Success</h3>
                        <p>reflects our client-centric approach.</p>
                    </div>
                </div>
            </div>
            <div class="about-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80" alt="About Team">
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why-choose" class="why-choose-section">
        <div class="container">
            <div class="why-choose-header" data-aos="fade-up">
                <div class="badge-pill light">
                    <span class="dot"></span> WHY CHOOSE US
                </div>
                <h2>Your <span class="highlight-red">Trusted</span> Homecare Partner</h2>
            </div>
            
            <div class="why-choose-main-grid" data-aos="fade-up">
                <!-- Left Features -->
                <div class="features-left">
                    <div class="feature-item-v2">
                        <h3>Medical & Non-Medical Services</h3>
                        <p>From nursing and therapy to companionship and daily assistance</p>
                    </div>
                    <div class="feature-item-v2">
                        <h3>Modern Monitoring & Health Tracking</h3>
                        <p>Technology-enabled tracking, digital reports, medication reminders</p>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="center-image-wrapper">
                    <div class="image-inner">
                        <img src="https://tse1.mm.bing.net/th/id/OIP.QhfKfabJcOXlmXNA2cnPygHaEz?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Homecare Service">
                    </div>
                    <div class="glow-effect"></div>
                </div>

                <!-- Right Features -->
                <div class="features-right">
                    <div class="feature-item-v2 right-aligned">
                        <h3>Family-Centered Care Approach</h3>
                        <p>We focus on comfort, dignity, independence, and building trust</p>
                    </div>
                    <div class="feature-item-v2 right-aligned">
                        <h3>24/7 Support & Emergency Assistance</h3>
                        <p>Round-the-clock care, monitoring, and helpline to ensure safety at all times.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Steps Cards -->
            <div class="why-choose-steps-grid" data-aos="fade-up">
                <div class="step-card">
                    <div class="step-badge">Step 1</div>
                    <div class="step-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h4>Select Your Service</h4>
                    <p>Choose from nursing care, elder care, therapy, or medical assistance based on your specific needs.</p>
                </div>
                <div class="step-card">
                    <div class="step-badge">Step 1</div>
                    <div class="step-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <h4>Choose Date & Time</h4>
                    <p>Pick your preferred date and time, and we'll assign a certified caregiver and share booking details.</p>
                </div>
                <div class="step-card">
                    <div class="step-badge">Step 1</div>
                    <div class="step-icon">
                        <i class="far fa-smile-beam"></i>
                    </div>
                    <h4>Care Begins at Home</h4>
                    <p>Our professional caregiver arrives at your location and starts personalized care with full support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="testimonials-header" data-aos="fade-up">
                <span class="badge-pill">Testimonials</span>
                <h2>What They Say About Us</h2>
                <h3>Words That Inspire Confidence</h3>
                <p>Find out how our happy clients are raving about us.</p>
            </div>
            
            <div class="testimonials-bento-grid" data-aos="fade-up">
                <!-- Large Spotify Card -->
                <div class="testimonial-card bento-large spotify-card">
                    <div class="card-top">
                        <span class="stat-number">6X</span>
                        <h3>Increase in Impact</h3>
                    </div>
                    <div class="quote-content">
                        <span class="quote-mark">“</span>
                        <p>“ From the very beginning, the team demonstrated a deep understanding of our brand and goals. Their ability to translate our vision into a clean, modern interface was nothing short of impressive. Not only did they meet our expectations—they exceeded them in every way. We’ve already seen a positive impact on user engagement ”</p>
                    </div>
                    <div class="card-footer">
                        <div class="user-meta">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="Sabin Adhikari">
                            <div class="user-details">
                                <h4>Sabin Adhikari</h4>
                                <p>Marketing Director, Spotify</p>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <i class="fab fa-spotify"></i>
                        </div>
                    </div>
                </div>

                <!-- Google Card (Right Top) -->
                <div class="testimonial-card bento-medium google-card">
                    <div class="card-top">
                        <h3>6X Increase in lead Confidence</h3>
                    </div>
                    <div class="quote-content">
                        <span class="quote-mark small">“</span>
                        <p>“ Working with this team has been a game-changer for our business. Their professionalism, attention to detail, and consistent delivery exceeded all expectations.”</p>
                    </div>
                    <div class="card-footer">
                        <div class="user-meta">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="Jetha lal Gadha">
                            <div class="user-details">
                                <h4>Jetha lal Gadha</h4>
                                <p>Marketing Director, Gadha Electronics</p>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row for Small Cards -->
                <div class="bento-small-wrapper">
                    <!-- Bhasme Don Card -->
                    <div class="testimonial-card bento-small light-card">
                        <div class="quote-content">
                            <span class="quote-mark small">“</span>
                            <p>In a fast-paced startup environment, speed and flexibility are everything. This team delivered both, with no compromise on quality.</p>
                        </div>
                        <div class="card-footer">
                            <div class="user-meta">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=100&q=80" alt="Bhasme don">
                                <div class="user-details">
                                    <h4>Bhasme don</h4>
                                    <p>Founder, Candy Crush</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rajesh Dai Card -->
                    <div class="testimonial-card bento-small dark-card">
                        <div class="quote-content">
                            <span class="quote-mark small">“</span>
                            <p>Honestly, I wasn't sure what to expect at first. But from the initial consultation to the final delivery, everything was smooth, friendly, and well-organized.</p>
                        </div>
                        <div class="card-footer">
                            <div class="user-meta">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="Rajesh Dai">
                                <div class="user-details">
                                    <h4>Rajesh Dai</h4>
                                    <p>Founder, World</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials Stats Footer -->
            <div class="testimonials-footer-bar" data-aos="fade-up">
                <div class="left-stats">
                    <p>1000 Satisfied Clients love our services</p>
                </div>
                <div class="center-rating">
                    <div class="rating-box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                        <p>Based on 1K Reviews</p>
                    </div>
                </div>
                <div class="right-action">
                    <a href="#" class="btn-view-reviews">View all Reviews <i class="fas fa-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Side Popup for Services (Zendenta Style) -->
    <div id="service-popup" class="side-popup">
        <div class="popup-overlay" onclick="closePopup()"></div>
        <div class="popup-content">
            <button class="close-btn" onclick="closePopup()">&times;</button>
            <div id="popup-body">
                <!-- Content injected via JS -->
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
<script>
    const essentialsGrid = document.querySelector('.essentials-grid');
    const leftArrow = document.querySelector('.essentials-arrow.left');
    const rightArrow = document.querySelector('.essentials-arrow.right');

    leftArrow.addEventListener('click', () => {
        essentialsGrid.scrollBy({ left: -300, behavior: 'smooth' });
    });

    rightArrow.addEventListener('click', () => {
        essentialsGrid.scrollBy({ left: 300, behavior: 'smooth' });
    });
</script>
