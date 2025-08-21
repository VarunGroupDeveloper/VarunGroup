    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/meanmenu.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/vendor/magnific-popup.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/jarallax.min.js"></script>
    <script src="assets/js/vendor/ajax-form.js"></script>
    <script src="assets/js/plugins/easypie.js"></script>
    <script src="assets/js/plugins/headding-title.js"></script>
    <script src="assets/js/plugins/lenis.min.js"></script>
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/plugins/rs-anim-int.js"></script>
    <script src="assets/js/plugins/rs-scroll-trigger.min.js"></script>
    <script src="assets/js/plugins/rs-splitText.min.js"></script>
    <script src="assets/js/plugins/jquery.lettering.js"></script>
    <script src="assets/js/plugins/parallax-effect.min.js"></script>
    <script src="assets/js/plugins/jquery.appear.min.js"></script>
    <script src="assets/js/plugins/marquee.min.js"></script>
    <script src="assets/js/plugins/chart.umd.min.js"></script>
    <script src="assets/js/plugins/nouislider.min.js"></script>
    <script src="assets/js/vendor/purecounter.js"></script>
    <script src="assets/js/vendor/odometer.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".rs-counter-number");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            counters.forEach((counter) => {
              const count = counter.getAttribute("data-count");
              counter.innerHTML = "0";

              // Use Odometer.js or your preferred animation method here
              setTimeout(() => {
                counter.innerHTML = count;
              }, 200); // Delay for animation smoothness
            });
          }
        });
      },
      {
        threshold: 0.6,
      }
    );

    const counterSection = document.getElementById("counterSection");
    if (counterSection) {
      observer.observe(counterSection);
    }
  });
</script>
<script>
  const container = document.getElementById('tabScrollContainer');
  const scrollLeftBtn = document.querySelector('.scroll-left');
  const scrollRightBtn = document.querySelector('.scroll-right');

  scrollLeftBtn.addEventListener('click', () => {
    container.scrollBy({ left: -200, behavior: 'smooth' });
  });

  scrollRightBtn.addEventListener('click', () => {
    container.scrollBy({ left: 200, behavior: 'smooth' });
  });
</script>

<script>
  gsap.to(".marquee-text p", {
    xPercent: -100,
    repeat: -1,
    ease: "linear",
    duration: 20
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('.hotel-selector');
    const allImages = document.querySelectorAll('.grid-item');

    links.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector('#gallerySection');
        const selectedHotel = this.dataset.hotel;

        // Scroll smoothly to gallery
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }

        // Hide all images first
        allImages.forEach(item => {
          item.style.display = 'none';
        });

        // Show only images related to selected hotel
        document.querySelectorAll(`.grid-item[data-hotel="${selectedHotel}"]`).forEach(item => {
          item.style.display = 'block';
        });
      });
    });
  });
</script>
