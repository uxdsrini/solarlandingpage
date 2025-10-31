<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
  <link rel="icon" type="image/png" href="https://vaaraahienvisol.com/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaaraahi Envisol - Solar Power Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- reCAPTCHA removed -->
  <!-- SweetAlert2 for nicer alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container navbar-content">
        <div class="navbar-logo">
          <img src="/logo-dark.svg" alt="Vaaraahi Envisol Logo" />
        </div>
        <button class="navbar-toggle" aria-label="Toggle navigation">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
        <ul class="navbar-links">
          <li><a href="#services">Services</a></li>
          <li><a href="#why-choose">Why Us</a></li>
          <li><a href="#benefits">Benefits</a></li>
        </ul>
      </div>
    </nav>
    <script>
    // Mobile navbar toggle
    document.addEventListener('DOMContentLoaded', function() {
      const toggle = document.querySelector('.navbar-toggle');
      const links = document.querySelector('.navbar-links');
      if (toggle && links) {
        toggle.addEventListener('click', function() {
          links.classList.toggle('active');
          toggle.classList.toggle('active');
        });
      }
    });
    </script>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
            <h1>Slash Your Electricity Bills by Up to 90% with Solar Power</h1>
            <p class="hero-subtitle">Vaaraahi Envisol delivers complete solar solutions – from design to installation and commissioning – for homes, societies and industries.</p>

            <div class="benefits-grid">
              <div class="benefit-item">
                <svg class="benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>Zero Maintenance Cost for 5 Years</span>
              </div>
              <div class="benefit-item">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
                <path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4z"/>
              </svg>
                <span>Govt. Subsidy ₹78,000 Guaranteed</span>
              </div>
              <div class="benefit-item">
                <svg class="benefit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                <span>Real, Site-Specific ROI – Not Guesswork</span>
              </div>
            </div>
          </div>

          <div class="hero-form">
            <div class="form-header">
              <h2>Instant Free Solar Quote</h2>
              <p>Unlock Your Savings Potential Today!</p>
            </div>
            <form id="heroLeadForm" method="POST">
              <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Full Name" required>
              </div>
              <div class="form-group">
                <input type="tel" id="phone" name="phone" placeholder="WhatsApp Number*" required pattern="[0-9]{10}">
              </div>
              <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email ID*" required>
              </div>
              <div class="form-group">
                <select id="bill" name="bill" required>
                  <option value="">Avg. Monthly Electricity Bill*</option>
                  <option value="below-2000">Below ₹2,000</option>
                  <option value="2000-5000">₹2,000-₹5,000</option>
                  <option value="5000-10000">₹5,000-₹10,000</option>
                  <option value="above-10000">Above ₹10,000</option>
                </select>
              </div>
              <div class="form-group">
                <select id="type" name="type" required>
                  <option value="">Select Installation Type*</option>
                  <option value="residential">Residential</option>
                  <option value="society">Housing Society</option>
                  <option value="commercial">Commercial/ Industrial</option>
                </select>
              </div>
              <div class="form-group form-checkbox">
                <label class="checkbox-row" for="whatsappUpdates">
                  <input type="checkbox" id="whatsappUpdates" name="whatsappUpdates" />
                  <span class="checkbox-label">Receive WhatsApp updates</span>
                </label>
              </div>
              <!-- reCAPTCHA removed -->
              <button type="submit" class="btn btn-primary">Request a Call Back</button>
            </form>
            <div id="form-message"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
      <div class="container">
        <div class="section-header">
          <h2>Tailored Solar Solutions for Every Property</h2>
          <p>Whether it's your home, housing society, or commercial facility, we provide end-to-end solar services with premium equipment and long-term reliability.</p>
        </div>

        <div class="services-grid">
          <div class="service-card">
            <div class="service-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
            </div>
            <h3>Residential Solar</h3>
            <ul class="service-features">
              <li>Customized Design & Consultation</li>
              <li>Efficient Panel Installation</li>
              <li>Premium Inverters & 30-Year Warranty</li>
            </ul>
            <a href="#contact" class="btn btn-outline">Get a Quote</a>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <h3>Housing Society Solar</h3>
            <ul class="service-features">
              <li>Centralized Solar Systems for Common Areas</li>
              <li>Performance Monitoring & Maintenance</li>
              <li>Rust-Free & Durable Structures</li>
            </ul>
            <a href="#contact" class="btn btn-outline">Start Your Estimate</a>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
              </svg>
            </div>
            <h3>Industrial / Commercial Solar</h3>
            <ul class="service-features">
              <li>High-Capacity Solar Installations</li>
              <li>Commissioning & ROI Optimization</li>
              <li>Flexible EMI Options for Easy Investment</li>
            </ul>
            <a href="#contact" class="btn btn-outline">Start Your Estimate</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose" id="why-choose">
      <div class="container">
        <div class="section-header">
          <h2>Your Trusted Partner for Solar Energy</h2>
          <p>Our expertise ensures maximum savings, reliable performance, and long-term value for every project.</p>
        </div>

        <div class="why-grid">
          <div class="why-item">
            <div class="why-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
              </svg>
            </div>
            <h3>Certified Professionals</h3>
            <p>12+ Years of experience across sectors</p>
          </div>

          <div class="why-item">
            <div class="why-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
            </div>
            <h3>Guaranteed Returns</h3>
            <p>Real, site-specific ROI backed by expert analysis</p>
          </div>

          <div class="why-item">
            <div class="why-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </div>
            <h3>End-to-End Support</h3>
            <p>Design, installation, commissioning & maintenance</p>
          </div>

          <div class="why-item">
            <div class="why-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <h3>Peace of Mind</h3>
            <p>Govt. Subsidy ₹78,000, 30-Year Warranty & premium equipment</p>
          </div>
        </div>

        <div class="cta-center">
          <a href="#contact" class="btn btn-primary btn-lg">Schedule Your Free Consultation</a>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits" id="benefits">
      <div class="container">
        <div class="section-header">
          <h2>Why Switching to Solar Makes Sense</h2>
          <p>Vaaraahi Envisol empowers you with energy independence and tangible savings.</p>
        </div>

        <div class="benefits-list">
          <div class="benefit-card">
            <div class="benefit-number">90%</div>
            <h3>Cut Electricity Bills by Up to 90%</h3>
          </div>
          <div class="benefit-card">
            <div class="benefit-number">5</div>
            <h3>Zero Maintenance Cost for 5 Years</h3>
          </div>
          <div class="benefit-card">
            <div class="benefit-number">100%</div>
            <h3>Durable, Rust-Free Structures</h3>
          </div>
          <div class="benefit-card">
            <div class="benefit-number">EMI</div>
            <h3>Flexible EMI Options & Premium Inverters</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
      <div class="container">
        <div class="section-header">
          <h2>What Our Customer's Say</h2>
          <p>Homeowners, societies, and businesses trust Vaaraahi Envisol for quality solar solutions.</p>
        </div>

        <div class="testimonials-carousel"> 
          <div class="carousel-container">
            <div class="testimonial-card active">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">"Our electricity bills dropped dramatically, and installation was seamless. Highly recommended!"</p>
              <div class="testimonial-author">
                <strong>Ravi M.</strong>
                <span>Homeowner</span>
              </div>
            </div>

            <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">"Professional team, durable structures, and excellent ROI – the subsidy made it even more affordable."</p>
              <div class="testimonial-author">
                <strong>Priya S.</strong>
                <span>Society Manager</span>
              </div>
            </div>

            <div class="testimonial-card">
              <div class="stars">★★★★★</div>
              <p class="testimonial-text">"Zero maintenance cost for 5 years and reliable performance. Vaaraahi Envisol delivers what they promise."</p>
              <div class="testimonial-author">
                <strong>Anil K.</strong>
                <span>Industrial Client</span>
              </div>
            </div>
          </div>
          <div class="carousel-dots" aria-hidden="false" style="text-align:center; margin-top:18px;">
            <!-- dots inserted by JS as fallback to ensure accessibility if JS is disabled -->
            <span class="dot active" data-slide="0" style="display:inline-block;width:12px;height:12px;border-radius:50%;background:#2aa1f0;margin:0 6px;cursor:pointer;"></span>
            <span class="dot" data-slide="1" style="display:inline-block;width:12px;height:12px;border-radius:50%;background:#e6e9eb;margin:0 6px;cursor:pointer;"></span>
            <span class="dot" data-slide="2" style="display:inline-block;width:12px;height:12px;border-radius:50%;background:#e6e9eb;margin:0 6px;cursor:pointer;"></span>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Work Section -->
    <section class="our-work">
      <div class="container">
        <div class="section-header">
          <h2>Projects That Speak for Themselves</h2>
          <p>From rooftops to large-scale commercial installations, our solutions are efficient, durable, and designed for maximum ROI.</p>
        </div>

        <div class="instagram-grid">
          <div class="instagram-embed">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DLzoCROt8TL/" data-instgrm-version="14"></blockquote>
          </div>
          <div class="instagram-embed">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DL36pJENSBt/?img_index=1" data-instgrm-version="14"></blockquote>
          </div>
          <div class="instagram-embed">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DLASNlBqRCk/" data-instgrm-version="14"></blockquote>
          </div>
        </div>

        <div class="cta-center">
          <a href="#contact" class="btn btn-primary btn-lg">Book a Free Site Visit</a>
        </div>
      </div>
    </section>

    <!-- Subsidy Section -->
    <section class="subsidy">
      <div class="container">
        <div class="section-header">
          <h2>Maximize Your Savings with Government Support</h2>
          <p>Vaaraahi Envisol ensures you get the full subsidy benefit while enjoying long-term energy savings and reliable solar solutions.</p>
        </div>

        <div class="subsidy-grid">
          <div class="subsidy-card">
            <h3>Subsidy for Residential Households</h3>
            <ul class="subsidy-list">
              <li><strong>Rs. 30,000/-</strong> per kW up to 2 kW</li>
              <li><strong>Rs. 18,000/-</strong> per kW for additional capacity up to 3 kW</li>
              <li>Total subsidy for systems larger than 3 kW capped at <strong>Rs. 78,000</strong></li>
            </ul>
          </div>

          <div class="subsidy-card">
            <h3>Subsidy for Group Housing Society/ RWA</h3>
            <ul class="subsidy-list">
              <li><strong>Rs. 18,000</strong> per kW for common facilities, including EV charging, up to 500 kW capacity (@3 kW per house)</li>
              <li>Upper limit inclusive of individual rooftop plants installed by individual residents in the GHS/RWA</li>
            </ul>
          </div>
        </div>

        <p class="subsidy-note">*Prices are indicative. Final costs depend on site survey & system configuration.</p>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
      <div class="container">
        <div class="section-header">
          <h2>Got Questions? We've Got Answers</h2>
          <p>Everything you need to know about solar installation, subsidies, and savings.</p>
        </div>

        <div class="faq-list">
          <div class="faq-item">
            <button class="faq-question">
              <span>How much does installation cost?</span>
              <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="faq-answer">
              <p>Costs vary based on system size and property type. Flexible EMI options are available with us.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              <span>How long does installation take?</span>
              <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="faq-answer">
              <p>As an experienced team we install with care. For residential projects: 1–3 days; larger projects may vary.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              <span>Is maintenance required?</span>
              <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="faq-answer">
              <p>Zero Maintenance Cost for 5 Years, with optional annual service packages afterward. It depends on several factors & usage. Contact Vaaraahi Envisol for more details.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              <span>Are subsidies available?</span>
              <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="faq-answer">
              <p>Yes – Govt. Subsidy ₹78,000 Guaranteed for eligible projects. For more details schedule a call with an expert/ book a site visit with us.</p>
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">
              <span>Will solar work on cloudy days?</span>
              <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="faq-answer">
              <p>Yes! Premium inverters ensure optimal energy efficiency even on cloudy days.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
