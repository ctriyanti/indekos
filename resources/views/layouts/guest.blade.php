<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('partials.nav')
        <!-- Masthead-->
        <main>
            {{ $slot }}
        </main>
        <!-- Footer-->
        @include('partials.footer')
        @include('partials.scripts')
    </body>
</html>
