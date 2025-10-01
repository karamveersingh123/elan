<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Luxury Estates - Premium Real Estate</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     <style>

/* === Global Styles === */
body {
	font-family: 'Arial', sans-serif;
	scroll-behavior: smooth;
}

a {
	text-decoration: none;
	transition: all 0.3s;
}

a:hover {
	text-decoration: none;
}

/* === Navbar === */
.navbar {
	/* padding: 8px 0;
	box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
	transition: all 0.4s ease; */
   padding: 0px 0;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.4s ease;
    background: #fff !important;
}

.navbar-brand {
	font-weight: 900;
	font-size: 2rem;
	color: #fff;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.navbar-brand:hover {
	/* color: #c07a52; */
	/* transform: scale(1.05); */
}

.navbar-nav .nav-link {
	color: #555;
	font-weight: 500;
	margin-left: 20px;
	position: relative;
}

.navbar-nav .nav-link::after {
	content: '';
	position: absolute;
	width: 0%;
	height: 2px;
	bottom: 0;
	left: 0;
	background: #c07a52;
	transition: all 0.3s ease-in-out;
}

.navbar-nav .nav-link:hover::after {
	width: 100%;
}

.navbar-nav .nav-link:hover {
	color: #c07a52;
}

.navbar-toggler {
	border: none;
}

.navbar-toggler-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255,255,255,1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/ %3E%3C/svg%3E");
}

/* === Hero Banner === */
.hero-banner {
	background: url('https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg') center/cover no-repeat;
	height: 90vh;
	display: flex;
	align-items: center;
	color: #fff;
	position: relative;
}

.hero-banner::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.6);
}

.hero-content {
	position: relative;
	z-index: 2;
	text-align: center;
	animation: fadeInUp 1s ease-in-out;
}

.hero-content h1 {
	font-size: 3.2rem;
	font-weight: bold;
	margin-bottom: 15px;
}

.hero-content p {
	font-size: 1.2rem;
	margin-bottom: 25px;
}

.explore-btn {
	position: relative;
	overflow: hidden;
	z-index: 1;
	background: rgb(193, 154, 91);
	color: #fff;
	font-weight: 700;
	padding: 14px 40px;
	font-size: 1.1rem;
	border-radius: 50px;
	transition: all 0.4s ease;
	border: none !important;
}

.explore-btn::before {
	content: '';
	position: absolute;
	left: -50%;
	top: 0;
	width: 50%;
	height: 100%;
	background: rgba(255, 255, 255, 0.2);
	transform: skewX(-20deg);
	transition: all 0.5s;
}

.explore-btn:hover::before {
	left: 150%;
	background: #000 !important;
}

.explore-btn:hover {
	transform: scale(1.05);
	box-shadow: 0 10px 25px rgba(255, 126, 95, 0.4);
}

/* === Section Titles === */
h2 {
	font-weight: 100;
	color: #c07a52;
	margin-bottom: 40px;
	text-align: center;
}

#property-types .card {
	border: none;
	transition: transform 0.3s;
	box-shadow 0.3s;
	box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px !important;
	border-radius: 5px !important;
}

#property-types .card:hover {
	transform: translateY(-10px);
	box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

#property-types h5 {
	color: #c07a52;
	margin-bottom: 10px;
}

/* === About Builder === */
#about {
	background: #f8f9fa;
	padding: 80px 0;
}

#about img {
	border-radius: 15px;
	box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

/* === Features Section === */
#features i {
	font-size: 2rem;
	margin-bottom: 10px;
	color: #c07a52;
}

/* === Testimonials === */
#testimonials .card {
	border: none;
	border-radius: 10px;
	padding: 25px;
	transition: transform 0.3s;
	box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px !important;
}

#testimonials .card:hover {
	transform: translateY(-10px);
	box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

/* === Contact Form === */
#contact {
	padding: 80px 0;
}

