<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Title Deed</title>
    <link rel="stylesheet" id="css-main" href="/assets/css/dashmix.min.css">
    <link rel="stylesheet" id="css-main" href="/assets/css/dataTables.bootstrap5.min.css">

</head>

<body>

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">


        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                            <i class="fa fa-fw fa-cog"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
                            <i class="far fa-fw fa-user-circle"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
                            <i class="far fa-fw fa-edit"></i>
                        </button>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Settings Tab -->
                    <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab" tabindex="0">
                        <div class="block mb-0">
                            <!-- Color Themes -->
                            <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                                            Default
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="/assets/css/themes/xwork.min.css" href="#">
                                            xWork
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="/assets/css/themes/xmodern.min.css" href="#">
                                            xModern
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="/assets/css/themes/xeco.min.css" href="#">
                                            xEco
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="/assets/css/themes/xsmooth.min.css" href="#">
                                            xSmooth
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="/assets/css/themes/xinspire.min.css" href="#">
                                            xInspire
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="/assets/css/themes/xdream.min.css" href="#">
                                            xDream
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="/assets/css/themes/xpro.min.css" href="#">
                                            xPro
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="/assets/css/themes/xplay.min.css" href="#">
                                            xPlay
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Color Themes -->

                            <!-- Sidebar -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sidebar -->

                            <!-- Header -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Header</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Header -->

                            <!-- Content -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Content</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Content -->
                        </div>
                    </div>
                    <!-- END Settings Tab -->

                    <!-- People -->
                    <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab" tabindex="0">
                        <div class="block mb-0">
                            <!-- Section -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Section</span>
                            </div>
                            <div class="block-content">
                                <p>
                                    ...
                                </p>
                            </div>
                            <!-- Section -->
                        </div>
                    </div>
                    <!-- END People -->

                    <!-- Profile -->
                    <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab" tabindex="0">
                        <div class="block mb-0">
                            <!-- Section -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Section</span>
                            </div>
                            <div class="block-content">
                                <p>
                                    ...
                                </p>
                            </div>
                            <!-- Section -->
                        </div>
                    </div>
                    <!-- END Profile -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->


    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="/admin-dashboard">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
                    <span class="smini-hidden">
                Title<span class="opacity-75">Deed</span>
              </span>
                </a>
                <!-- END Logo -->

            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="/admin-dashboard">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboard</span>
<!--                            <span class="nav-main-link-badge badge rounded-pill bg-primary">3</span>-->
                        </a>

                        <a class="nav-main-link active" href="/logout">
                            <i class="nav-main-link-icon fa fa-sign-out"></i>
                            <span class="nav-main-link-name">Logout</span>
                            <!--                            <span class="nav-main-link-badge badge rounded-pill bg-primary">3</span>-->
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container" class="pt-0">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Title Deed Inquiry Screen</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">

                </div>
                <div class="block-content block-content-full">
                    <form>
                       <div class="row mb-2">
                           <label class="col"> Name :
                               <input id="first_name" type="search" class="form-control form-control-sm">
                           </label>

                           <label class="col"> Surname :
                               <input id="last_name" type="search" class="form-control form-control-sm">
                           </label>

                           <label class="col"> City :
                               <input id="city_name" type="search" class="form-control form-control-sm">
                           </label>
                       </div>

                        <div class="row mb-3">
                            <label class="col"> Registration Date :
                                <input id="registration_date" type="date" class="form-control form-control-sm">
                            </label>

                            <label class="col"> Deed District :
                                <input id="district_name" type="search" class="form-control form-control-sm">
                            </label>

                            <label class="col"> Plot/Parcel :
                                <input id="plot_parcel" type="search" class="form-control form-control-sm">
                            </label>
                        </div>
                        <button class="btn btn-sm btn-success mb-3">Search</button>
                        <button type="reset" class="btn btn-sm btn-info mb-3">Reset</button>
                    </form>

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

</div>
<!-- END Page Container -->
<!-- jQuery (required for DataTables plugin) -->
<script src="/assets/js/lib/jquery.min.js"></script>

<script src="/assets/js/dashmix.app.min.js"></script>
<script src="/assets/js/plugins/datatable/dataTables.min.js"></script>
<script src="/assets/js/plugins/datatable/dataTables.bootstrap5.min.js"></script>

<script>
    var table = new DataTable('.js-dataTable-full', {
        ajax:{
            url: "/get-title-deed-list",
            type: 'POST',
            dataType: 'json',
            data: function(d) {
                d.first_name = $("#first_name").val().trim()
                d.last_name = $("#last_name").val().trim()
                d.city_name = $("#city_name").val().trim()
                d.registration_date = $("#registration_date").val().trim()
                d.district_name = $("#district_name").val().trim()
                d.plot_parcel = $("#plot_parcel").val().trim()
            }
        },
        processing: true,
        serverSide: true,
        searching: false,
        columns:[
            { data: "first_name", title: "Name" },
            { data: "last_name", title: "Surname" },
            { data: "city_name", title: "City" },
            { data: "registration_date", title: "Registration Date" },
            { data: "district_name", title: "Deed District" },
            { data: "plot_parcel", title: "Plot/Parcel" }
        ]
    });

    $(".btn-success").click(function (e){
        e.preventDefault()
        table.ajax.reload()
    })

    $(".btn-info").click(function (e){
        setTimeout(function () {
            table.ajax.reload()
        }, 100)
    })

</script>


</body>
</html>
