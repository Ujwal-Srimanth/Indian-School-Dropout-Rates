<?php include "db.php";?>
<?php session_start(); ?>
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
                <a href="home.php" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Home</h3>

                </a>
                <a href="messages.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Messages </h3><span class="message-count">26</span>

                </a>
                <a href="viewdata.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>State_data</h3>

                </a>
                <a href="conseller.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>student_data</h3>

                </a>
                <a href="studentsdata.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Institute_data</h3>

                </a>



                <a href="login.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>logout</h3>

                </a>
            </div>




        </aside>
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Literacy percentage</h3>
                            <h1>72%</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36">


                                </circle>
                            </svg>
                            <div class="number">
                                <p>68%</p>
                            </div>
                        </div>

                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <div class="expenses">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Drop out rate</h3>
                            <h1>31%</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36">


                                </circle>
                            </svg>
                            <div class="number">
                                <p>86%</p>
                            </div>
                        </div>

                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <div class="income">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Success rate</h3>
                            <h1>86%</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36">


                                </circle>
                            </svg>
                            <div class="number">
                                <p>86%</p>
                            </div>
                        </div>

                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


            </div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                var r = document.querySelector(':root');
                google.charts.load('current', { 'packages': ['bar'] });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        <?php
            $query="select * from barchart";
            $res=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($res)){
              $year=$data['year'];
              $sale=$data['sale'];
              $expenses=$data['expenses'];
              $profit=$data['profit'];
           ?>
           ['<?php echo $year;?>',<?php echo $sale;?>,<?php echo $expenses;?>,<?php echo $profit;?>],   
           <?php   
            }
           ?> 
                    ]);

                    var options = {
                        'title': 'Education status',
                        hAxis: {
                            title: 'Year'
                        },
                        vAxis: {
                            title: 'Percentage(%)'
                        },


                    };

                    ;

                    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                    chart.draw(data, google.charts.Bar.convertOptions(options));

                }
            </script>
            <div class="graph_plotter">
                <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
            </div>

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
                        <p>Hey, <b>
                       
                        </b>
                    </p>
                        <small class="text-muted">Admin<b>
                        <?php
                     
if(isset($_SESSION['name1'])) {

    
    echo  $_SESSION["name1"] ;
}
                       ?>

                        </b></small>
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
                            <img src="p.jpeg">
                        </div>
                        <div class="message">
                            <p><b></b>Beti Bachao Beti Padhao</p>
                                    <small class="text-muted">create a more equitable and inclusive society for girls and women.</small>
                                    <small class="text-muted">30 minutes ago</small>
                        </div>
                        
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="p.jpeg">
                        </div>
                        <div class="message">
                            <p><b></b>Rashtriya Madhyamik Shiksha Abhiyan</p>
                                    <small class="text-muted">promote equity in education and provide young people with the skills and knowledge </small>
                                    <small class="text-muted">45 minutes ago</small>
                        </div>
                        
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="p.jpeg">
                        </div>
                        <div class="message">
                            <p><b></b>Scheme of Apprenticeship Training</p>
                            <small class="text-muted">young people for successful careers and contribute to the overall development of the economy.</small>
                            <small class="text-muted">5 hours ago</small>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="sales-analytics">
                    <h2>Upcoming Schemes</h2>
                    <div class="item online">
                        <div class="icon"></div>
                        <span class="material-symbols-sharp">
                            schedule
                            </span>
                        <div class="right">
                            <div class="info">
                                <h3>Shiksha Sahayog Yojana</h3>
                                <small class="text-muted">provides financial assistance to students from low-income families to help them afford the cost of education and improve their access to quality education.
                                </small>
                            </div>
                            <h5 class="success"></h5>
                            <h3></h3>
                        </div>
                    </div>
                    
        
        
        
        
        
                    <div class="item offline">
                        <div class="icon"></div>
                        <span class="material-symbols-sharp">
                            cast_for_education
                            </span>
                        <div class="right">
                            <div class="info">
                                <h3>Saakshar Shiksha Abhiyan</h3>
                                <small class="text-muted">improve the literacy rates among adults, particularly women, and promote lifelong learning opportunities.</small>
                            </div>
                            <h5 class="danger"></h5>
                            <h3></h3>
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
                    ['Year', 'dropout', 'successrate', 'literacyrate'],
                    <?php
            $query="select * from barchart";
            $res=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($res)){
              $year=$data['year'];
              $sale=$data['successrate'];
              $expenses=$data['literacyrate'];
              $profit=$data['dropoutrate'];
           ?>
           ['<?php echo $year;?>',<?php echo $sale;?>,<?php echo $expenses;?>,<?php echo $profit;?>],   
           <?php   
            }
           ?> 
                ]);

                var options = {
                    'title': 'Education status',
                    hAxis: {
                        title: 'Year',
                        textStyle: { color: '#FFF' }
                    },
                    vAxis: {
                        title: 'Percentage(%)',
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
    </script>

</body>

</html>