<footer class="footer">
        <div class="footer-container">
            <div class="footer-logo-container">
                 <a href="#home" class="logo-link">
                    <img src="https://www.vaaraahienvisol.com/assets/images/logo-dark.svg" alt="Vaaraahi envisol" class="logo-img">
                </a>
                <div class="footer-brand-info">
                Vaaraahi Envisol - Your Trusted Partner for Solar in Telangana
            </div>
            </div>
             <div class="footer-disclaimer-links">
                Empowering Telangana with sustainable solar energy. We offer expert solar panel installation, maintenance, and support for residential and commercial properties.
                Explore solar solutions in Jubilee Hills, Gachibowli, Banjara Hills, Kondapur, Manikonda, Madhapur, and across Telangana.
                For complete service scope, please contact us or visit our main office. Booking amount is 5% of the final quote or Rs.25,000, whichever is higher (indicative).
            </div>
             <div class="footer-social-icons-new">
                <a href="https://www.facebook.com/share/1CADKWRYe2/" target="_blank" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                <a href="https://www.instagram.com/vaaraahi.envisol/" target="_blank" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12.017 0C8.396 0 7.609.034 6.298.077 4.983.12 3.987.25 3.327.417c-.66.167-1.23.39-1.797.957C.963 1.941.74 2.511.573 3.171c-.167.66-.297 1.656-.34 2.971C.191 7.453.157 8.24.157 11.861s.034 4.408.077 5.719c.043 1.315.173 2.311.34 2.971.167.66.39 1.23.957 1.797.567.567 1.137.79 1.797.957.66.167 1.656.297 2.971.34 1.315.043 2.102.077 5.723.077s4.408-.034 5.719-.077c1.315-.043 2.311-.173 2.971-.34.66-.167 1.23-.39 1.797-.957.567-.567.79-1.137.957-1.797.167-.66.297-1.656.34-2.971.043-1.315.077-2.102.077-5.723s-.034-4.408-.077-5.719c-.043-1.315-.173-2.311-.34-2.971-.167-.66-.39-1.23-.957-1.797C22.059.74 21.489.517 20.829.35c-.66-.167-1.656-.297-2.971-.34C16.548.034 15.761 0 12.24 0h-.223zm.223 2.222c3.555 0 3.98.013 5.384.078 1.291.06 1.994.274 2.456.456.6.238 1.028.524 1.478.974.45.45.736.878.974 1.478.182.462.396 1.165.456 2.456.065 1.404.078 1.829.078 5.384s-.013 3.98-.078 5.384c-.06 1.291-.274 1.994-.456 2.456-.238.6-.524 1.028-.974 1.478-.45.45-.878.736-1.478.974-.462.182-1.165.396-2.456.456-1.404.065-1.829.078-5.384.078s-3.98-.013-5.384-.078c-1.291-.06-1.994-.274-2.456-.456-.6-.238-1.028-.524-1.478-.974-.45-.45-.736-.878-.974-1.478-.182-.462-.396-1.165-.456-2.456C2.257 15.841 2.244 15.416 2.244 11.861s.013-3.98.078-5.384c.06-1.291.274-1.994.456-2.456.238-.6.524-1.028.974-1.478.45-.45.878-.736 1.478-.974.462-.182 1.165-.396 2.456-.456 1.404-.065 1.829-.078 5.384-.078zM12.24 6.18c-3.722 0-6.74 3.018-6.74 6.74s3.018 6.74 6.74 6.74 6.74-3.018 6.74-6.74-3.018-6.74-6.74-6.74zm0 11.111c-2.408 0-4.37-1.962-4.37-4.37s1.962-4.37 4.37-4.37 4.37 1.962 4.37 4.37-1.962 4.37-4.37 4.37zm7.222-11.481c-.828 0-1.5-.672-1.5-1.5s.672-1.5 1.5-1.5 1.5.672 1.5 1.5-.672 1.5-1.5 1.5z"/></svg></a>
                <a href="https://www.youtube.com/@VaaraahiEnvisol" target="_blank" aria-label="Youtube"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>

            </div><br/>
        </div>
        <div class="container" style="display:flex; justify-content:center; align-items:center; text-align:center; width:100%; padding:10px 0;">
        <p>&copy; 2025 Vaaraahi Envisol. All rights reserved.</p>
      </div>
    </footer>
     

  <script async src="//www.instagram.com/embed.js"></script>
  <script src="../faq.js"></script>
  <script>
  // Testimonials carousel: mobile-only behavior
  document.addEventListener('DOMContentLoaded', function() {
    const MOBILE_MAX = 768; // px
    const carousel = document.querySelector('.testimonials-carousel');
    if (!carousel) return;
    const container = carousel.querySelector('.carousel-container');
    if (!container) return;
    const cards = Array.from(container.querySelectorAll('.testimonial-card'));
    if (!cards.length) return;

    const dotsContainer = carousel.querySelector('.carousel-dots');
    let dots = dotsContainer ? Array.from(dotsContainer.querySelectorAll('.dot')) : [];

    // If no dots in markup, create them dynamically (will be used only on mobile)
    function ensureDots() {
      if (!dotsContainer) return;
      if (dots.length) return;
      dots = cards.map((_, i) => {
        const s = document.createElement('span');
        s.className = 'dot' + (i === 0 ? ' active' : '');
        s.setAttribute('data-slide', String(i));
        s.style.cssText = 'display:inline-block;width:12px;height:12px;border-radius:50%;margin:0 6px;cursor:pointer;';
        s.style.background = i === 0 ? '#2aa1f0' : '#e6e9eb';
        dotsContainer.appendChild(s);
        return s;
      });
    }

    let enabled = false;
    let current = 0;
    const total = cards.length;
    const intervalMs = 2000; // 2 seconds
    let timer = null;

    function show(index) {
      cards.forEach((c, i) => {
        c.style.display = i === index ? 'block' : 'none';
        c.classList.toggle('active', i === index);
      });
      if (dots && dots.length) {
        dots.forEach((d, i) => {
          const active = i === index;
          d.classList.toggle('active', active);
          d.style.background = active ? '#2aa1f0' : '#e6e9eb';
        });
      }
      current = index;
    }

    function start() {
      if (!enabled || timer) return;
      timer = setInterval(() => {
        current = (current + 1) % total;
        show(current);
      }, intervalMs);
    }

    function stop() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    function resetAutoPlay() {
      if (!enabled) return;
      stop();
      start();
    }
    // Wire up dots (clicks) - handlers are safe even if enabled toggles because of enabled checks
    function wireDots() {
      if (!dots || !dots.length) return;
      dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
          if (!enabled) return;
          show(i);
          resetAutoPlay();
        });
      });
    }

    // Enable carousel (prepare dots and start autoplay)
    function enableCarousel() {
      if (enabled) return;
      enabled = true;
      // prepare dots
      ensureDots();
      if (dotsContainer) dotsContainer.style.display = '';
      wireDots();
      show(current);
      start();
    }

    function disableCarousel() {
      if (!enabled) return;
      enabled = false;
      stop();
      // show all cards on desktop
      cards.forEach(c => {
        c.style.display = 'block';
        c.classList.remove('active');
      });
      // hide dots on desktop
      if (dotsContainer) dotsContainer.style.display = 'none';
    }

    // Pause/resume handlers using enabled flag
    carousel.addEventListener('mouseenter', () => { if (enabled) stop(); });
    carousel.addEventListener('mouseleave', () => { if (enabled) start(); });
    carousel.addEventListener('touchstart', () => { if (enabled) stop(); }, {passive:true});
    carousel.addEventListener('touchend', () => { if (enabled) start(); });

    // Watch resize and toggle behavior
    function checkMode() {
      if (window.innerWidth <= MOBILE_MAX) {
        enableCarousel();
      } else {
        disableCarousel();
      }
    }

    window.addEventListener('resize', () => {
      checkMode();
    });

    // Initialize according to current width
    checkMode();

    // --- Benefits carousel: mobile-only behavior (single-card view with dots & autoplay)
    (function() {
      const benefitsList = document.querySelector('.benefits-list');
      if (!benefitsList) return;
      const benefitCards = Array.from(benefitsList.querySelectorAll('.benefit-card'));
      if (benefitCards.length < 2) return; // no need to carousel

      // create dots container (insert after benefitsList)
      const benefitsDotsContainer = document.createElement('div');
      benefitsDotsContainer.className = 'benefits-dots';
      benefitsDotsContainer.setAttribute('aria-hidden', 'false');
      benefitsDotsContainer.style.cssText = 'text-align:center;margin-top:12px;';
      benefitsList.parentNode.insertBefore(benefitsDotsContainer, benefitsList.nextSibling);

      let bDots = [];
      function ensureBDots() {
        if (bDots.length) return;
        benefitCards.forEach((_, i) => {
          const s = document.createElement('span');
          s.className = 'dot' + (i === 0 ? ' active' : '');
          s.setAttribute('data-slide', String(i));
          s.style.cssText = 'display:inline-block;width:10px;height:10px;border-radius:50%;margin:0 6px;cursor:pointer;';
          s.style.background = i === 0 ? '#2aa1f0' : '#e6e9eb';
          benefitsDotsContainer.appendChild(s);
          bDots.push(s);
          s.addEventListener('click', () => {
            if (!benefitsEnabled) return;
            showBenefit(i);
            resetBenefitsAuto();
          });
        });
      }

      let benefitsEnabled = false;
      let bCurrent = 0;
      const bTotal = benefitCards.length;
      const bIntervalMs = 2000; // 2s
      let bTimer = null;

      function showBenefit(index) {
        benefitCards.forEach((c, i) => {
          c.style.display = i === index ? 'block' : 'none';
          c.classList.toggle('active', i === index);
        });
        if (bDots.length) {
          bDots.forEach((d, i) => {
            const active = i === index;
            d.classList.toggle('active', active);
            d.style.background = active ? '#2aa1f0' : '#e6e9eb';
          });
        }
        bCurrent = index;
      }

      function startBenefits() {
        if (!benefitsEnabled || bTimer) return;
        bTimer = setInterval(() => {
          bCurrent = (bCurrent + 1) % bTotal;
          showBenefit(bCurrent);
        }, bIntervalMs);
      }

      function stopBenefits() {
        if (bTimer) {
          clearInterval(bTimer);
          bTimer = null;
        }
      }

      function resetBenefitsAuto() {
        if (!benefitsEnabled) return;
        stopBenefits();
        startBenefits();
      }

      // Pause/resume
      benefitsList.addEventListener('mouseenter', () => { if (benefitsEnabled) stopBenefits(); });
      benefitsList.addEventListener('mouseleave', () => { if (benefitsEnabled) startBenefits(); });
      benefitsList.addEventListener('touchstart', () => { if (benefitsEnabled) stopBenefits(); }, {passive:true});
      benefitsList.addEventListener('touchend', () => { if (benefitsEnabled) startBenefits(); });

      function enableBenefits() {
        if (benefitsEnabled) return;
        benefitsEnabled = true;
        ensureBDots();
        benefitsDotsContainer.style.display = '';
        showBenefit(bCurrent);
        startBenefits();
      }

      function disableBenefits() {
        if (!benefitsEnabled) return;
        benefitsEnabled = false;
        stopBenefits();
        // restore default display to let CSS handle layout
        benefitCards.forEach(c => { c.style.display = ''; c.classList.remove('active'); });
        if (benefitsDotsContainer) benefitsDotsContainer.style.display = 'none';
      }

      function checkBenefitsMode() {
        if (window.innerWidth <= MOBILE_MAX) {
          enableBenefits();
        } else {
          disableBenefits();
        }
      }

      window.addEventListener('resize', checkBenefitsMode);
      // init
      checkBenefitsMode();
    })();
  });
  </script>

  <script>
    // Generic Form Submission Handler
        function handleFormSubmit(formElement, event, successMessage, modalToClose = null) {
            event.preventDefault();
            if (typeof formElement.checkValidity === 'function' && !formElement.checkValidity()) {
                formElement.reportValidity();
                return;
            }
      if (window.Swal && typeof Swal.fire === 'function') {
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: successMessage,
        });
      } else {
        alert(successMessage);
      }
            formElement.reset();
            if (modalToClose) {
                closeModalById(modalToClose.id);
            }
        }

        const heroForm = document.getElementById('heroLeadForm');
        // Provide a local fallback for sendEmail if not present elsewhere
        if (typeof window.sendEmail !== 'function') {
          // Try posting to a local PHP endpoint as a fallback. If the local server
          // does not accept POST (common when using a static dev server), retry
          // with a cloud function fallback. This version parses JSON responses
          // so callers get an object { ok, message, ... } instead of raw JSON text.
          window.sendEmail = function(payload) {
            const localUrl = 'email.php';
            const cloudUrl = 'https://us-central1-greenteck-7f640.cloudfunctions.net/sendEmail';

            function parseResponse(resp) {
              return resp.text().then(text => {
                try {
                  const data = text ? JSON.parse(text) : { message: '' };
                  if (resp.ok) return data;
                  // non-OK -> throw to be caught by caller
                  throw new Error(data && data.message ? data.message : (text || resp.statusText));
                } catch (e) {
                  // If JSON parse failed but resp.ok, return raw text
                  if (resp.ok) return text;
                  throw new Error(text || resp.statusText);
                }
              });
            }

            return fetch(localUrl, {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify(payload)
            })
            .then(resp => {
              if (resp.ok) return parseResponse(resp);
              if (resp.status === 405) {
                console.warn('Local endpoint returned 405 Method Not Allowed — attempting cloud fallback...');
                return fetch(cloudUrl, {
                  method: 'POST',
                  headers: { 'Content-Type': 'application/json' },
                  body: JSON.stringify(payload)
                }).then(r2 => {
                  if (!r2.ok) throw new Error('Cloud fallback failed: ' + r2.status + ' ' + r2.statusText);
                  return parseResponse(r2);
                });
              }
              return parseResponse(resp);
            })
            .catch(err => {
              console.error('sendEmail failed:', err);
              throw err;
            });
          };
        }

        if (heroForm) {
          heroForm.addEventListener('submit', function(e) {
            e.preventDefault();
            if (typeof this.checkValidity === 'function' && !this.checkValidity()) {
              this.reportValidity();
              return;
            }

            // Use stable id selectors instead of placeholder-based queries (more robust)
            const name   = (this.querySelector('#name') || this.querySelector('input[name="name"]')).value;
            const phone  = (this.querySelector('#phone') || this.querySelector('input[name="phone"]')).value;
            const email  = (this.querySelector('#email') || this.querySelector('input[name="email"]')).value;
            const bill   = this.querySelector('select#bill').value;
            const type   = this.querySelector('select#type') ? this.querySelector('select#type').value : '';
            const whatsapp = !!this.querySelector('#whatsappUpdates') && this.querySelector('#whatsappUpdates').checked;

            const payload = { name, phone, email, bill, type, whatsapp, formType: 'hero-quote' };

            // reCAPTCHA removed — no token added

            sendEmail(payload)
              .then(res => {
                const text = (res && res.message) ? res.message : (typeof res === 'string' ? res : 'Request submitted');
                // Debug log to confirm resolution path
                console.log('sendEmail resolved:', res);
                if (window.Swal && typeof Swal.fire === 'function') {
                  Swal.fire({ icon: 'success', title: 'Submitted', text });
                } else {
                  alert('✅ ' + text);
                }
                this.reset();
              })
              .catch(err => {
                const message = (err && err.message ? err.message : String(err));
                console.error('sendEmail error:', err);
                if (window.Swal && typeof Swal.fire === 'function') {
                  Swal.fire({ icon: 'error', title: 'Error', text: "Couldn't send email: " + message });
                } else {
                  alert('❌ Couldn\'t send email: ' + message);
                }
              });
          });
        }

        // Modal Management
        const allModals = document.querySelectorAll('.modal-overlay');
        function openModalById(modalId, prefillData = null) {
            const modal = document.getElementById(modalId);
            if (!modal) return;

            if (modalId === 'quoteModal') {
                const heroFormWrapperContent = document.getElementById('heroFormWrapper');
                const modalFormContainer = modal.querySelector('#modalFormContainer');
                if (heroFormWrapperContent && modalFormContainer) {
                    const formContentClone = heroFormWrapperContent.cloneNode(true);
                    const clonedForm = formContentClone.querySelector('form');
                    if (clonedForm) {
                        clonedForm.id = 'modalLeadFormInstance_' + Date.now();
                       clonedForm.addEventListener('submit', function(e) {
  e.preventDefault();
  // prefer name attributes inside cloned forms to avoid duplicate ID issues
  const name     = (this.querySelector('input[name="name"]') || this.querySelector('input[placeholder="Full Name"]')).value;
  const phone    = (this.querySelector('input[name="phone"]') || this.querySelector('input[type="tel"]')).value;
  const email    = (this.querySelector('input[name="email"]') || this.querySelector('input[type="email"]')).value;
  const bill     = this.querySelector('select') ? this.querySelector('select').value : '';
  const whatsapp = !!this.querySelector('#whatsappUpdates') && this.querySelector('#whatsappUpdates').checked;

  sendEmail({ name, phone, email, bill, whatsapp, formType: 'hero-quote' })
    .then(res => {
      const text = (res && res.message) ? res.message : (typeof res === 'string' ? res : 'Request submitted');
      console.log('modal sendEmail resolved:', res);
      if (window.Swal && typeof Swal.fire === 'function') {
        Swal.fire({ icon: 'success', title: 'Submitted', text });
      } else {
        alert('✅ ' + text);
      }
      closeModalById('quoteModal');
    })
    .catch(err => {
      const message = (err && err.message) ? err.message : String(err);
      console.error('modal sendEmail error:', err);
      if (window.Swal && typeof Swal.fire === 'function') {
        Swal.fire({ icon: 'error', title: 'Error', text: "Couldn't send email: " + message });
      } else {
        alert('❌ Couldn\'t send email: ' + message);
      }
    });
});

                    }
                    modalFormContainer.innerHTML = '';
                    modalFormContainer.appendChild(formContentClone);
                    const clonedTitle = modalFormContainer.querySelector('.form-header h3');
                    if(clonedTitle) clonedTitle.id = "quoteModalTitleId";
                }
            } else if (modalId === 'estimatorModal' && estimatorModalLogic.resetAndPrefill) {
                 estimatorModalLogic.resetAndPrefill(prefillData);
            }
            modal.classList.add('active');
            document.body.classList.add('modal-open');
        }

        function closeModalById(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) modal.classList.remove('active');
            let anyModalActive = false;
            allModals.forEach(m => { if (m.classList.contains('active') && m.id !== modalId) anyModalActive = true; });
            if (!anyModalActive) document.body.classList.remove('modal-open');
        }

        document.querySelectorAll('.modal-close-btn').forEach(btn => {
            btn.addEventListener('click', () => closeModalById(btn.dataset.modalId || btn.closest('.modal-overlay').id));
        });
        allModals.forEach(modal => {
            modal.addEventListener('click', (e) => { if (e.target === modal) closeModalById(modal.id); });
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                allModals.forEach(modal => { if (modal.classList.contains('active')) closeModalById(modal.id); });
            }
        });
  </script>
  <!-- reCAPTCHA removed -->
  </body>
</html>
