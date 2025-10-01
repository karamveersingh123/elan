<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Luxury Heights - Home</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
      <style>
         body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fb; }
         /* Header */
         .navbar { background: #fff;
         padding: 5px; }
         .navbar-brand, .navbar-nav .nav-link { color: #000 !important; }
         .navbar-nav .nav-link:hover { color: rgb(193, 154, 91) !important; }
         /* Hero */
         .hero-section { background: url('https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg') center/cover no-repeat; min-height: 70vh; display: flex; align-items: center; justify-content: center; position: relative; color: #fff; text-align: center; }
         .hero-overlay { position: absolute; inset: 0; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7)); }
         .hero-content { position: relative; z-index: 1; }
         .hero-content h1 { font-size: 3rem; font-weight: 700; }
         .hero-content p { font-size: 1.2rem; }
         .hero-content .btn { border-radius: 50px; padding: 12px 30px; font-weight: 600; transition: 0.3s; 
         background: #c07a52 !important;
         border: none !important
         }
         .hero-content .btn:hover { background: #fff; color: #fff; }
         /* Section Titles */
         .section-title { font-weight: 700; font-size: 1.6rem; margin-bottom: 1.5rem; border-left: 5px solid #0d6efd; padding-left: 12px; color: #333; }
         /* Tables */
         .table { border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); background: #fff; }
         .table th { background: #f1f5fb !important; }
         /* Amenities */
         .amenity-icon { font-size: 2rem; color: #c07a52; transition: transform 0.3s, color 0.3s; }
         .amenity-icon:hover { transform: scale(1.2); color: #198754; }
         /* Gallery */
         .gallery img { border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s; }
         .gallery img:hover { transform: scale(1.05); }
         /* Accordion */
         .accordion-button { font-weight: 600; background: #f8f9fb; }
         .accordion-button:focus { box-shadow: none; }
         /* Sticky Sidebar Form */
         .sticky-form { position: sticky; top: 100px; }
         .sticky-form .card { border-radius: 15px; border: none; box-shadow: 0 6px 25px rgba(0,0,0,0.08); transition: transform 0.3s; }
         .sticky-form .card:hover { transform: translateY(-4px); }
         .sticky-form .form-control { border-radius: 10px; border: 1px solid #ddd; padding: 12px; }
         .sticky-form button { border-radius: 50px; font-weight: 600; padding: 12px; transition: 0.3s; }
         .sticky-form button:hover { background: #0b5ed7; transform: translateY(-2px); }
         /* Footer */
         footer { background: #111;
         color: #ccc;
         padding: 70px 0 30px 0;
         position: relative;
         z-index: 10; }
         footer a:hover { text-decoration: underline; }
         /* Modal */
         .modal-content { border-radius: 15px; }
         .modal-content .form-control { border-radius: 10px; padding: 10px; }
         .modal-content button { border-radius: 50px; font-weight: 600; padding: 12px; }
         .modal-content button:hover { background: #0b5ed7; }
         .enuiry-from-text{
         color: #555 !important;
         text-align: center;
         margin-bottom: 22px;
         font-size: 22px;
         }
      </style>
   </head>
   <body>
      <!-- Header -->
      <nav class="navbar navbar-expand-lg navbar-dark">
         <div class="container">
            <a class="navbar-brand fw-bold" href="index.php"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link" href="#overview">Overview</a></li>
                  <li class="nav-item"><a class="nav-link" href="#configuration">Configuration</a></li>
                  <li class="nav-item"><a class="nav-link" href="#amenities">Amenities</a></li>
                  <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                  <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                  <li class="nav-item"><a class="nav-link" href="#faqs">FAQs</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Hero -->
      <!-- Hero with Form -->
      <style>
         .hero-section {
         background: url('https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg') center/cover no-repeat;
         min-height: 80vh;
         position: relative;
         }
         .hero-overlay {
         position: absolute;
         inset: 0;
         background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7));
         }
         .contact-form {
         background: #fff;
         border-radius: 10px;
         transition: all 0.3s;
         box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px !important;
         }
         .contact-form:hover {
         transform: translateY(-5px);
         }
         .contact-form h4 {
         font-weight: 700;
         }
         .contact-form .form-control {
         border-radius: 12px;
         border: 1px solid #ddd;
         transition: all 0.3s;
         padding: 1rem;
         }
         .contact-form .form-control:focus {
         border-color: #c07a52;
         box-shadow: 0 0 15px rgba(192,122,82,0.4);
         }
         .contact-form .submit-btn {
         background: #c07a52;
         color: #fff;
         border-radius: 50px;
         font-weight: 600;
         transition: all 0.3s;
         }
         .contact-form .submit-btn:hover {
         background: #a0663f;
         transform: scale(1.05);
         }
         /* Responsive */
         @media(max-width: 992px) {
         .hero-banner {
         height: auto;
         padding: 50px 0;
         }
         .hero-left {
         text-align: center;
         margin-bottom: 30px;
         }
         .hero-stats {
         justify-content: center;
         }
         .contact-form {
         margin-top: 20px;
         }
         }
         .call-now{
         background: #c07a52;
         border-radius: 2rem;
         border: none;
         font-size: 17px;
         }
         .call-now:hover{
         background: #c07a52;
         border-radius: 2rem;
         border: none;
         font-size: 17px;
         }
      </style>
      <section class="hero-section d-flex align-items-center">
         <div class="hero-overlay"></div>
         <div class="container position-relative z-1">
            <div class="row align-items-center">
               <!-- Left Column: Text -->
               <div class="col-lg-8 text-white mb-4 mb-lg-0">
                  <h1 class="fw-bold">Lorem ipsum dolor sit amet.</h1>
                  <p class="lead">Premium 3 BHK + Study Apartments in Sector 56, Gurgaon</p>
                  <!-- Call Us Button -->
                  <style>
                     /* Background overlay */
                     .popup-overlay {
                     display: none;
                     position: fixed;
                     top: 0; left: 0; right: 0; bottom: 0;
                     background: rgba(0,0,0,0.5);
                     z-index: 9998;
                     }
                     /* Popup form */
                     .popup-form {
                     display: none;
                     position: fixed;
                     top: 50%; left: 50%;
                     transform: translate(-50%, -50%);
                     width: 400px;
                     background: #fff;
                     padding: 20px;
                     border-radius: 10px;
                     box-shadow: 0 5px 20px rgba(0,0,0,0.3);
                     z-index: 9999;
                     animation: fadeIn 0.3s ease-in-out;
                     }
                     /* Animation */
                     @keyframes fadeIn {
                     from {opacity: 0; transform: translate(-50%, -60%);}
                     to {opacity: 1; transform: translate(-50%, -50%);}
                     }
                     /* Close button */
                     .popup-form .close-btn {
                     background: none;
                     border: none;
                     font-size: 20px;
                     position: absolute;
                     top: 10px;
                     right: 15px;
                     cursor: pointer;
                     }
                     /* Normal input border */
                     .form-control {
                     border: 1px solid #ccc;
                     border-radius: 10px;
                     transition: all 0.3s;
                     }
                     /* Focused input border gray */
                     .form-control:focus {
                     border-color: #6c757d !important; /* Bootstrap gray-600 */
                     box-shadow: 0 0 5px rgba(108, 117, 125, 0.5) !important; /* soft gray glow */
                     }
                  </style>
                  <!-- Call Us Button -->
                  <div class="text-center mt-5">
                     <button id="callBtn" class="btn btn-primary btn-lg call-now">
                     <i class="fas fa-phone-volume me-2"></i>Call Us Now
                     </button>
                  </div>
                  <!-- Background overlay -->
                  <div class="popup-overlay" id="popupOverlay"></div>
                  <!-- Popup Form -->
                  <!-- Popup Form -->
                  <div class="popup-form" id="popupForm">
                     <button class="close-btn" id="closePopup">&times;</button>
                     <h4 class="mb-3 text-dark text-center">
                        <i class="fas fa-phone-volume me-2"></i>Enquire Now
                     </h4>
                     <form>
                        <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="name" placeholder="Name" required>
                           <label for="name" style="color: #000 !important">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number" required>
                           <label for="mobile" style="color: #000 !important">Mobile Number</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="email" class="form-control" id="email" placeholder="Email" required>
                           <label for="email" style="color: #000 !important">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                           <textarea class="form-control" placeholder="Comments" id="comments" style="height:100px;" required></textarea>
                           <label for="comments" style="color: #000 !important">Comments</label>
                        </div>
                        <button type="submit" class="btn w-100 text-white" style="background:#c07a52; border-radius: 2rem">
                        <i class="fas fa-paper-plane me-2"></i>Submit Now
                        </button>
                     </form>
                  </div>
                 
                  <script>
                     const callBtn = document.getElementById("callBtn");
                     const popupForm = document.getElementById("popupForm");
                     const popupOverlay = document.getElementById("popupOverlay");
                     const closePopup = document.getElementById("closePopup");
                     
                     // Open popup
                     callBtn.addEventListener("click", () => {
                       popupForm.style.display = "block";
                       popupOverlay.style.display = "block";
                     });
                     
                     // Close popup
                     closePopup.addEventListener("click", () => {
                       popupForm.style.display = "none";
                       popupOverlay.style.display = "none";
                     });
                     
                     // Close when clicking outside
                     popupOverlay.addEventListener("click", () => {
                       popupForm.style.display = "none";
                       popupOverlay.style.display = "none";
                     });
                  </script>
               </div>
               <!-- Right Column: Form -->
               <div class="col-lg-4 ms-auto">
                  <div class="contact-form card p-4 shadow-lg">
                     <h4 class="text-center mb-4 text-dark">Get In Touch</h4>
                     <form>
                        <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="name" placeholder="Name" required>
                           <label for="name">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number" required>
                           <label for="mobile">Mobile Number</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="email" class="form-control" id="email" placeholder="Email" required>
                           <label for="email">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                           <textarea class="form-control" placeholder="Comments" id="comments" style="height:100px;" required></textarea>
                           <label for="comments">Comments</label>
                        </div>
                        <button type="submit" class="btn w-100 text-white" style="background:#c07a52; border-radius: 2rem">
                        <i class="fas fa-paper-plane me-2"></i>Submit Now
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Main Content -->
      <section class="py-5">
         <div class="container">
            <div class="row g-5">
               <!-- Left Content -->
               <div class="col-lg-12">
                  <!-- Overview -->
                  <div id="overview" class="mb-5">
                     <h3 class="section-title"><i class="fas fa-info-circle me-2"></i>Overview</h3>
                     <p>Luxury Heights offers spacious 3 BHK + Study apartments with world-class amenities and seamless connectivity. Designed for modern families, it ensures luxury, comfort, and convenience.</p>
                  </div>
                  <!-- Configuration -->
                  <div id="configuration" class="mb-5">
                     <h3 class="section-title"><i class="fas fa-th-large me-2"></i>Configuration & Sizes</h3>
                     <table class="table table-bordered">
                        <thead class="table-light">
                           <tr>
                              <th>Type</th>
                              <th>Size (Sqft)</th>
                              <th>Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>3 BHK + Study</td>
                              <td>1700</td>
                              <td>₹3 Cr</td>
                           </tr>
                           <tr>
                              <td>4 BHK</td>
                              <td>2100</td>
                              <td>₹3.8 Cr</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>


                  <!-- Floor Plans -->
<div id="floorplans" class="mb-5">
   <h3 class="section-title"><i class="fas fa-layer-group me-2"></i>Floor Plans</h3>
   <div class="row g-4">
      <!-- Floor Plan 1 -->
      <div class="col-md-6 col-lg-4">
         <div class="card h-100 shadow-sm border-0">
            <img src="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_1280.jpg" class="card-img-top" alt="3 BHK + Study Floor Plan">
            <div class="card-body">
               <h5 class="card-title fw-bold">3 BHK + Study </h5>
               <p class="card-text">Super Area: 1700 Sq. Ft</p>
               <a href="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_1280.jpg" target="_blank" class="btn btn-sm text-white" style="background:#c07a52; border-radius:2rem;">
                  <i class="fas fa-search-plus me-1"></i> View Plan
               </a>
            </div>
         </div>
      </div>
      <!-- Floor Plan 2 -->
      <div class="col-md-6 col-lg-4">
         <div class="card h-100 shadow-sm border-0">
            <img src="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_1280.jpg" class="card-img-top" alt="4 BHK Floor Plan">
            <div class="card-body">
               <h5 class="card-title fw-bold">4 BHK</h5>
               <p class="card-text">Super Area: 2100 Sq. Ft</p>
               <a href="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_1280.jpg" target="_blank" class="btn btn-sm text-white" style="background:#c07a52; border-radius:2rem;">
                  <i class="fas fa-search-plus me-1"></i> View Plan
               </a>
            </div>
         </div>
      </div>
   </div>
</div>

                  <!-- Amenities -->
                  <div id="amenities" class="mb-5">
                     <h3 class="section-title"><i class="fas fa-swimming-pool me-2"></i>Amenities</h3>
                     <div class="row g-4">
                        <div class="col-6 col-md-4 text-center">
                           <i class="fas fa-dumbbell amenity-icon"></i>
                           <p>Gym</p>
                        </div>
                        <div class="col-6 col-md-4 text-center">
                           <i class="fas fa-swimming-pool amenity-icon"></i>
                           <p>Swimming Pool</p>
                        </div>
                        <div class="col-6 col-md-4 text-center">
                           <i class="fas fa-child amenity-icon"></i>
                           <p>Kids Play Area</p>
                        </div>
                        <div class="col-6 col-md-4 text-center">
                           <i class="fas fa-tree amenity-icon"></i>
                           <p>Green Park</p>
                        </div>
                        <div class="col-6 col-md-4 text-center">
                           <i class="fas fa-shield-alt amenity-icon"></i>
                           <p>24x7 Security</p>
                        </div>
                        <div class="col-6 col-md-4 text-center">
                           <i class="fas fa-car amenity-icon"></i>
                           <p>Parking</p>
                        </div>
                     </div>
                  </div>
                  <!-- Location -->
                  <div id="location" class="mb-5">
                     <h3 class="section-title"><i class="fas fa-map-marker-alt me-2"></i>Location</h3>
                     <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.456789012345!2d77.0595!3d28.4500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19dc1234567%3A0xabcdef1234567890!2sSector%2056%2C%20Gurgaon%2C%20Haryana%20122001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        width="100%" height="300" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy">
                     </iframe>
                     <ul class="mt-3" style="list-style: none; padding-left: 0rem;">
                        <li ><i class="fas fa-check-circle text-success me-2"></i>5 mins from Huda Metro</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>10 mins from Cyber Hub</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Nearby schools & hospitals</li>
                     </ul>
                  </div>
                  <!-- Gallery -->
                  <div id="gallery" class="mb-5 gallery">
                     <h3 class="section-title"><i class="fas fa-images me-2"></i>Gallery</h3>
                     <div class="row g-3">
                        <div class="col-6 col-md-4"><img src="https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg" class="img-fluid"></div>
                        <div class="col-6 col-md-4"><img src="https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg" class="img-fluid"></div>
                        <div class="col-6 col-md-4"><img src="https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg" class="img-fluid"></div>
                     </div>
                  </div>
                  <!-- FAQs -->
                  <div id="faqs" class="mb-5">
                     <h3 class="section-title"><i class="fas fa-question-circle me-2"></i>FAQs</h3>
                     <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="faq1">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne">
                              What is the possession date?
                              </button>
                           </h2>
                           <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                              <div class="accordion-body">Possession expected in 2024.</div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="faq2">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo">
                              Is loan facility available?
                              </button>
                           </h2>
                           <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                              <div class="accordion-body">Yes, loans available from top banks.</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Right Sidebar Form -->
               <!-- <div class="col-lg-4">
                  <div class="sticky-form">
                    <div class="card p-4">
                      <h4 class="enuiry-from-text"><i class="fas fa-phone-volume me-2" style="font-size: 20px;"></i>Enquire Now</h4>
                      <form>
                        <div class="mb-3"><label class="form-label">Name</label><input type="text" class="form-control" placeholder="Your Name"></div>
                        <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" placeholder="Your Email"></div>
                        <div class="mb-3"><label class="form-label">Phone</label><input type="text" class="form-control" placeholder="Your Phone"></div>
                        <button type="submit" class="btn w-100 text-white" style="background: #c07a52"><i class="fas fa-paper-plane me-2"></i>Submit Enquiry</button>
                      </form>
                    </div>
                  </div>
                  </div> -->
            </div>
         </div>
      </section>
      <!-- Modal Form -->
      <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
               <div class="modal-header border-0">
                  <h5 class="modal-title fw-bold text-primary" id="enquiryModalLabel"><i class="fas fa-phone-volume me-2"></i>Enquire Now</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="mb-3"><label class="form-label">Name</label><input type="text" class="form-control" placeholder="Your Name"></div>
                     <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" placeholder="Your Email"></div>
                     <div class="mb-3"><label class="form-label">Phone</label><input type="text" class="form-control" placeholder="Your Phone"></div>
                     <button type="submit" class="btn btn-primary w-100" ><i class="fas fa-paper-plane me-2"></i>Submit Enquiry</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <?php  include './includes/footer.php' ?>
   </body>
</html>