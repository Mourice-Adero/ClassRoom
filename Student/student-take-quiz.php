<?php
// Initialize the session
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION["student_id"])) {
    header("location: ./../login.php");
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
        <title>Quiz</title>

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
                                                        <span class="text-black-70">???? Superb job..</span>
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

                        <div class="navbar navbar-list navbar-light bg-white border-bottom-2 border-bottom navbar-expand-sm"
                             style="white-space: nowrap;">
                            <div class="container page__container">
                                <nav class="nav navbar-nav">
                                    <div class="nav-item navbar-list__item">
                                        <a href="student-take-course.php"
                                           class="nav-link h-auto"><i class="material-icons icon--left">keyboard_backspace</i> Back to Course</a>
                                    </div>
                                    <div class="nav-item navbar-list__item">
                                        <div class="d-flex align-items-center flex-nowrap">
                                            <div class="mr-16pt">
                                                <a href="student-take-course.php"><img src="./../Public/images/paths/angular_64x64.png"
                                                         width="40"
                                                         alt="Angular"
                                                         class="rounded"></a>
                                            </div>
                                            <div class="flex">
                                                <a href="student-take-course.php"
                                                   class="card-title text-body mb-0">Angular Fundamentals</a>
                                                <p class="lh-1 d-flex align-items-center mb-0">
                                                    <span class="text-50 small font-weight-bold mr-8pt">Elijah Murray</span>
                                                    <span class="text-50 small">Software Engineer and Developer</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <div class="bg-primary pb-lg-64pt py-32pt">
                            <div class="container page__container">
                                <nav class="course-nav">
                                    <a href="student-take-lesson.php"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Getting Started with Angular: Introduction"><span class="material-icons">check_circle</span></a>
                                    <a data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Getting Started with Angular: Introduction to TypeScript"
                                       href="student-take-lesson.php"><span class="material-icons">check_circle</span></a>
                                    <a data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Getting Started with Angular: Comparing Angular to AngularJS"
                                       href="student-take-lesson.php"><span class="material-icons">check_circle</span></a>
                                    <a href="student-take-quiz.php"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Quiz: Getting Started with Angular"><span class="material-icons text-primary">account_circle</span></a>
                                </nav>

                                <div class="d-flex flex-wrap align-items-end justify-content-end mb-16pt">
                                    <h1 class="text-white flex m-0">Question 1 of 5</h1>
                                    <p class="h1 text-white-50 font-weight-light m-0">00:14</p>
                                </div>

                                <p class="hero__lead measure-hero-lead text-white-50">An angular 2 project written in typescript is* transpiled to javascript duri*ng the build process. Which of the following additional features are provided to the developer while programming on typescript over javascript?</p>
                            </div>
                        </div>

                        <div class="navbar navbar-expand-md navbar-list navbar-light bg-white border-bottom-2 "
                             style="white-space: nowrap;">
                            <div class="container page__container">
                                <ul class="nav navbar-nav flex navbar-list__item">
                                    <li class="nav-item">
                                        <i class="material-icons text-50 mr-8pt">tune</i>
                                        Choose the correct answer below:
                                    </li>
                                </ul>
                                <div class="nav navbar-nav ml-sm-auto navbar-list__item">
                                    <div class="nav-item d-flex flex-column flex-sm-row ml-sm-16pt">
                                        <a href="#student-quiz-result-details.php"
                                           class="btn justify-content-center btn-outline-secondary w-100 w-sm-auto mb-16pt mb-sm-0">Skip Quiz</a>
                                        <a href="student-take-lesson.php"
                                           class="btn justify-content-center btn-outline-secondary w-100 w-sm-auto mb-16pt mb-sm-0 ml-sm-16pt">Review Video</a>
                                        <a href="student-quiz-result-details.php"
                                           class="btn justify-content-center btn-accent w-100 w-sm-auto mb-16pt mb-sm-0 ml-sm-16pt">Results <i class="material-icons icon--right">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container page__container">
                            <div class="page-section">
                                <div class="page-separator">
                                    <div class="page-separator__text">Your Answer</div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck01"
                                               type="checkbox"
                                               class="custom-control-input">
                                        <label for="customCheck01"
                                               class="custom-control-label">Ability to use newer syntax and offers reliability</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck02"
                                               type="checkbox"
                                               class="custom-control-input"
                                               checked="">
                                        <label for="customCheck02"
                                               class="custom-control-label">Compatibility</label>
                                    </div>
                                </div>
                                <div class="form-group mb-32pt mb-lg-48pt">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck03"
                                               type="checkbox"
                                               class="custom-control-input">
                                        <label for="customCheck03"
                                               class="custom-control-label">Usage of missing features</label>
                                    </div>
                                </div>

                                <p class="text-50 mb-0">Note: There can be multiple correct answers to this question.</p>
                            </div>
                        </div>
                        <div class="bg-primary pb-lg-64pt py-32pt">
                            <div class="container page__container">
                                <nav class="course-nav">
                                    <a href="student-take-lesson.php"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Getting Started with Angular: Introduction"><span class="material-icons">check_circle</span></a>
                                    <a data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Getting Started with Angular: Introduction to TypeScript"
                                       href="student-take-lesson.php"><span class="material-icons">check_circle</span></a>
                                    <a data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Getting Started with Angular: Comparing Angular to AngularJS"
                                       href="student-take-lesson.php"><span class="material-icons">check_circle</span></a>
                                    <a href="student-take-quiz.php"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       data-title="Quiz: Getting Started with Angular"><span class="material-icons text-primary">account_circle</span></a>
                                </nav>

                                <div class="d-flex flex-wrap align-items-end justify-content-end mb-16pt">
                                    <h1 class="text-white flex m-0">Question 2 of 5</h1>
                                    <p class="h1 text-white-50 font-weight-light m-0">00:14</p>
                                </div>

                                <p class="hero__lead measure-hero-lead text-white-50">An angular 2 project written in typescript is* transpiled to javascript duri*ng the build process. Which of the following additional features are provided to the developer while programming on typescript over javascript?</p>
                            </div>
                        </div>

                        <div class="navbar navbar-expand-md navbar-list navbar-light bg-white border-bottom-2 "
                             style="white-space: nowrap;">
                            <div class="container page__container">
                                <ul class="nav navbar-nav flex navbar-list__item">
                                    <li class="nav-item">
                                        <i class="material-icons text-50 mr-8pt">tune</i>
                                        Choose the correct answer below:
                                    </li>
                                </ul>
                                <div class="nav navbar-nav ml-sm-auto navbar-list__item">
                                    <div class="nav-item d-flex flex-column flex-sm-row ml-sm-16pt">
                                        <a href="#student-quiz-result-details.php"
                                           class="btn justify-content-center btn-outline-secondary w-100 w-sm-auto mb-16pt mb-sm-0">Skip Quiz</a>
                                        <a href="student-take-lesson.php"
                                           class="btn justify-content-center btn-outline-secondary w-100 w-sm-auto mb-16pt mb-sm-0 ml-sm-16pt">Review Video</a>
                                        <a href="student-quiz-result-details.php"
                                           class="btn justify-content-center btn-accent w-100 w-sm-auto mb-16pt mb-sm-0 ml-sm-16pt">Results <i class="material-icons icon--right">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container page__container">
                            <div class="page-section">
                                <div class="page-separator">
                                    <div class="page-separator__text">Your Answer</div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck01"
                                               type="checkbox"
                                               class="custom-control-input">
                                        <label for="customCheck01"
                                               class="custom-control-label">Ability to use newer syntax and offers reliability</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck02"
                                               type="checkbox"
                                               class="custom-control-input"
                                               checked="">
                                        <label for="customCheck02"
                                               class="custom-control-label">Compatibility</label>
                                    </div>
                                </div>
                                <div class="form-group mb-32pt mb-lg-48pt">
                                    <div class="custom-control custom-checkbox">
                                        <input id="customCheck03"
                                               type="checkbox"
                                               class="custom-control-input">
                                        <label for="customCheck03"
                                               class="custom-control-label">Usage of missing features</label>
                                    </div>
                                </div>

                                <p class="text-50 mb-0">Note: There can be multiple correct answers to this question.</p>
                            </div>
                        </div>


                        <!-- Footer -->

                        <div class="bg-white border-top-2 mt-auto">
                            <div class="container page__container page-section d-flex flex-column">
                                <p class="text-70 brand mb-24pt">
                                    <img class="brand-icon"
                                         src="./../Public/images/logo/black-70%402x.png"
                                         width="30"
                                         alt="Luma">Online Classroom
                                </p>
                                <p class="measure-lead-max text-50 small mr-8pt">Online Classroom is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard and more.</p>
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

        <!-- App Settings (safe to remove) -->
        <!-- <script src="./../Public/js/app-settings.js"></script> -->
    </body>

</html>