.contact-form {
	background: linear-gradient(to bottom right, #fff, #f8f9fa);
	padding: 50px;
	border-radius: 10px;
	box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
	transition: transform 0.4s, box-shadow 0.4s;
}

.contact-form:hover {
	transform: translateY(-10px);
	box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
}

.contact-form .form-control {
	border-radius: 15px;
	border: 1px solid #ddd;
	transition: all 0.3s;
}

.contact-form .form-control:focus {
	border-color: #ff7e5f;
	box-shadow: 0 0 10px rgba(255, 126, 95, 0.3);
}

.contact-form button {
	border-radius: 50px;
	font-weight: 700;
	background: linear-gradient(90deg, #ff7e5f, #feb47b);
	border: none;
	transition: all 0.4s;
}

.contact-form button:hover {
	transform: scale(1.05);
	box-shadow: 0 10px 25px rgba(255, 126, 95, 0.4);
}



@media(max-width:768px) {
	.hero-content h1 {
		font-size: 2.2rem;
	}

	.hero-content p {
		font-size: 1rem;
	}
}


</style>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
         <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png"></img></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#property-types">Property Types</a></li>
                  <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About Builder</a></li>
                  <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                  <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Hero Banner -->
      <!-- Advanced Hero Banner with Contact Form -->
      <section class="hero-banner d-flex align-items-center">
         <div class="container">
            <div class="row align-items-center">
               <!-- Left Column: Text Content -->
               <div class="col-lg-8 hero-left text-white">
                  <h1>Find Your Dream Home</h1>
                  <p>Premium properties with world-class amenities in prime locations. Explore luxurious apartments, villas, and more.</p>
                  <div class="hero-buttons mt-4">
                     <a href="#projects" class="btn btn-primary">Explore Projects</a>
                     <a href="#contact" class="btn btn-outline-light ms-2">Contact Us</a>
                  </div>
                  <div class="hero-stats mt-5 d-flex gap-4">
                     <div class="stat">
                        <h3>500+</h3>
                        <p>Properties</p>
                     </div>
                     <div class="stat">
                        <h3>10+</h3>
                        <p>Years of Trust</p>
                     </div>
                     <div class="stat">
                        <h3>300+</h3>
                        <p>Happy Clients</p>
                     </div>
                  </div>
               </div>
               <!-- Right Column: Contact Form -->
               <div class="col-lg-4">
                  <div class="contact-form card p-4 shadow-lg">
                     <h4 class="text-center mb-4">Get In Touch</h4>
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
                        <button type="submit" class="btn w-100 submit-btn">Submit Now</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <style>
         /* Hero Banner */
         .hero-banner {
         background: url('https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg') center/cover no-repeat;
         height: 650px;
         position: relative;
         }
         .hero-banner::after {
         content: '';
         position: absolute;
         top:0; left:0; width:100%; height:100%;
         background: rgba(0,0,0,0.55);
         }
         .hero-banner .container {
         position: relative;
         z-index: 2;
         }
         .hero-left h1 {
         font-size: 3.2rem;
         font-weight: 700;
         margin-bottom: 15px;
         }
         .hero-left p {
         font-size: 1.2rem;
         line-height: 1.6;
         }
         .hero-buttons .btn {
         padding: 12px 30px;
         border-radius: 50px;
         font-weight: 600;
         transition: all 0.3s;
         }
         .hero-buttons .btn-primary {
         background: #c07a52;
         border: none;
         }
         .hero-buttons .btn-primary:hover {
         background: #a0663f;
         transform: scale(1.05);
         }
         .hero-buttons .btn-outline-light {
         border-color: #fff;
         color: #fff;
         }
         .hero-buttons .btn-outline-light:hover {
         background: #fff;
         color: #000;
         transform: scale(1.05);
         }
         /* Hero Stats */
         .hero-stats .stat h3 {
         font-size: 2rem;
         margin-bottom: 5px;
         font-weight: 700;
         }
         .hero-stats .stat p {
         margin: 0;
         }
         /* Contact Form */
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
      </style>
      <!-- Property Types -->
      <section id="property-types" class="py-5 bg-light">
         <div class="container">
            <h2>Explore Property Types</h2>
            <div class="row g-4">
               <div class="col-md-4 text-center">
                  <div class="card p-4 shadow-sm h-100">
                     <i class="fa fa-building fa-3x mb-3"></i>
                     <h5>Apartments</h5>
                     <p>Modern apartments with luxury amenities in prime locations.</p>
                  </div>
               </div>
               <div class="col-md-4 text-center">
                  <div class="card p-4 shadow-sm h-100">
                     <i class="fa fa-home fa-3x mb-3"></i>
                     <h5>Villas</h5>
                     <p>Spacious villas for a premium lifestyle with private spaces.</p>
                  </div>
               </div>
               <div class="col-md-4 text-center">
                  <div class="card p-4 shadow-sm h-100">
                     <i class="fa fa-briefcase fa-3x mb-3"></i>
                     <h5>Commercial Spaces</h5>
                     <p>Office and retail spaces in prime business districts.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Projects Section -->
      <style>
         .project-card {
         background: #fff;
         border-radius: 12px;
         overflow: hidden;
         box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
         max-width: 380px;
         margin: auto;
         }
         .project-card:hover {
         transform: translateY(-6px);
         box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
         }
         /* Image Section */
         .project-card img {
         width: 100%;
         height: 220px;
         object-fit: cover;
         display: block;
         }
         .badge-top {
         position: absolute;
         top: 12px;
         left: 12px;
         background: #28a745;
         color: #fff;
         padding: 5px 12px;
         border-radius: 20px;
         font-size: 13px;
         font-weight: bold;
         }
         /* 🔥 Blinking New Launch Badge */
         .badge-new {
         position: absolute;
         top: 12px;
         right: 12px;
         background: #c07a52;
         color: #fff;
         padding: 5px 12px;
         border-radius: 20px;
         font-size: 13px;
         font-weight: bold;
         animation: blink 5s infinite;
         }
         @keyframes blink {
         0%, 50%, 100% { opacity: 1; }
         25%, 75% { opacity: 0; }
         }
         .project-body {
         padding: 16px;
         }
         .project-body h5 {
         font-size: 20px;
         font-weight: 700;
         margin-bottom: 8px;
         color: #333;
         }
         .project-body p {
         font-size: 14px;
         color: #666;
         margin-bottom: 12px;
         }
         .info-row {
         font-size: 14px;
         color: #444;
         margin: 6px 0;
         }
         .info-row i {
         margin-right: 6px;
         color: #c07a52;
         }
         /* Highlight box */
         .highlight-box {
         background: #f1f9ff;
         border-left: 4px solid #007bff;
         padding: 10px;
         border-radius: 8px;
         margin: 12px 0;
         }
         .highlight-box strong {
         color: #555;
         }
         .highlight-box ul {
         margin: 6px 0 0;
         padding-left: 18px;
         font-size: 13px;
         color: #555;
         }
         /* Amenities */
         .amenities {
         margin: 12px 0;
         }
         .amenities strong {
         color: #333;
         display: block;
         margin-bottom: 6px;
         }
         .amenities .badge {
         display: inline-block;
         background: #f8f9fa;
         border: 1px solid #ddd;
         padding: 5px 10px;
         border-radius: 20px;
         font-size: 12px;
         color: #444;
         margin: 4px 4px 0 0;
         }
         .amenities .badge i {
         margin-right: 4px;
         }
         /* Footer */
         .project-footer {
         display: flex;
         justify-content: space-between;
         align-items: center;
         background: #f8f9fa;
         padding: 10px 16px;
         border-top: 1px solid #eee;
         font-size: 13px;
         color: #444;
         }
         .project-footer .premium {
         font-weight: bold;
         color: #ff9800;
         }
         /* Buttons */
         .project-actions {
         display: flex;
         justify-content: space-between;
         padding: 12px 16px;
         border-top: 1px solid #eee;
         }
         .project-actions button {
         flex: 1;
         margin: 0 4px;
         padding: 8px 12px;
         font-size: 14px;
         border: none;
         border-radius: 6px;
         cursor: pointer;
         transition: all 0.3s ease;
         }
         .btn-outline {
         background: #fff;
         border: 1px solid #007bff;
         color: #007bff;
         }
         .btn-outline:hover {
         background: #fff;
         color: #fff;
         border: 1px solid #c07a52;
         }
         .btn-primary {
         background: #007bff;
         color: #fff;
         }
         .btn-primary:hover {
         background: #0056b3;
         }
         .contact-btn{
         border: 1px solid #c07a52;
         }
      </style>
      <section id="projects">
         <div class="container py-5">
            <h2>Our Premium Projects</h2>
            <div class="row g-4">
               <!-- Repeat Project Cards -->
               <div class="col-lg-4 col-md-6">
                  <a href="#">
                     <div class="project-card">
                        <div class="position-relative" style="position: relative;">
                           <img src="https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg" alt="Luxury Heights">
                           <div class="badge-top"><i class="fa fa-check-circle"></i> Ready to Move</div>
                           <div class="badge-new"><i class="fa fa-bolt"></i> New Launch</div>
                        </div>
                        <div class="project-body">
                           <h5><i class="fa fa-building me-1"></i> Luxury Heights</h5>
                           <p>A premium residential complex with world-class amenities.</p>
                           <div class="info-row"><i class="fa fa-location-dot"></i> Sector 56, Gurgaon</div>
                           <div class="info-row"><i class="fa fa-house"></i> 3 BHK + Study</div>
                           <div class="info-row"><i class="fa fa-ruler-combined"></i> 700 Sqft</div>
                           <div class="info-row"><i class="fa fa-indian-rupee-sign"></i> ₹3 Cr</div>
                           <div class="highlight-box">
                              <strong><i class="fa fa-bolt"></i> Highlights:</strong>
                              <ul>
                                 <li>Smart Home Automation</li>
                                 <li>Dedicated Parking Space</li>
                                 <li>100% Power Backup</li>
                              </ul>
                           </div>
                           <div class="amenities">
                              <strong><i class="fa fa-crown"></i> Amenities:</strong>
                              <span class="badge"><i class="fa fa-swimmer text-info"></i> Swimming Pool</span>
                              <span class="badge"><i class="fa fa-dumbbell text-success"></i> Gym</span>
                              <span class="badge"><i class="fa fa-tree text-success"></i> Garden</span>
                              <span class="badge"><i class="fa fa-shield-alt text-danger"></i> Security</span>
                           </div>
                        </div>
                        <div class="project-footer">
                           <div><i class="fa fa-calendar" style="color: #c07a52"></i> &nbsp;  Possession: 2025</div>
                           <div class="premium"><i class="fa fa-star"></i> Premium Lifestyle</div>
                        </div>
                        <div class="project-actions">
                           <button class="btn-outline" style="color: #555"><i class="fa fa-phone-volume"></i>&nbsp; Contact Now</button>
                           <button class="text-white" style="background: #c07a52 !important"><i class="fa fa-file-alt"></i> &nbsp;Get Brochure</button>
                        </div>
                     </div>
                  </a>
               </div>

                <div class="col-lg-4 col-md-6">
                  <a href="#">
                     <div class="project-card">
                        <div class="position-relative" style="position: relative;">
                           <img src="https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg" alt="Luxury Heights">
                           <div class="badge-top"><i class="fa fa-check-circle"></i> Ready to Move</div>
                           <div class="badge-new"><i class="fa fa-bolt"></i> New Launch</div>
                        </div>
                        <div class="project-body">
                           <h5><i class="fa fa-building me-1"></i> Luxury Heights</h5>
                           <p>A premium residential complex with world-class amenities.</p>
                           <div class="info-row"><i class="fa fa-location-dot"></i> Sector 56, Gurgaon</div>
                           <div class="info-row"><i class="fa fa-house"></i> 3 BHK + Study</div>
                           <div class="info-row"><i class="fa fa-ruler-combined"></i> 700 Sqft</div>
                           <div class="info-row"><i class="fa fa-indian-rupee-sign"></i> ₹3 Cr</div>
                           <div class="highlight-box">
                              <strong><i class="fa fa-bolt"></i> Highlights:</strong>
                              <ul>
                                 <li>Smart Home Automation</li>
                                 <li>Dedicated Parking Space</li>
                                 <li>100% Power Backup</li>
                              </ul>
                           </div>
                           <div class="amenities">
                              <strong><i class="fa fa-crown"></i> Amenities:</strong>
                              <span class="badge"><i class="fa fa-swimmer text-info"></i> Swimming Pool</span>
                              <span class="badge"><i class="fa fa-dumbbell text-success"></i> Gym</span>
                              <span class="badge"><i class="fa fa-tree text-success"></i> Garden</span>
                              <span class="badge"><i class="fa fa-shield-alt text-danger"></i> Security</span>
                           </div>
                        </div>
                        <div class="project-footer">
                           <div><i class="fa fa-calendar" style="color: #c07a52"></i> &nbsp;  Possession: 2025</div>
                           <div class="premium"><i class="fa fa-star"></i> Premium Lifestyle</div>
                        </div>
                        <div class="project-actions">
                           <button class="btn-outline" style="color: #555"><i class="fa fa-phone-volume"></i>&nbsp; Contact Now</button>
                           <button class="text-white" style="background: #c07a52 !important"><i class="fa fa-file-alt"></i> &nbsp;Get Brochure</button>
                        </div>
                     </div>
                  </a>
               </div>

                <div class="col-lg-4 col-md-6">
                  <a href="#">
                     <div class="project-card">
                        <div class="position-relative" style="position: relative;">
                           <img src="https://cdn.pixabay.com/photo/2016/08/23/22/11/building-1615676_1280.jpg" alt="Luxury Heights">
                           <div class="badge-top"><i class="fa fa-check-circle"></i> Ready to Move</div>
                           <div class="badge-new"><i class="fa fa-bolt"></i> New Launch</div>
                        </div>
                        <div class="project-body">
                           <h5><i class="fa fa-building me-1"></i> Luxury Heights</h5>
                           <p>A premium residential complex with world-class amenities.</p>
                           <div class="info-row"><i class="fa fa-location-dot"></i> Sector 56, Gurgaon</div>
                           <div class="info-row"><i class="fa fa-house"></i> 3 BHK + Study</div>
                           <div class="info-row"><i class="fa fa-ruler-combined"></i> 700 Sqft</div>
                           <div class="info-row"><i class="fa fa-indian-rupee-sign"></i> ₹3 Cr</div>
                           <div class="highlight-box">
                              <strong><i class="fa fa-bolt"></i> Highlights:</strong>
                              <ul>
                                 <li>Smart Home Automation</li>
                                 <li>Dedicated Parking Space</li>
                                 <li>100% Power Backup</li>
                              </ul>
                           </div>
                           <div class="amenities">
                              <strong><i class="fa fa-crown"></i> Amenities:</strong>
                              <span class="badge"><i class="fa fa-swimmer text-info"></i> Swimming Pool</span>
                              <span class="badge"><i class="fa fa-dumbbell text-success"></i> Gym</span>
                              <span class="badge"><i class="fa fa-tree text-success"></i> Garden</span>
                              <span class="badge"><i class="fa fa-shield-alt text-danger"></i> Security</span>
                           </div>
                        </div>
                        <div class="project-footer">
                           <div><i class="fa fa-calendar" style="color: #c07a52"></i> &nbsp;  Possession: 2025</div>
                           <div class="premium"><i class="fa fa-star"></i> Premium Lifestyle</div>
                        </div>
                        <div class="project-actions">
                           <button class="btn-outline" style="color: #555"><i class="fa fa-phone-volume"></i>&nbsp; Contact Now</button>
                           <button class="text-white" style="background: #c07a52 !important"><i class="fa fa-file-alt"></i> &nbsp;Get Brochure</button>
                        </div>
                     </div>
                  </a>
               </div>
               <!-- Add more cards as needed -->
            </div>
         </div>
      </section>
      <!-- About Builder -->
      <section id="about">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 mb-4 mb-lg-0">
                  <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914" class="img-fluid" alt="About Builder">
               </div>
               <div class="col-lg-6">
                  <h2>About Our Builder</h2>
                  <p>Luxury Estates has been delivering premium real estate projects for over 20 years. We focus on quality, timely delivery, and customer satisfaction, providing modern designs, luxury amenities, and trusted legal approvals.</p>
                  <ul class="list-unstyled">
                     <li><i class="fa fa-check text-primary me-2"></i>20+ Years of Experience</li>
                     <li><i class="fa fa-check text-primary me-2"></i>Trusted & Certified Projects</li>
                     <li><i class="fa fa-check text-primary me-2"></i>Luxury Amenities & Design</li>
                  </ul>
                  <a href="#contact" class="btn contact-btn mt-3">Contact Us</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Features / Why Choose Us -->
      <section id="features" class="py-5 bg-light">
         <div class="container">
            <h2>Why Choose Luxury Estates</h2>
            <div class="row g-4 text-center">
               <div class="col-md-3">
                  <i class="fa fa-award"></i>
                  <h6>Trusted Builder</h6>
                  <p>20+ years of delivering premium projects.</p>
               </div>
               <div class="col-md-3">
                  <i class="fa fa-handshake"></i>
                  <h6>Customer Satisfaction</h6>
                  <p>We prioritize our clients' needs and convenience.</p>
               </div>
               <div class="col-md-3">
                  <i class="fa fa-gem"></i>
                  <h6>Luxury Amenities</h6>
                  <p>World-class amenities for a premium lifestyle.</p>
               </div>
               <div class="col-md-3">
                  <i class="fa fa-map-location-dot"></i>
                  <h6>Prime Locations</h6>
                  <p>Properties located in high-demand areas.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonials -->
      <section id="testimonials" class="py-5">
         <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="row g-4">
               <div class="col-md-4">
                  <div class="card">
                     <p>"Luxury Estates helped me find the perfect home. The process was smooth and hassle-free."</p>
                     <h6 class="mt-3">- Rajesh Kumar</h6>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <p>"Professional and reliable service. Their villas are top-notch."</p>
                     <h6 class="mt-3">- Anjali Mehta</h6>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card">
                     <p>"Premium quality apartments with world-class amenities. Highly recommended."</p>
                     <h6 class="mt-3">- Sunil Sharma</h6>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Form -->
      <section id="contact">
         <div class="container">
            <h2>Connect With Us</h2>
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <form class="contact-form">
                     <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                     </div>
                     <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                     </div>
                     <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Phone Number" required>
                     </div>
                     <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                     </div>
                     <button type="submit" class="btn w-100">Send Message</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
    

      <?php  include './includes/footer.php' ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>