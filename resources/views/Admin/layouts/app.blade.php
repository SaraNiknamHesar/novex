<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.3.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{--
    <link href="./dist/libs/jsvectormap/dist/jsvectormap.css?1750026893" rel="stylesheet" /> --}}
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset("assets/admin/css/tabler.css") }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset("assets/admin/js/tabler-theme.min.js") }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        @include("Admin.layouts.sidebar")
        <div class="page-wrapper">

            <!-- BEGIN PAGE BODY -->
            <div class="page-body">
                @yield("contents")
            </div>
            <!-- END PAGE BODY -->
            <!--  BEGIN FOOTER  -->
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">

                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2025
                                    <a href="javascript:void(0)" class="link-secondary">Sara Niknam Hesar</a>. All
                                    rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/SaraNiknamHesar" class="link-secondary" rel="noopener">
                                        v1.0.0 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END FOOTER  -->
        </div>
    </div>
    <!-- BEGIN PAGE MODALS -->

    <!-- END PAGE MODALS -->


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset("assets/admin/js/tabler.min.js") }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>

</html>