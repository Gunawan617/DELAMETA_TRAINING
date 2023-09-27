<?php
  include 'koneksi.php';
  $data = query("SELECT * FROM tb_monitoring")[0];

// sesi start


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- theme meta -->
        <meta name="theme-name" content="quixlab"/>

        <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <!-- Pignose Calender -->
        <link
            href="./plugins/pg-calendar/css/pignose.calendar.min.css"
            rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
        <link
            rel="stylesheet"
            href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
        <!-- Custom Stylesheet -->
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
                            <div class="drop-down animated flipInX d-md-none">
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
                                    <span class="badge badge-pill gradient-1">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">3 New Messages</span>
                                        <a href="javascript:void()" class="d-inline-block">
                                            <span class="badge badge-pill gradient-1">3</span>
                                        </a>
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
                                    <span class="badge badge-pill gradient-2">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">2 New Notifications</span>
                                        <a href="javascript:void()" class="d-inline-block">
                                            <span class="badge badge-pill gradient-2">5</span>
                                        </a>
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
                                               
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                            
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
                            
                        </li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-graph menu-icon"></i>
                                <span class="nav-text">Login/Daftar</span>
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="./page-register.php">Register</a>
                                </li>
                                <li>
                                    <a href="./page-login.php">Login</a>
                                </li>

                            </ul>
                        </li>

                        <!-- Tentang -->

                        <a class="has-arrow" href="profil.php" aria-expanded="false">
                        <i class="icon-graph menu-icon"></i>
                        <span class="nav-text">Tentang</span>
                    </a>

                        
                        <!-- login -->
                    </li>
                </ul>
            </div>
        </div>
        <!--********************************** Sidebar end
        ***********************************-->

        <!--********************************** Content body start
        ***********************************-->
        <div class="content-body">

            <!-- content sensor -->
            <div class="load-data"></div>

            <div class="container-fluid mt-3">

                <!-- sensor -->
                <div class="card-body px-0 pb-2">
                    <!-- GRAFIK REALTIME 10 DATA -->
                    
                    <canvas id="chart-sensor" class="chart-canvas" height="370"></canvas>
                    
                </div>
                <div class="load-data1"></div>

                <!-- chart -->
                <div class="row" align="center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div id="switches"></div>
                            </div>
                        </div>
                    </div>
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
    <script src="js/script.js"></script>
    <script src="js/script1.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script
        src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>

    <!-- script baru -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function updateSwitchStatus(switchId, newStatus) {
            $.post("get-control1.php", {
                id: switchId,
                status: newStatus
            }, function (response) {
                loadSwitches();
            });
        }

        function loadSwitches() {
            $.get("update-control.php", function (data) {
                var switches = JSON.parse(data);
                var switchesHtml = "";
                switches.forEach(function (switchItem) {
                    var btnClass = switchItem.status == 1
                        ? "btn-success"
                        : "btn-danger";
                    var statusText = switchItem.status == 1
                        ? "NYALA"
                        : "MATI";
                    switchesHtml += `
                        <button class="btn ${btnClass} toggle-btn" data-switch-id="${switchItem.id}" data-status="${switchItem.status}">
                            ${switchItem.keterangan}
                            <span class="status-text"><br>  (Status: ${statusText})</span>
                        </button>
                    `;
                });
                $("#switches").html(switchesHtml);

                $(".toggle-btn").click(function () {
                    var switchId = $(this).data("switch-id");
                    var currentStatus = $(this).data("status");
                    updateSwitchStatus(switchId, 1 - currentStatus);
                });
            });
        }

        $(document).ready(function () {
            loadSwitches();
            setInterval(loadSwitches, 1000); // Poll every 3 seconds
        });
    </script>

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
</body>

</html>