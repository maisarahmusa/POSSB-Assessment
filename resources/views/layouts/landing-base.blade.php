<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ASSESSMENT POSSB</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../img/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../img/risda_logo.png">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>
    <style>
        .purchase {
            text-align: center;
            color: #79A368;
        }

        body {
            background-color: white !important;
        }

        .form-control {
            border-color: #79A368;
            -moz-box-shadow: inset 0 0 5px rgba(173, 173, 173, 0.658);
            -webkit-box-shadow: inset 0 0 5px rgba(173, 173, 173, 0.658);
            box-shadow: inset 0 0 5px rgba(173, 173, 173, 0.658);
        }

        .btn-hijau {
            color: white;
            background-color: #79A368;
        }

        /* primary blue to green */
        .text-primary {
            color: #79A368 !important;
        }

        .btn-primary {
            background-color: #79A368 !important;
            border-color: #79A368 !important;
        }

        .btn-outline-primary {
            background-color: white;
            border-color: #79A368 !important;
            color: #79A368;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #79A368;
            border-color: #79A368;
        }

        /* orange */
        .text-hijau {
            color: #79A368 !important;
        }

        .btn-hijau-header {
            color: #79A368;
            background-color: transparent;
            border-color: transparent;
        }

        .btn-hijau-header:hover {
            color: #fff;
            background-color: #79A368;
            border-color: #79A368;
        }

        footer {
            background-color: #EDEEED;
        }
    </style>

    {{-- start header --}}
    <header>
        {{-- <nav class="navbar navbar-expand p-3"> --}}
            <h1 class="purchase">STATIONERY</h1>
        {{-- </nav> --}}
        
    </header>
    {{-- end header --}}

    {{-- main content start --}}
    <main class="main" id="top">
        @yield('content')
    </main>
    {{-- end main content --}}

    {{-- start footer --}}
    <footer>
        <div class="row mt-6">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </footer>
    {{-- end footer --}}


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>
</body>

</html>