<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body id="page-top">
        <!-- Navigation-->
        @include('partials.nav')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <main>
            {{ $slot }}
        </main>
        <!-- Footer-->
        @include('partials.footer')
        @include('partials.scripts')
    </body>
</html>
