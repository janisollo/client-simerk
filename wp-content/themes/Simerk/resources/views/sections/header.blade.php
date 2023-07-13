<header class="bg-gray-800">
  <div class="container mx-auto flex justify-between items-center xs:ml-2 xs:mr-2 py-4">
    <a class="brand text-white text-xl font-bold" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      <ul class="nav flex space-x-4 text-white">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-4 text-white', 'container' => false, 'echo' => false]) !!}
      </ul>
      @endif
    </nav>
  </div>
</header>