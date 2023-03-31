@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<nav class="@yield('background') @yield("background-opc") px-10 py-1 z-20 sticky top-0" style="width:100%" >
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">
          <img src="{{asset('assets/logo-del.png')}}" width="55px" alt="Beasiswa Logo" />      
          <img src="{{asset('assets/logobeasiswa.png')}}"width="146px" alt="Beasiswa Logo" />
      </a>
      @guest
        @include('components.logIn')
      @else
        @include('components.loggedIn')
      @endguest
    </div>
  </nav>