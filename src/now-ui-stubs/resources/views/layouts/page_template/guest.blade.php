<div class="wrapper wrapper-full-page ">
    @include('layouts.navbars.navs.guest')
    <div class="full-page register-page section-image" filter-color="black" data-image="{{ $backgroundImage }}">
        @yield('content')
        @include('layouts.footer')
    </div>
</div>
