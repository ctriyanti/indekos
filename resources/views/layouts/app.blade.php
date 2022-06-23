<!DOCTYPE html>
<!--
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/
-->
<html xmlns="http://www.w3.org/1999/xhtml">

@include('admin.partials.head')

<body>
    <div id="wrapper">
        @include('admin.partials.nav')
        <main>
            {{$slot}}
        </main>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    @include('admin.partials.scripts')
</body>

</html>
