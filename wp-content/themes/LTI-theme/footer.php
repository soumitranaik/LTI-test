<footer class="footer">
    <div class="footer-logo">
    <img src="<?php echo esc_url(get_theme_mod('mytheme_logo')); ?>" alt="Logo" width="auto" height="50">
    </div>
    <div class="footer-right">
      <div class="footer-social">
        <a href="https://facebook.com" class="social-icon" target="_blank">
          <img src="images/icon-facebook.png" alt="">
        </a>
        <a href="https://twitter.com" class="social-icon" target="_blank">
          <img src="images/icon-twitter.png" alt="">
        </a>
        <a href="https://instagram.com" class="social-icon" target="_blank">
          <img src="images/icon-twitter.png" alt="">
        </a>
        <a href="https://linkedin.com" class="social-icon" target="_blank">
          <img src="images/icon-twitter.png" alt="">
        </a>
      </div>
      <nav class="footer-menu">
      <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer-menu'
        ));
        ?>
      </nav>
    </div>
  </footer>
</body>
<script>
  const carousel = document.querySelector('.carousel');
  const nextBtn = document.getElementById('nextBtn');

  let scrollAmount = 0;
  const scrollStep = carousel.clientWidth / 4; 

  nextBtn.addEventListener('click', () => {
    scrollAmount += scrollStep;
    if (scrollAmount >= carousel.scrollWidth - carousel.clientWidth) {
      scrollAmount = 0;
    }
    carousel.style.transform = `translateX(-${scrollAmount}px)`;
  });
  document.addEventListener('DOMContentLoaded', function() {
  var header = document.getElementById('header');

  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) { 
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
});
</script>

</html>