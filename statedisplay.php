<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $id=$_POST['id'];
    $name=$_POST['name1'];
    $address=$_POST['address'];
$servername="localhost";
$username="root";
$password="";
$database="project1";

$conn=mysqli_connect($servername,$username,$password,$database);
    $sql= "INSERT INTO `counselling` (`id`, `name`,`address`) VALUES ('$id', '$name','$address')";
    $result= mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="home_css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<style>

</style>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="lion_logo.png">
                    <h2><span style="color: violet;">GOVT</span> OF <span style="color: orange;">IN</span><span
                            style="color: blueviolet;">DI</span><span style="color: green;">A</span></h2>
                </div>
                <div id="close-btn" class="close">
                    <span class="material-icons-sharp">close</span>

                </div>
            </div>
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>

                </a>
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>

                </a>
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Messages </h3><span class="message-count">26</span>

                </a>
                <a href="viewdata.html">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Viewdata</h3>

                </a>
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>

                </a>



                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>logout</h3>

                </a>
            </div>




        </aside>
        <!-- =========================================================start edit========================================== -->
        <main>

            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['geochart'],
                    });
                    google.charts.setOnLoadCallback(drawRegionsMap);

                    function drawRegionsMap() {
                        var data = google.visualization.arrayToDataTable([['State Code', 'State', 'Result'],
                        ]);

                        var options = {
                            region: 'IN', // Africa
                            colorAxis: { colors: ['#00853f', 'black', '#e31b23'] },
                            backgroundColor: '#81d4fa',
                            datalessRegionColor: '#f8bbd0',
                            defaultColor: '#f5f5f5',
                        };

                        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

                        chart.draw(data, options);
                    }
                </script>
                <main>
                    <h1>user </h1>



                </main>
                <div class="right">
                    <div class="top">
                        <button id="menu-btn">
                            <span class="material-icons-sharp">menu</span>
                        </button>
                        <div class="theme-toggler" id="themeToggler">
                            <span class="material-icons-sharp active">light_mode</span>
                            <span class="material-icons-sharp">dark_mode</span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <p>Hey, <b>Vaibhav</b></p>
                                <small class="text-muted">Admin</small>
                            </div>
                            <div class="profile-photo">
                                <img src="profile-2.jpg">
                            </div>
                        </div>

                    </div>
                    <!-- ============top===== -->
                    <div class="recent-updates">
                        <h2>Recent updates</h2>
                        <div class="updates">
                            <div class="update">
                                <div class="profile-photo">
                                    <img src="profile-2.jpg">
                                </div>
                                <div class="message">
                                    <p><b>Scheme 1</b> has made a huge progress and is able to profit many</p>
                                    <small class="text-muted">2 minutes ago</small>

                                </div>

                            </div>
                            <div class="update">
                                <div class="profile-photo">
                                    <img src="profile-2.jpg">
                                </div>
                                <div class="message">
                                    <p><b>Scheme 1</b> has made a huge progress and is able to profit many</p>
                                    <small class="text-muted">2 minutes ago</small>
                                </div>

                            </div>
                            <div class="update">
                                <div class="profile-photo">
                                    <img src="profile-2.jpg">
                                </div>
                                <div class="message">
                                    <p><b>Scheme 1</b> has made a huge progress and is able to profit many</p>
                                    <small class="text-muted">2 minutes ago</small>
                                </div>

                            </div>
                        </div>









                        <div class="sales-analytics">
                            <h2>sale analytics</h2>
                            <div class="item online">
                                <div class="icon"></div>
                                <span class="material-icons-sharp">
                                    shopping_cart
                                </span>
                                <div class="right">
                                    <div class="info">
                                        <h3>ONLINE ORDERS</h3>
                                        <small class="text-muted">Last 24 hours</small>
                                    </div>
                                    <h5 class="success">+39%</h5>
                                    <h3>3859</h3>
                                </div>
                            </div>






                            <div class="item offline">
                                <div class="icon"></div>
                                <span class="material-icons-sharp">
                                    local_mall
                                </span>
                                <div class="right">
                                    <div class="info">
                                        <h3>OFFLINE ORDERS</h3>
                                        <small class="text-muted">Last 24 hours</small>
                                    </div>
                                    <h5 class="danger">-19%</h5>
                                    <h3>652</h3>
                                </div>
                            </div>









                            <div class="item customers">
                                <div class="icon"></div>
                                <span class="material-icons-sharp">
                                    person
                                </span>
                                <div class="right">
                                    <div class="info">
                                        <h3>NEW customers</h3>
                                        <small class="text-muted">Last 24 hours</small>
                                    </div>
                                    <h5 class="success">+25%</h5>
                                    <h3>849</h3>
                                </div>
                            </div>







                        </div>




















                    </div>
                </div>

    </div>
    <script>
        const sidemenu = document.querySelector('aside');
        const menubtn = document.querySelector('#menu-btn');
        const closebtn = document.querySelector('#close-btn');
        menubtn.addEventListener('click', () => {
            sidemenu.style.display = "block"
        })
        closebtn.addEventListener('click', () => {
            sidemenu.style.display = "none"

        })
        const theme_toggler = document.querySelector('#themeToggler')
        var count = 0
        theme_toggler.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme-variables');
            theme_toggler.querySelector('span:nth-child(1)').classList.toggle('active');
            theme_toggler.querySelector('span:nth-child(2)').classList.toggle('active');

            if (count % 2 == 0) {
                drawChart1();
            } else {
                drawChart();
            }
            count++;

            function drawChart1() {

                var data = google.visualization.arrayToDataTable([
                    ['Year', 'dropout%', 'success rate%', 'literacy rate%'],
                    ['2014', 80, 20, 61.4],
                    ['2015', 70, 40, 72.3],
                    ['2016', 60, 54, 83.3],
                    ['2017', 33, 67, 81]
                ]);

                var options = {
                    'title': 'Education status',
                    hAxis: {
                        title: 'Percentage(%)',
                        textStyle: { color: '#FFF' }
                    },
                    vAxis: {
                        title: 'Year',
                        textStyle: { color: '#FFF' }
                    },
                    backgroundColor: "#202528",

                    chartArea: {
                        backgroundColor: "#202528"
                    },



                };




                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));

            }

        })
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

</body>

</html>