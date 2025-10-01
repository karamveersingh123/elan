  
  <!-- Footer -->
<footer class="text-center text-white py-4" style="background-color: #444;">
  <div class="container">

    <p class="mb-1">
      <strong>Agent Rera :</strong> Lorem, ipsum dolor.
    </p>
    <p class="mb-1">
      <strong>Project Rera :</strong> Lorem ipsum dolor sit amet. 
      <span class="ms-2">Date: 30/09/2025</span>
    </p>

    <p class="small mb-2">
      <strong>Disclaimer:</strong> The content provided on this website is for information purposes only and does not 
      constitute an offer to avail any service. The prices may change without prior notice, and the availability of 
      properties mentioned is not guaranteed.
    </p>

    <a href="#" class="fw-bold text-white text-decoration-underline d-block mb-2">Read more</a>

    <div class="footer-links small">
      <a href="#" class="text-white text-decoration-none me-2">Disclaimer</a> | 
      <a href="#" class="text-white text-decoration-none mx-2">Privacy Policy</a> | 
      <a href="#" class="text-white text-decoration-none ms-2">Right Solutions</a>
    </div>
  </div>
</footer>




 <!-- Popup Form -->
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
                  
 
  <style>

    /* Floating Button */
    .toggle-btn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      background: #555;
      color: #fff;
      border: none;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      font-size: 24px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: background 0.3s;
      z-index: 1000;
    }

    .toggle-btn:hover {
      background: #a0663f;
    }

    /* Hide button initially */
    .toggle-btn.hidden {
      display: none;
    }
  </style>
 <button id="scrollTopBtn" class="toggle-btn hidden">↑</button>




  <script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    // Show button when scrolled down
    window.addEventListener("scroll", () => {
      if (window.scrollY > 200) {
        scrollTopBtn.classList.remove("hidden");
      } else {
        scrollTopBtn.classList.add("hidden");
      }
    });

    // Scroll to top on click
    scrollTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  </script>


