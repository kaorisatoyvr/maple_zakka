<header class="banner p-4 sticky z-50 top-0 bg-opacity-70 bg-white shadow-sm">
 
  <a class="brand" href="{{ home_url('/') }}">
    {!! wp_get_attachment_image( $siteLogo ) !!}
  </a>
  
  <div class="primary_navigation">
    <div class="primary_nav">
      @if (has_nav_menu('primary_navigation'))
            <nav class="" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
            </nav>
      @endif
    </div>
    <div class="cart_btn">
  
      <x-button type="primary" :href="$btn['url']">
        {{ $btn['title'] }}
      </x-button>

    </div>

  </div>

  <div class="custom-hamburger-menu">
    @if (has_nav_menu('mobile-header'))
      <div>
        <nav class='mobile-nav'>
          {!! wp_nav_menu(['theme_location' => 'mobile-header', 'menu_class' => 'nav', 'echo' => false]) !!}
          <div class="cart_btn_mobile">
            <x-button type="primary" :href="$btn['url']">
              {{ $btn['title'] }}
            </x-button>
          </div>
        </nav>
      </div>
    @endif
    <button class="hamburger">
      <div class="bar"></div>
    </button>
  </div>

</header>
