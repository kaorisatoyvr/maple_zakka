<footer class="content-info">
  
<div class="flex justify-center flex-wrap gap-10 md:gap-20">
    <div class="footer_logo">
    <a class="brand mt-5" href="{{ home_url('/') }}">
        {!! wp_get_attachment_image( $siteLogo2 ) !!}
      </a>
    </div>

    <div class="footer_navigation">
      <h2>Links</h2>
          <nav class="footer-navigation">
              @if (has_nav_menu('footer-left'))
                  {!! wp_nav_menu([
                      'theme_location' => 'footer-left',
                      'menu_class' => 'footer-left',
                      'container' => false,
                      'echo' => false
                  ]) !!}
              @else
                  <p>Footer Left Menu is not assigned. Please assign a menu in the WordPress admin under Appearance > Menus.</p>
              @endif
          </nav>
    </div>

    <div class="footer_contact">
      <h2>Contact Us</h2>
        <nav class="footer-navigation">
            @if (has_nav_menu('footer-middle'))
                {!! wp_nav_menu([
                    'theme_location' => 'footer-middle',
                    'menu_class' => 'footer-middle',
                    'container' => false,
                    'echo' => false
                ]) !!}
            @else
                <p>Footer Left Menu is not assigned. Please assign a menu in the WordPress admin under Appearance > Menus.</p>
            @endif
        </nav>
    </div>

    <div class="footer_social_media">
        <nav>
            @if (has_nav_menu('social-media'))
             {!! wp_nav_menu([
                    'theme_location' => 'social-media',
                    'menu_class' => 'social-media',
                    'container' => false,
                    'echo' => false
                ]) !!}
            @endif
        </nav>
    </div>

  </div>
 
  <div class="footer-credit text-center mt-5">
    <p class="text-sm">&copy; 2024 Maple Zakka | created by 
      <a href="https://kaorisato.ca/" class="text-blue-300">Kaori</a></p>
  </div>

  <button id="goToTopBtn" title="Go to Top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
  
</footer>
