
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="home_css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    .Uday {
        position: absolute;
        top: 500px;
        left: 400px;
        font-size: 50px;
        font-weight: bolder;
    }

    .Uday1 {
        position: absolute;
        top: 580px;
        left: 650px;
        font-size: 70px;
        font-weight: bolder;
        color: red;
    }
    .con{
        padding: 20px;
        border-radius: 10px;
        background-color: white;
        box-shadow:0.5rem 0.2rem 2rem rgb(49, 45, 45) ;
        overflow: hidden;
        transition:all 300ms ease ;
    }
    .con:hover{
        box-shadow: none;
    }
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
                <a href="userhome.html" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Home</h3>

                </a>
                <a href="lecturematerials.php"  >
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Lecture materials</h3>

                </a>
                <a href="lecturevideos.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Lecture videos</h3>

                </a>
                <a href="test.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Take test</h3>

                </a>
                <a href="askdoubt.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Ask doubt</h3>

                </a>



                <a href="login.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>logout</h3>

                </a>
            </div>




        </aside>
        <main>
            <div class="con">
                <img src="https://blog.teachmint.com/content/images/2021/11/Motivation-Blog-Image.jpg" class="uk"
                    height="400" style="border-radius: 10px;">
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
                        <p>Hey, <b>User</b></p>
                        <small class="text-muted">User</small>
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
                <p class="Uday">
                    Lets Resume
                </p>
                <p class="Uday1">
                    Learning
                </p>




















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
    </script>

</body>

</html>