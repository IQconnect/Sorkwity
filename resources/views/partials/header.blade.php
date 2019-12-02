@php
  $phone = get_field('phone','options');
  $mail = get_field('mail','options');

  $sm = get_field('icons');
@endphp

<header class="header" header>
  <div class="container container--small">
    <div class="row">
       @include('partials.top')
      <div class="col header__wrapper">

        <button class="header__hamburger hamburger" data-toggle-menu>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
        </button>
        <nav class="header__nav" data-nav>
          <div class="header__items">
            <a class="header__brand" href="{{ home_url('/') }}">
              <img src="{{  get_field('logo', 'options')['url'] }}" alt="Apartamenty Juno">
            </a>
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']) !!}
          @endif
          </div>
          <form class="header__input">
              <input type="text" name="search" placeholder="Szukaj">
              </form>
      </nav>
      </div>
    </div>
  </div>
</header>
