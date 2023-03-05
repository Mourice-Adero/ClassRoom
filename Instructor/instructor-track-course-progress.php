<?php
// Initialize the session
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION["instructor_id"])) {
    header("location: ./login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Track Course</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="./Public/Css/css8f03.css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="./../Public/vendor/spinkit.css"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="./../Public/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="./../Public/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="./../Public/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="./../Public/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="./../Public/css/app.css"
              rel="stylesheet">

        <!-- Flatpickr -->
        <link type="text/css"
              href="./../Public/css/flatpickr.css"
              rel="stylesheet">
        <link type="text/css"
              href="./../Public/css/flatpickr-airbnb.css"
              rel="stylesheet">

    </head>

    <body class="layout-sticky layout-sticky-subnav ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.php -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <!-- Navbar -->

                    <div class="navbar navbar-expand pr-0 navbar-light bg-white navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar Toggler -->

                        <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- // END Navbar Toggler -->

                        <!-- Navbar Brand -->

                        <a href="./../index.php"
                           class="navbar-brand mr-16pt">

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="./../Public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                            <span class="d-none d-lg-block">Online Classroom</span>
                        </a>

                        <!-- // END Navbar Brand -->

                        <!-- Navbar Search -->

                        <form class="search-form navbar-search d-none d-md-flex mr-16pt"
                              action="">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Search ...">
                        </form>

                        <!-- // END Navbar Search -->

                        <div class="flex"></div>

                        <!-- Navbar Menu -->

                        <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                            <!-- Notifications dropdown -->
                            <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full"
                                 data-toggle="tooltip"
                                 data-title="Messages"
                                 data-placement="bottom"
                                 data-boundary="window">
                                <button class="nav-link btn-flush dropdown-toggle"
                                        type="button"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                    <i class="material-icons icon-24pt">mail_outline</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div data-perfect-scrollbar
                                         class="position-relative">
                                        <div class="dropdown-header"><strong>Messages</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-accent"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="./../Public/images/people/110/woman-5.jpg"
                                                             alt="people"
                                                             class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="text-black-100">Michelle</strong>
                                                        <span class="text-black-70">Clients loved the new design.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">5 minutes ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="./../Public/images/people/110/woman-5.jpg"
                                                             alt="people"
                                                             class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="text-black-100">Michelle</strong>
                                                        <span class="text-black-70">🔥 Superb job..</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // END Notifications dropdown -->

                            <!-- Notifications dropdown -->
                            <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full"
                                 data-toggle="tooltip"
                                 data-title="Notifications"
                                 data-placement="bottom"
                                 data-boundary="window">
                                <button class="nav-link btn-flush dropdown-toggle"
                                        type="button"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                    <i class="material-icons">notifications_none</i>
                                    <span class="badge badge-notifications badge-accent">2</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div data-perfect-scrollbar
                                         class="position-relative">
                                        <div class="dropdown-header"><strong>System notifications</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">3 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-accent"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">5 hours ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="text-black-100">Adrian. D</strong>
                                                        <span class="text-black-70">Wants to join your private group.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">1 day ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-warning">storage</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your deploy was successful.</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // END Notifications dropdown -->

                            <div class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link d-flex align-items-center dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">

                                    <span class="avatar avatar-sm mr-8pt2">

                                        <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                                    </span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header"><strong>Account</strong></div>
                                    <a class="dropdown-item"
                                       href="edit-account.php">Edit Account</a>
                                    <a class="dropdown-item"
                                       href="./logout.php">Logout</a>
                                </div>
                            </div>
                        </div>

                        <!-- // END Navbar Menu -->

                    </div>

                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <!-- Drawer Layout -->
                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">

                    <!-- Drawer Layout Content -->
                    <div class="mdk-drawer-layout__content page-content">

                        <div class="pt-32pt">
                            <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                                <div class="flex d-flex flex-column flex-sm-row align-items-center">

                                    <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                        <h2 class="mb-0">Course Progress</h2>

                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="./../index.php">Home</a></li>

                                            <li class="breadcrumb-item active">

                                                Course Progress

                                            </li>

                                        </ol>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container page__container page-section">
                            <div class="page-separator">
                                <div class="page-separator__text">Overview</div>
                            </div>

                            <div class="card mb-lg-32pt">
                                <div class="card-header d-flex align-items-center">
                                    <strong class="card-title">Progress</strong>
                                    <div class="flatpickr-wrapper flatpickr-calendar-right d-flex ml-auto">
                                        <div id="recent_orders_date"
                                             data-toggle="flatpickr"
                                             data-flatpickr-wrap="true"
                                             data-flatpickr-static="true"
                                             data-flatpickr-mode="range"
                                             data-flatpickr-alt-format="d/m/Y"
                                             data-flatpickr-date-format="d/m/Y">
                                            <a href="javascript:void(0)"
                                               class="link-date"
                                               data-toggle>13/03/2018 to 20/03/2018</a>
                                            <input class="d-none"
                                                   type="hidden"
                                                   value="13/03/2018 to 20/03/2018"
                                                   data-input>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-legend mt-0 mb-24pt justify-content-start"
                                         id="ordersChartLegend"></div>
                                    <div class="chart">
                                        <canvas id="ordersChart"
                                                class="chart-canvas js-update-chart-bar"
                                                data-chart-legend="#ordersChartLegend"
                                                data-chart-prefix=""
                                                data-chart-suffix=""
                                                data-chart-line-background-color="gradient:primary"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="page-separator">
                                <div class="page-separator__text">Course Progress</div>
                            </div>

                            <div class="card mb-0">
                                <div data-toggle="lists"
                                     data-lists-values='[
      "js-lists-values-course", 
      "js-lists-values-revenue",
      "js-lists-values-fees"
    ]'
                                     data-lists-sort-by="js-lists-values-revenue"
                                     data-lists-sort-desc="true"
                                     class="table-responsive">
                                    <table class="table table-nowrap table-flush">
                                        <thead>
                                            <tr class="text-uppercase small">
                                                <th>
                                                    <a href="javascript:void(0)"
                                                       class="sort"
                                                       data-sort="js-lists-values-course">Course</a>
                                                </th>
                                                <th class="text-center"
                                                    style="width:130px">
                                                    <a href="javascript:void(0)"
                                                       class="sort"
                                                       data-sort="js-lists-values-fees">Dropped</a>
                                                </th>
                                                <th class="text-center"
                                                    style="width:130px">
                                                    <a href="javascript:void(0)"
                                                       class="sort"
                                                       data-sort="js-lists-values-revenue">Completed</a>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="list">

                                            <tr>
                                                <td>
                                                    <div class="media flex-nowrap align-items-center">
                                                        <a href="instructor-edit-course.php"
                                                           class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                            <img src="./../Public/images/paths/angular_routing_200x168.png"
                                                                 alt="course"
                                                                 class="avatar-img rounded">
                                                            <span class="overlay__content"></span>
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="text-body js-lists-values-course"
                                                               href="instructor-edit-course.php"><strong>Angular Routing In-Depth</strong></a>
                                                            <div class="text-muted small">34 Progress</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-70">

                                                    <span class="js-lists-values-fees">120</span> 

                                                </td>
                                                <td class="text-center text-70">
                                                    <span class="js-lists-values-revenue">8,737</span> 
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media flex-nowrap align-items-center">
                                                        <a href="instructor-edit-course.php"
                                                           class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                            <img src="./../Public/images/paths/angular_testing_200x168.png"
                                                                 alt="course"
                                                                 class="avatar-img rounded">
                                                            <span class="overlay__content"></span>
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="text-body js-lists-values-course"
                                                               href="instructor-edit-course.php"><strong>Angular Unit Testing</strong></a>
                                                            <div class="text-muted small">38 Progress</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-70">

                                                    <span class="js-lists-values-fees sr-only">0</span>
                                                    <i class="material-icons text-muted">remove</i>

                                                </td>
                                                <td class="text-center text-70">
                                                    <span class="js-lists-values-revenue">2,521</span> 
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media flex-nowrap align-items-center">
                                                        <a href="instructor-edit-course.php"
                                                           class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                            <img src="./../Public/images/paths/typescript_200x168.png"
                                                                 alt="course"
                                                                 class="avatar-img rounded">
                                                            <span class="overlay__content"></span>
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="text-body js-lists-values-course"
                                                               href="instructor-edit-course.php"><strong>Introduction to TypeScript</strong></a>
                                                            <div class="text-muted small">8 Progress</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-70">

                                                    <span class="js-lists-values-fees sr-only">0</span>
                                                    <i class="material-icons text-muted">remove</i>

                                                </td>
                                                <td class="text-center text-70">
                                                    <span class="js-lists-values-revenue">1,413</span> 
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media flex-nowrap align-items-center">
                                                        <a href="instructor-edit-course.php"
                                                           class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                            <img src="./../Public/images/paths/angular_200x168.png"
                                                                 alt="course"
                                                                 class="avatar-img rounded">
                                                            <span class="overlay__content"></span>
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="text-body js-lists-values-course"
                                                               href="instructor-edit-course.php"><strong>Learn Angular Fundamentals</strong></a>
                                                            <div class="text-muted small">31 Progress</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-70">

                                                    <span class="js-lists-values-fees sr-only">0</span>
                                                    <i class="material-icons text-muted">remove</i>

                                                </td>
                                                <td class="text-center text-70">
                                                    <span class="js-lists-values-revenue">1,234</span> 
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot class="text-right">
                                            <tr>
                                                <td>

                                                    <ul class="pagination justify-content-start pagination-xsm m-0">
                                                        <li class="page-item disabled">
                                                            <a class="page-link"
                                                               href="#"
                                                               aria-label="Previous">
                                                                <span aria-hidden="true"
                                                                      class="material-icons">chevron_left</span>
                                                                <span>Prev</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                               href="#"
                                                               aria-label="Page 1">
                                                                <span>1</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                               href="#"
                                                               aria-label="Page 2">
                                                                <span>2</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link"
                                                               href="#"
                                                               aria-label="Next">
                                                                <span>Next</span>
                                                                <span aria-hidden="true"
                                                                      class="material-icons">chevron_right</span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <!-- <ul class="pagination justify-content-center pagination-sm">
  <li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true" class="material-icons">chevron_left</span>
      <span>Prev</span>
    </a>
  </li>
  <li class="page-item active">
    <a class="page-link" href="#" aria-label="1">
      <span>1</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="1">
      <span>2</span>
    </a>
  </li>
  <li class="page-item">   
    <a class="page-link" href="#" aria-label="Next">
      <span>Next</span>
      <span aria-hidden="true" class="material-icons">chevron_right</span>
    </a>
  </li>
</ul> -->
                                                </td>
                                                <td colspan="2">Total <i class="material-icons text-muted">remove</i> <strong>6,129 </strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->

                        <div class="bg-white border-top-2 mt-auto">
                            <div class="container page__container page-section d-flex flex-column">
                                <p class="text-70 brand mb-24pt">
                                    <img class="brand-icon"
                                         src="./../Public/images/logo/black-70%402x.png"
                                         width="30"
                                         alt="Online Classroom"> Online Classroom
                                </p>
                                <p class="measure-lead-max text-50 small mr-8pt">Online Classroom is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
                                <p class="mb-8pt d-flex">
                                    <a href="#"
                                       class="text-70 text-underline mr-8pt small">Terms</a>
                                    <a href="#"
                                       class="text-70 text-underline small">Privacy policy</a>
                                </p>
                                <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                            </div>
                        </div>

                        <!-- // END Footer -->

                    </div>
                    <!-- // END drawer-layout__content -->

                    <!-- Drawer -->

                    <div class="mdk-drawer js-mdk-drawer"
                         id="default-drawer">
                        <div class="mdk-drawer__content top-navbar">
                            <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left sidebar-p-t"
                                 data-perfect-scrollbar>

                                <!-- Sidebar Content -->

                                <div class="sidebar-heading">Instructor</div>
                                <ul class="sidebar-menu">

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-dashboard.php">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                            <span class="sidebar-menu-text">Instructor Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="instructor-courses.php">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                            <span class="sidebar-menu-text">Manage Courses</span>
                                        </a>
                                    </li>
                                    
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button"
                                           href="#">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                                            <span class="sidebar-menu-text">Track Course Progress</span>
                                        </a>
                                    </li>

                                </ul>

                                <!-- // END Sidebar Content -->

                            </div>
                        </div>
                    </div>

                    <!-- // END Drawer -->

                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END Header Layout Content -->

        </div>
        <!-- // END Header Layout -->

        <!-- jQuery -->
        <script src="./../Public/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="./../Public/vendor/popper.min.js"></script>
        <script src="./../Public/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="./../Public/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="./../Public/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="./../Public/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="./../Public/js/app.js"></script>

        <!-- Preloader -->
        <script src="./../Public/js/preloader.js"></script>

        <!-- Flatpickr -->
        <script src="./../Public/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="./../Public/js/flatpickr.js"></script>

        <!-- Global Settings -->
        <script src="./../Public/js/settings.js"></script>

        <!-- Chart.js -->
        <script src="./../Public/vendor/Chart.min.js"></script>
        <script src="./../Public/js/chartjs-rounded-bar.js"></script>
        <script src="./../Public/js/chartjs.js"></script>

        <!-- Chart.js Samples -->
        <script src="./../Public/js/page.instructor-earnings.js"></script>

        <!-- List.js -->
        <script src="./../Public/vendor/list.min.js"></script>
        <script src="./../Public/js/list.js"></script>

        <!-- App Settings (safe to remove) -->
        <!-- <script src="./../Public/js/app-settings.js"></script> -->
    </body>


</html>