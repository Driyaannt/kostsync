<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.header')
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- aside start --}}
    @include('layouts.superadmin.partials.aside')
    {{-- aside end --}}

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- Navbar -->
        @include('layouts.partials.navigation')
        <!-- End Navbar -->

        {{-- Content --}}
        @yield('content')
        {{-- end content --}}

        {{-- footer start --}}
        @include('layouts.partials.footer')
        {{-- footer end --}}

    </main>

    {{-- plugins start --}}
    @include('layouts.partials.plugins')
    {{-- plugins end --}}

    <!--   Core JS Files   -->
    @include('layouts.partials.javascripts')
</body>

</html>
