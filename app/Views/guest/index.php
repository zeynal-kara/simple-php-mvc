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
    <link rel="stylesheet" id="css-main" href="/assets/css/dashmix.min.css">
    <link rel="stylesheet" id="css-main" href="/assets/lib/sweetalert2/sweetalert2.min.css">

</head>

<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('/assets/media/photos/photo22@2x.jpg');">
            <div class="row g-0 bg-primary-op">
                <!-- Main Section -->
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="/">
                                <span class="text-dark">Title</span><span class="text-primary">Deed</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form class="js-validation-signin">
                                    <div class="py-3">
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt" id="username" name="username" placeholder="Username">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button id="sign_in_btn" type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                        </button>
                                        <p class="mt-3">Username : admin <br> Pass : 12345</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <!-- END Main Section -->

                <!-- Meta Info Section -->
                <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                    <div class="p-3">
                        <p class="display-4 fw-bold text-white mb-3">
                            Welcome to the future
                        </p>
                        <p class="fs-lg fw-semibold text-white-75 mb-0">
                            Copyright &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <!-- END Meta Info Section -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->


<script src="/assets/js/dashmix.app.min.js"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="/assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="/assets/js/pages/op_auth_signin.min.js"></script>

<script src="/assets/lib/sweetalert2/sweetalert2.min.js"></script>

<script>
    $("#sign_in_btn").click(function (e){
        e.preventDefault()

        if (!$("#username").val() || !$("#password").val()){
            Swal.fire({
                icon: 'error',
                text: 'Username and Password are required.',
            });

            return
        }

        $.ajax({
            url:"/sign-in",
            type:"post",
            dataType:'json',
            data:{
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function (res){
                Swal.fire({
                    icon: 'success',
                    text: res.message,
                });
                setTimeout(function() {
                    window.location.href = '/admin-dashboard';
                }, 1500);
            },
            error: function (xhr, status, err){
                Swal.fire({
                    icon: 'error',
                    text: xhr.responseJSON.message,
                });
            }
        })
    })
</script>


</body>
</html>
