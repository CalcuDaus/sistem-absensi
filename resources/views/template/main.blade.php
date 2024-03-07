<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dasify</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/dasify.css" />
    <link rel="shortcut icon" href="assets/img/tes.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <aside id="sidebar">
        <div class="logo d-flex align-items-end">
            <img src="assets/img/dasify-logo.png" alt="" width="100px" />
            <p class="text-light fw-bold t-logo">asify</p>
        </div>
        <nav class="mt-5">
            <ul class="menu-sidebar">
                <!-- S: Dashboard -->
                <li class="nav-btn nav-btn-active">
                    <img src="assets/img/icons-home.png" width="22px" alt="" />
                    <a href="index.html">Dashboard</a>
                </li>
                <!-- E: Dashboard -->
                <!-- S: Report -->
                <li class="nav-btn drop-nav c-pointer d-flex flex-column justify-content-start align-items-start">
                    <div class="">
                        <img src="assets/img/icons-report.png" width="22px" alt="" />
                        <a href="#" class="btn-dropdown">Report </a>
                    </div>
                    <i class="fa-solid fa-less-than less-than"></i>
                    <div class="dropdown-sidebar mt-2 ms-1 d-flex flex-column">
                        <ul>
                            <li class="mt-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Overall</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Sale Report</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Report</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- E: Report -->
                <!-- S: Layout -->
                <li class="nav-btn drop-nav c-pointer d-flex flex-column justify-content-start align-items-start">
                    <div class="">
                        <img src="assets/img/icons-grid.png" width="22px" alt="" />
                        <a href="#" class="btn-dropdown">Layouts </a>
                    </div>
                    <i class="fa-solid fa-less-than less-than"></i>
                    <div class="dropdown-sidebar mt-2 ms-1 d-flex flex-column">
                        <ul>
                            <li class="mt-2">
                                <a href="form-layout.html" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Form Layout</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Grid Layout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- E: Layout -->
                <!-- S: Table -->
                <li class="nav-btn drop-nav c-pointer d-flex flex-column justify-content-start align-items-start">
                    <div class="">
                        <i class="fa-solid fa-table fa-lg"></i>
                        <a href="#" class="btn-dropdown">Tables </a>
                    </div>
                    <i class="fa-solid fa-less-than less-than"></i>
                    <div class="dropdown-sidebar mt-2 ms-1 d-flex flex-column">
                        <ul>
                            <li class="mt-2">
                                <a href="tables.html" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Tables</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a href="data-table.html" class="d-flex align-items-center">
                                    <i class="fa-solid fa-crosshairs pe-2"></i>
                                    <span>Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- E: Table -->
                <!-- S: Setting -->
                <li class="nav-btn setting">
                    <img src="assets/img/icons-setting.png" width="22px" alt="" />
                    <a href="javascript:void(0);">Setting</a>
                </li>
                <!-- E: Setting -->
                <li class="nav-btn c-pointer btn-shorten">
                    <i class="fa-solid fa-arrow-left"></i>
                </li>
            </ul>
        </nav>
    </aside>
    <main id="main">
        <header class="d-flex w-100 justify-content-between align-items-center">
            <div class="img-left d-flex justify-content-center align-items-center">
                <img src="assets/img/hamburger-icon.jpg" alt="" class="hamburger-icon icon-img" />
                <h4 class="ms-4 mt-2 company-name">Company Name</h4>
            </div>
            <div class="container-header d-flex">
                <div class="search">
                    <img src="assets/img/icons-search.png" class="ms-4 search-img icon-img" alt="" />
                    <input type="text" autofocus placeholder="search.." class="search-field" />
                </div>
                <div class="notif">
                    <img src="assets/img/icons-notification.png" class="ms-4 icon-img" alt="" />
                    <div class="notif-count">2</div>
                    <div class="container-notif">
                        <div class="container">
                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-7">
                                    <p class="fs-8">4 New Messages</p>
                                </div>
                                <div class="col-3">
                                    <p class="fs-7">3 mins</p>
                                </div>
                            </div>
                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-7">
                                    <p class="fs-8">4 New Messages</p>
                                </div>
                                <div class="col-3">
                                    <p class="fs-7">3 mins</p>
                                </div>
                            </div>
                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-7">
                                    <p class="fs-8">4 New Messages</p>
                                </div>
                                <div class="col-3">
                                    <p class="fs-7">3 mins</p>
                                </div>
                            </div>
                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-7">
                                    <p class="fs-8">4 New Messages</p>
                                </div>
                                <div class="col-3">
                                    <p class="fs-7">3 mins</p>
                                </div>
                            </div>
                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-7">
                                    <p class="fs-8">4 New Messages</p>
                                </div>
                                <div class="col-3">
                                    <p class="fs-7">3 mins</p>
                                </div>
                            </div>

                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="col-7">
                                    <p class="fs-8">4 New Messages</p>
                                </div>
                                <div class="col-3">
                                    <p class="fs-7">3 mins</p>
                                </div>
                            </div>
                            <div class="row li-notif d-flex justify-content-center pt-3 pb-3 align-items-center">
                                <div class="col">
                                    <p class="fs-8">Show All Notification</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-theme ms-3">
                    <button>
                        <i class="fa-solid fa-circle-half-stroke icon-img"></i>
                    </button>
                </div>
                <div class="profile">
                    <img src="assets/img/daus.png" alt="" class="ms-4 profile-img" />
                    <div class="container-profile">
                        <div class="container">
                            <div class="row pt-2 pb-2 li-notif">
                                <div class="col fs-8">
                                    <i class="fa-solid fa-user pe-2"></i> Info Akun
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 li-notif">
                                <div class="col fs-8">
                                    <i class="fa-solid fa-right-from-bracket pe-2"></i> logout
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <hr id="hr" />
        <div class="content">
            @yield('content')
            <footer>
                <p>
                    &copy; Dasify, Inc. All Rights Reserved.
                    <a target="_blank" class="text-cyan" href="https://instagram.com/e.about.us">Muhammad Firdaus</a>
                </p>
            </footer>
        </div>
    </main>
    <div class="wrapper-loader">
        <span class="loader"></span>
        <span class="text-loader">Sabar Ngab...</span>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/main-chart.js"></script>
</body>

</html>