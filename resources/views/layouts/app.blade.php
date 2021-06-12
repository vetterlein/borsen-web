<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Head -->
        @include('partials.head')
    </head>
    <body>

        <!-- Nav -->
		<nav id="layout-nav">
            @include('partials.nav')
        </nav>
       
        <!--<div class="container">-->
            @yield('content')
        <!--</div>-->

        <!-- Footer -->
		<footer id="footer">
            @include('partials.footer')
        </footer>

    </body>
</html>