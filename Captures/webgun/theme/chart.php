<?php 

   //Simpan dengan nama file panel.php
     require "koneksi.php";
     $data = query("SELECT * FROM tb_monitoring")[0];

//    start
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: page-login.php");
    exit();
}
     
 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
        <link
            rel="stylesheet"
            href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

        <!--******************* Preloader start ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewbox="25 25 50 50">
                    <circle
                        class="path"
                        cx="50"
                        cy="50"
                        r="20"
                        fill="none"
                        stroke-width="3"
                        stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <!--******************* Preloader end ********************-->

        <!--********************************** Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--********************************** Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.php">
                        <b class="logo-abbr"><img src="images/logo.png" alt="">
                        </b>
                        <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                        <span class="brand-title">
                            <img src="images/logo-text.png" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!--********************************** Nav header end
            ***********************************-->

            <!--********************************** Header start
            ***********************************-->
            <div class="header">
                <div class="header-content clearfix">

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon">
                                <i class="icon-menu"></i>
                            </span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">
                                <span
                                    class="input-group-text bg-transparent border-0 pr-2 pr-sm-3"
                                    id="basic-addon1">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input
                                type="search"
                                class="form-control"
                                placeholder="Search Dashboard"
                                aria-label="Search Dashboard">
                            <div class="drop-down   d-md-none">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="clearfix">
                            <li class="icons dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="badge gradient-1 badge-pill badge-primary">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">3 New Messages</span>

                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Saiful Islam</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Adam Smith</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Can you do me a favour?</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Barak Obama</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Hilari Clinton</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hello</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-pill gradient-2 badge-primary">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">2 New Notifications</span>

                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-success-lighten-2">
                                                        <i class="icon-present"></i>
                                                    </span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Events near you</h6>
                                                        <span class="notification-text">Within next 5 days</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-danger-lighten-2">
                                                        <i class="icon-present"></i>
                                                    </span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Event Started</h6>
                                                        <span class="notification-text">One hour ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-success-lighten-2">
                                                        <i class="icon-present"></i>
                                                    </span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Event Ended Successfully</h6>
                                                        <span class="notification-text">One hour ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-danger-lighten-2">
                                                        <i class="icon-present"></i>
                                                    </span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Events to Join</h6>
                                                        <span class="notification-text">After two days</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown d-none d-md-flex">
                                <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                    <span>English</span>
                                    <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                                </a>
                                <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="javascript:void()">English</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">Dutch</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="images/user/1.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile   dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="app-profile.html">
                                                    <i class="icon-user"></i>
                                                    <span>Profile</span></a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">
                                                    <i class="icon-envelope-open"></i>
                                                    <span>Inbox</span>
                                                    <div class="badge gradient-3 badge-pill badge-primary">3</div>
                                                </a>
                                            </li>

                                            <hr class="my-2">
                                            <li>
                                                <a href="page-lock.html">
                                                    <i class="icon-lock"></i>
                                                    <span>Lock Screen</span></a>
                                            </li>
                                            <li>
                                                <a href="logout.php">
                                                    <i class="icon-key"></i>
                                                    <span>Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--********************************** Header end ti-comment-alt
            ***********************************-->

            <!--********************************** Sidebar start
            ***********************************-->
            <div class="nk-sidebar">
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Dashboard</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./index.php">Home 1</a>
                                </li>
                                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            </ul>

                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-graph menu-icon"></i>
                                <span class="nav-text">Charts</span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./chart.php">Charts</a>
                                </li>

                            </ul>
                        </li>

                        <!-- </ul> </li> <li> <a class="has-arrow" href="javascript:void()"
                        aria-expanded="false"> <i class="icon-layers menu-icon"></i><span
                        class="nav-text">Components</span> </a> <ul aria-expanded="false"> -->

                        <li class="nav-label">Table</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-menu menu-icon"></i>
                                <span class="nav-text">Table</span>
                            </a>
                            <ul aria-expanded="false">

                                <li>
                                    <a href="./table-datatable.php" aria-expanded="false">Data Table</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--********************************** Sidebar end
    ***********************************-->

    <!--********************************** Content body start
    ***********************************-->
    <div class="container-fluid">
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="load-data"></div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-pink">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <!-- GRAFIK 1 -->
                                    <canvas id="chart-sensor1" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">
                                Grafik Ultrasonik</h6>
                            <p class="text-sm ">5 data realtime grafik</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">
                                    <?=$data["waktu"];?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-pink">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <!-- GRAFIK 2 -->
                                    <canvas id="chart-sensor2" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">
                                Grafik LDR
                            </h6>
                            <p class="text-sm ">
                                5 data realtime grafik.
                            </p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">
                                    <?=$data["waktu"];?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-pink">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <!-- GRAFIK 3 -->
                                    <canvas id="chart-sensor3" class="chart-canvas" height="170"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">
                                Grafik Flame</h6>
                            <p class="text-sm ">5 data realtime grafik.</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm"><?=$data["waktu"];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">

                    <div class="card-body px-0 pb-2">
                        <!-- GRAFIK REALTIME 10 DATA -->
                        <canvas id="chart-sensor" class="chart-canvas" height="370"></canvas>
                    </div>

                </div>
                <!-- #/ container -->
            </div>
            <!--********************************** Content body end
            ***********************************-->

            <!--********************************** Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by
                        <a href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div>
            <!--********************************** Footer end
            ***********************************-->
        </div>
        <!--********************************** Main wrapper end
        ***********************************-->

        <!--********************************** Scripts
        ***********************************-->

        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>

        <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
        <script src="./js/plugins-init/chartjs-init.js"></script>
        <!-- Core JS Files -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/script.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="assets/js/plugins/chartjs.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            function fetchData() {
                $.ajax({
                    url: 'aksigrafik.php', // Ganti dengan alamat URL yang sesuai
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        // Memperbarui data grafik myChart.data.labels = data.labels;
                        myChart1.data.labels = data.labels;
                        myChart2.data.labels = data.labels;
                        myChart3.data.labels = data.labels;
                        myChart1
                            .data
                            .datasets[0]
                            .data = data.values1;
                        myChart2
                            .data
                            .datasets[0]
                            .data = data.values2;
                        myChart3
                            .data
                            .datasets[0]
                            .data = data.values3;
                        // myChart.data.datasets[0].data = data.values1; myChart.data.datasets[1].data =
                        // data.values2; myChart.data.datasets[2].data = data.values3; myChart.update();
                        myChart1.update();
                        myChart2.update();
                        myChart3.update();
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            var ctx = document
                .getElementById("chart-sensor1")
                .getContext("2d");

            var myChart1 = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "Sensor Ultrasonik",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(255, 255, 255, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "rgba(255, 255, 255, .8)",
                            data: [],
                            maxBarThickness: 6
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [
                                    5, 5
                                ],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [
                                    5, 5
                                ],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                }
                            }
                        }
                    }
                }
            });

            var ctx2 = document
                .getElementById("chart-sensor2")
                .getContext("2d");

            var myChart2 = new Chart(ctx2, {
                type: "line",
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "Sensor LDR",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(255, 255, 255, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            data: [],
                            maxBarThickness: 6

                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [
                                    5, 5
                                ],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                }
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                }
                            }
                        }
                    }
                }
            });

            var ctx3 = document
                .getElementById("chart-sensor3")
                .getContext("2d");

            var myChart3 = new Chart(ctx3, {
                type: "line",
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "Sensor Flame",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(255, 255, 255, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(255, 255, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "transparent",
                            fill: true,
                            data: [],
                            maxBarThickness: 6

                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [
                                    5, 5
                                ],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#f8f9fa',
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                }
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                }
                            }
                        }
                    }
                }
            });

            setInterval(fetchData, 1000);
        </script>

        <script>
            function fetchData() {
                $.ajax({
                    url: 'aksigrafikfull.php', // Ganti dengan alamat URL yang sesuai
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        // Menggabungkan ketiga dataset menjadi satu
                        myChart.data.labels = data.labels;
                        myChart
                            .data
                            .datasets[0]
                            .data = data.values1;
                        myChart
                            .data
                            .datasets[1]
                            .data = data.values2;
                        myChart
                            .data
                            .datasets[2]
                            .data = data.values3;
                        myChart.update();
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            var ctx = document
                .getElementById("chart-sensor")
                .getContext("2d");

            var myChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: "Sensor Ultrasonik",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(0, 0, 0, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(0, 255, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "rgba(255, 255, 255, .8)",
                            data: [],
                            maxBarThickness: 6
                        }, {
                            label: "Sensor LDR",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(0, 0, 0, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(255, 0, 0, .8)",
                            borderWidth: 4,
                            backgroundColor: "rgba(255, 255, 255, .8)",
                            data: [],
                            maxBarThickness: 6
                        }, {
                            label: "Sensor Flame",
                            tension: 0,
                            borderWidth: 0,
                            pointRadius: 5,
                            pointBackgroundColor: "rgba(0, 0, 0, .8)",
                            pointBorderColor: "transparent",
                            borderColor: "rgba(0, 0, 255, .8)",
                            borderWidth: 4,
                            backgroundColor: "rgba(255, 255, 255, .8)",
                            data: [],
                            maxBarThickness: 6
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: "index"
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [
                                    5, 5
                                ],
                                color: "rgba(0, 0, 0, .2)"
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: "normal",
                                    lineHeight: 2
                                },
                                color: "rgba(0, 0, 0, .8)"
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [
                                    5, 5
                                ],
                                color: "rgba(0, 0, 0, .2)"
                            },
                            ticks: {
                                display: true,
                                color: "rgba(0, 0, 0, .8)",
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: "normal",
                                    lineHeight: 2
                                }
                            }
                        }
                    }
                }
            });

            setInterval(fetchData, 1000);
        </script>
        <script>
            var win = navigator
                .platform
                .indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

    </body>

</html>