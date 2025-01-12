<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Title Deed App</title>

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="/assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('/assets/media/photos/photo10@2x.jpg');">
            <div class="row g-0 justify-content-end bg-xwork-op">
                <!-- Main Section -->
                <div class="hero-static col-md-5 d-flex flex-column bg-body-extra-light">
                    <!-- Header -->
                    <div class="flex-grow-0 p-5">
                        <a class="link-fx fw-bold fs-2" href="#">
                            <span class="text-dark">Title</span><span class="text-primary">Deed</span>
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted mb-0">

                        </p>
                    </div>
                    <!-- END Header -->

                    <!-- Content -->
                    <div class="flex-grow-1 d-flex align-items-center p-5 bg-body-light">
                        <div class="w-100">
                            <p class="text-danger fs-4 fw-bold text-uppercase mb-2">
                                404 Error
                            </p>
                            <h1 class="fw-bold mb-2">
                                Page Not Found
                            </h1>
                            <p class="fs-4 fw-medium text-muted mb-5">
                                We are sorry but your request contains bad syntax and cannot be fulfilled.
                                <br>
                                <?php echo $exception->getMessage(); ?>
                            </p>
                            <a class="btn btn-lg btn-alt-danger" href="/">
                                <i class="fa fa-arrow-left opacity-50 me-1"></i> Back to home
                            </a>
                        </div>
                    </div>
                    <!-- END Content -->

                    <!-- Footer -->
                    <ul class="list-inline flex-gow-1 p-5 fs-sm fw-medium mb-0">
                        <li class="list-inline-item">
                            <a class="text-muted" href="javascript:void(0)">
                                Dashboard
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="javascript:void(0)">
                                Support
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="javascript:void(0)">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <!-- END Footer -->
                </div>
                <!-- END Main Section -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS

  Core libraries and functionality
  webpack is putting everything together at /assets/_js/main/app.js
-->
<script src="/assets/js/dashmix.app.min.js"></script>
</body>
</html>
