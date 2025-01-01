<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="home_css.css">
</head>

<style>
    .accordion {
        background-color: rgb(242, 229, 229);
        color: rgb(9, 99, 209);
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
        border-radius: 10px;


    }

    .accordion>span {
        display: inline-block;
        margin-right: 2rem;
    }

    .jacobian {
        margin-top: 8rem;
        margin-left: 30px;
        width: 90% !important;
    }

    .active,
    .accordion:hover {
        background-color: rgb(208, 231, 215);
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        margin-top: 1rem;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        border-radius: 10px;




    }

    .profile-photo {
        margin-top: 5px;
        margin-left: 5px !important;
        margin-right: 20px !important;
        margin-bottom: 5px;
    }

    .panel>.textdata {
        color: black;
        font-size: medium;
        font-weight: 500;
        display: flex;
        margin-left: 5px;
        padding: 15px;
        border-radius: 10px;
    }

    .accordion:after {
        content: '\02795';
        /* Unicode character for "plus" sign (+) */
        font-size: 13px;
        color: rgb(90, 81, 81) !important;
        float: right;
        margin-left: 5px;
    }

    main .active:after {
        content: "\2796";
        /* Unicode character for "minus" sign (-) */
    }

    .textdata {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .textdata>button {
        border-radius: 15px;
        padding: 10px;
        background-color: rgb(66, 66, 233);
        color: white;
        border: none;

    }

    button>a {
        color: white !important;
    }

    .textdata>button:hover {
        transform: translate(1.02);
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
                <a href="userhome.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Home</h3>

                </a>
                <a href="lecturematerials.php" class="active" >
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
        <!-- =========================================================start edit========================================== -->
        <main>

            <div class="jacobian">
                <h2 style="margin-bottom: 8px;"></span></h2>
                

                <button class="accordion">Class X</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-10/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-10/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-10/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class IX</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-9/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-9/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-9/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class VIII</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class VII</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class VI</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class V</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class IV</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class III</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div><button class="accordion">Class II</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="https://byjus.com/ncert-books-for-class-1/">Maths</a></button>
                        <button value="chemistry"><a href="https://byjus.com/ncert-books-for-class-1/">chemistry</a></button>
                        <button value="physics"><a href="https://byjus.com/ncert-books-for-class-1/">Physics</a></button>




                    </div>
                </div>
                <button class="accordion">Class I</button>
                <div class="panel">
                    <div class="textdata">

                        <button value="maths"><a href="">Maths</a></button>
                        <button value="chemistry"><a href="">chemistry</a></button>
                        <button value="physics"><a href="">Physics</a></button>




                    </div>
                </div>

            </div>
            <!-- <=======================end edit=====================================================> -->
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