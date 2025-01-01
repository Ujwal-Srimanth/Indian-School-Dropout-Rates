<?php session_start();?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $state=$_POST['state'];
    $year=$_POST['year'];
    $total=$_POST['total'];
    $totals=$_POST['totals'];
    $drop=$_POST['drop'];
    $litreacy=$_POST['litreacy'];
$servername="localhost";
$username="root";
$password="";
$database="project1";

$conn=mysqli_connect($servername,$username,$password,$database);
    $sql= "INSERT INTO `statedata`(`state`, `year`, `total_number_of_students`, `total_number_of_schools`, `drop_out_rate`, `litreacy_rate`) VALUES ('$state','$year','$total','$totals','$drop','$litreacy')";
    $result= mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="home_css.css">
    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
    </script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
  

    .table_container_class {
        display: flex;
        margin: auto;
        margin-top: 25px;

        justify-content: center;
        align-items: center;
        transition: all 300ms ease;


    }




    .display {
        border-collapse: collapse;
        margin: 25px 0;
        border-top: 5px;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        width: 70%;
        transition: all 300ms ease;
    }

    .display thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;

    }

    .display th,
    .display td {
        padding: 12px 15px;
    }

    .display tbody tr {
        border-bottom: thin solid #dddddd;
    }

    #checkbox_a {
        display: none;
    }

    .display tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .display tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    tr {
        height: 38px;
    }

    #tableID_filter {
        margin-bottom: 30px;
    }

    #tableID_paginate {
        margin-top: 15px;
    }

    #tableID_filter input {
        width: 400px;
        margin-left: 10px;
        margin-right: 7px;
        border-radius: 5px;
        height: 35px;
        font-size: large;
    }

    #tableID_filter {

        color: #065142;
        font-size: large;
    }

    #tableID_length label {
        color: #065142;
        font-size: large;
    }

    #tableID_length select {
        width: 60px;
        margin-left: 10px;
        margin-right: 7px;
        border-radius: 5px;

    }

    .buttonclass {
        margin: 0 auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        padding: 20px;
        background-color: white !important;
        display: flex;
        justify-content: flex-start;
        margin-left: 14%;
        margin-right: 14%;
        align-items: center;
        margin-top: 60px;
        transition: all 300ms ease;

    }

    .b1 {
        padding: 8px;

        margin-right: 10px;
        background-color: #009879;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .b2 {
        padding: 8px;

        margin-right: 10px;
        background-color: #e43a3a;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .b3 {
        padding: 10px;

        margin-right: 10px;
        background-color: #256be4;
        color: white;
        border: none;
        border-radius: 5px;
        position: relative;
        left: 40%;
    }

    .insertvalues {
        margin: 0 auto;

        padding: 20px;
        display: flex;
        justify-content: flex-start;
        background-color: white !important;
        margin-left: 14%;
        margin-right: 14%;
        margin-top: 5px;
        align-items: flex-start;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        display: none;
        color: black;
        -prefix-animation: slide 1s ease 3.5s forwards;
        


    }
    @-prefix-keyframes slide {
  from {height: 0;}
  to {height: 300px;}
}

    .insertvalues >div{
        display: inline-flex;
        justify-content: flex-start;
        align-items: flex-start;
        margin-top: 10px;
    }
   
    
</style>
<script>

    /* Initialization of datatable */
    $(document).ready(function () {
        $('#tableID').DataTable({
            info: false, aaSorting: [],
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [0] },
                { "bSearchable": false, "aTargets": [0] }
            ]
        });
    });
</script>
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");

        filter = input.value.toUpperCase();
        table = document.getElementById("tableID");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "block";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function kliendikaartF() {
        var checkBox = document.getElementById("kaartCheck");
        var elms = document.querySelectorAll("[id='checkbox_appearer']");
        console.log(elms)
        if (checkBox.checked == true) {
            for (var i = 0; i < elms.length; i++) {
                elms[i].checked = true;
            }
        } else {
            for (var i = 0; i < elms.length; i++) {
                elms[i].checked = false;
            }
        }
    }
    var count = 0
    function show_dissapear() {
        var elmen = document.querySelectorAll("[id='checkbox_appearer']");
        var elms = document.querySelectorAll("[id='checkbox_a']");
        for (var i = 0; i < elmen.length; i++) {
            elmen[i].checked = false;
        }
        if (count == 0) {
            for (var i = 0; i < elms.length; i++) {

                elms[i].style.display = "block"

            }

            count++
        } else {
            for (var i = 0; i < elms.length; i++) {

                elms[i].style.display = "none"


            }
            count--

        }
    }
    function deleteMoreRows() {
        var elms = document.querySelectorAll("[id='checkbox_appearer']");
        table = document.getElementById('tableID')
        console.log(count)
        if (count != 0) {
            if (confirm("Are you sure you want to delete this record")) {
                for (var i = 0; i < elms.length; i++) {

                    if (elms[i].checked == true) {
                        console.log(i)
                        table.deleteRow(i + 1)
                        elms[i] = elms[i] - 1
                    }




                }
            }
        }


    }
    var state = document.getElementById('txtst')
    var year = document.getElementById('txtyear')
    var students = document.getElementById('txtstudents')
    var schools = document.getElementById('txtschools')
    var dropout = document.getElementById('txtdrop')
    var lit = document.getElementById('txtliteracy')
    divid = document.getElementById('insertvaluesid')

    var newcount = 0
    function addmorevalues() {

        if (newcount == 0) {
            divid.style.display = "block"
            state.value = ""
            year.value = ""
            students.value = ""
            schools.value = ""
            dropout.value = ""
            lit.value = ""
            newcount++
        } else {
            divid.style.display = "none"
            newcount--
        }

    }

    function CreateTable() {

        if (state.value == "" || year.value == "" || students.value == "" || schools.value == "" || dropout.value == "" || lit.value == "") {
            alert("please do not enter null values")

        } else {
            var table = document.getElementById("tableID");
            var row = table.insertRow(2);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var inserter = state.value;
            var tocaser = inserter.toUpperCase(); 
            cell1.innerHTML = tocaser;
            cell2.innerHTML = year.value;
            cell3.innerHTML = students.value;
            cell4.innerHTML = schools.value;
            cell5.innerHTML = dropout.value;
            cell6.innerHTML = lit.value;
            state.value = ""
            year.value = ""
            students.value = ""
            schools.value = ""
            dropout.value = ""
            lit.value = ""
        }




    }
    // function sortbyvalue() {
    //     var select = document.getElementById('state_search');
    //     var text = select.options[select.selectedIndex].text;
    //     var select1 = document.getElementById('year_search');
    //     var text1 =select1.options[select1.selectedIndex].text;
    //     console.log(text1)
        
        
    //     // Declare variables
        
    //     if (text == "none" && text1 == "none"){

    //         for (i = 0; i < tr.length; i++) {
    //         tr[i].style.display ="block"
            
        
    //     }
    

    //     }else if (text1 == "none"){
    //         filter = text.toUpperCase();
    //     table = document.getElementById("tableID");
    //     tr = table.getElementsByTagName("tr");
    //     console.log(filter)

    //     // Loop through all table rows, and hide those who don't match the search query
    //     for (i = 0; i < tr.length; i++) {
    //         td = tr[i].getElementsByTagName("td")[1];
    //         if (td) {
    //             txtValue = td.textContent || td.innerText;
    //             if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //                 tr[i].style.display = "block";
    //             } else {
    //                 tr[i].style.display = "none";
    //             }
    //         }
    //     }
            
    //     }
    // }
        
        
    

    











</script>
<body>
    <div class="container">
        <aside>
        <div class="top">
            <div class="logo">
                <img src="lion_logo.png" >
                <h2><span style="color: violet;">GOVT</span> OF <span style="color: orange;">IN</span><span style="color: blueviolet;">DI</span><span style="color: green;">A</span></h2>
            </div>
            <div id="close-btn" class="close">
                <span class="material-icons-sharp">close</span>

            </div>
        </div>
        <div class="sidebar">
            <a href="home.php" >
                <span class="material-icons-sharp">grid_view</span>
                <h3>Home</h3>

            </a>
            <a href="messages.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Messages </h3><span class="message-count">26</span>

            </a>
            <a href="viewdata.php" class="active">
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

    <div class="buttonclass">
        <button class="b1" onclick="addmorevalues()"><span style="font-size: 20px;">+</span>&ensp;Add
            Record</button>
        <button class="b2" onclick="deleteMoreRows()"><span style="font-size: 20px;">-</span>&ensp;Delete
            Record</button>
        <button class="b3" style="float: right;" onclick="show_dissapear()"><span
                style="font-size: 20px;">≡</span>&ensp;Edit Table</button>
    </div>
    <p></p>
    
    <div class="insertvalues" id="insertvaluesid">
    <form action="viewdata.php" method="post">
        <div>State &ensp;<input type="text" id="txtst" placeholder="enter state" name="state"></div>
        <div>Year &ensp;<input type="text" id="txtyear" placeholder="enter year" name="year"></div>
        <div>Students &ensp;<input type="text" id="txtstudents" placeholder="enter total no. of students" name="total"></div>
        <div>Schools &ensp;<input type="text" id="txtschools" placeholder="enter total no. of schools" name="totals"></div>
        <div>drop out % &ensp;<input type="text" id="txtdrop" placeholder="enter drop out %" name="drop"></div>
        <div>literacy % &ensp;<input type="text" id="txtliteracy" placeholder="enter literacy %" name="litreacy"></div>
        &nbsp;<input type="submit" value=" Add "
            style="float: right;margin-right: 20px;background-color: #009879;color: white;padding: 7px;border-radius: 4px;border: none;">

    </form>

    </div>
    <div class="table_container_class">



        <!--HTML table with student data-->
        <div class="inner-container">
            <table id="tableID" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th id="checkbox_a" style="float: left;"><input type="checkbox" id="kaartCheck"
                                onclick="kliendikaartF()"></th>
                        <th>State&nbsp;</th>
                        <th>Year&nbsp;</th>
                        <th>Total no. of Students&nbsp;</th>
                        <th>Total no.of Schools&nbsp;</th>
                        <th>dropout rate(%)&nbsp;</th>
                        


                        <th>literacy rate(%)&nbsp;</th>

                    </tr>
                </thead>
                <tbody align="center">
                <?php
$username = "root"; 
$password = ""; 
$database = "project1"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
$query="SELECT * FROM statedata";
if ($result = $mysqli->query($query)) {
 
    while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td id="checkbox_a" class="inner_checkbox">
        <div><button type="button" id="checkbox_appearer"><a href="delete_state.php?id=<?php echo $row["total_number_of_students"]; ?>">delete</a></button></div>
    </td>
        <td><?php echo $row["state"]; ?></td>
        <td><?php echo $row["year"]; ?></td>
        <td><?php echo $row["total_number_of_students"]; ?></td>
        <td><?php echo $row["total_number_of_schools"]; ?></td>
        <td><?php echo $row["drop_out_rate"]; ?></td>
        <td><?php echo $row["litreacy_rate"]; ?></td>
        
        </tr>
        <?php
        
        }
    $result->free();
} 
?> 
                </tbody>
            </table>
        </div>
    </div>  
    <div></div>
    
   
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
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");

        filter = input.value.toUpperCase();
        table = document.getElementById("tableID");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "block";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function kliendikaartF() {
        var checkBox = document.getElementById("kaartCheck");
        var elms = document.querySelectorAll("[id='checkbox_appearer']");
        console.log(elms)
        if (checkBox.checked == true) {
            for (var i = 0; i < elms.length; i++) {
                elms[i].checked = true;
            }
        } else {
            for (var i = 0; i < elms.length; i++) {
                elms[i].checked = false;
            }
        }
    }
    var kingcount = 0
    function show_dissapear() {
        var elmen = document.querySelectorAll("[id='checkbox_appearer']");
        var elms = document.querySelectorAll("[id='checkbox_a']");
        for (var i = 0; i < elmen.length; i++) {
            elmen[i].checked = false;
        }
        if (kingcount == 0) {
            for (var i = 0; i < elms.length; i++) {

                elms[i].style.display = "block"

            }

            kingcount++
        } else {
            for (var i = 0; i < elms.length; i++) {

                elms[i].style.display = "none"


            }
            kingcount--

        }
    }
    function deleteMoreRows() {
        var elms = document.querySelectorAll("[id='checkbox_appearer']");
        table = document.getElementById('tableID')
        console.log(kingcount)
        if (kingcount != 0) {
            if (confirm("Are you sure you want to delete this record")) {
                for (var i = 0; i < elms.length; i++) {

                    if (elms[i].checked == true) {
                        console.log(i)
                        table.deleteRow(i + 1)
                        
                    }




                }
            }
        }


    }
    var state = document.getElementById('txtst')
    var year = document.getElementById('txtyear')
    var students = document.getElementById('txtstudents')
    var schools = document.getElementById('txtschools')
    var dropout = document.getElementById('txtdrop')
    var lit = document.getElementById('txtliteracy')
    divid = document.getElementById('insertvaluesid')

    var newkingcount = 0
    function addmorevalues() {

        if (newkingcount == 0) {
            setTimeout(1000)
            divid.style.display = "block"
            state.value = ""
            year.value = ""
            students.value = ""
            schools.value = ""
            dropout.value = ""
            lit.value = ""
            newkingcount++
        } else {
            setTimeout(1000)
            divid.style.display = "none"
            newkingcount--
        }

    }

    function CreateTable() {

        if (state.value == "" || year.value == "" || students.value == "" || schools.value == "" || dropout.value == "" || lit.value == "") {
            alert("please do not enter null values")

        } else {
            var table = document.getElementById("tableID");
            var row = table.insertRow(2);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var inserter = state.value;
            var tocaser = inserter.toUpperCase(); 
            cell1.innerHTML = tocaser;
            cell2.innerHTML = year.value;
            cell3.innerHTML = students.value;
            cell4.innerHTML = schools.value;
            cell5.innerHTML = dropout.value;
            cell6.innerHTML = lit.value;
            state.value = ""
            year.value = ""
            students.value = ""
            schools.value = ""
            dropout.value = ""
            lit.value = ""
        }




    }
    // function sortbyvalue() {
    //     var select = document.getElementById('state_search');
    //     var text = select.options[select.selectedIndex].text;
    //     var select1 = document.getElementById('year_search');
    //     var text1 =select1.options[select1.selectedIndex].text;
    //     console.log(text1)
        
        
    //     // Declare variables
        
    //     if (text == "none" && text1 == "none"){

    //         for (i = 0; i < tr.length; i++) {
    //         tr[i].style.display ="block"
            
        
    //     }
    

    //     }else if (text1 == "none"){
    //         filter = text.toUpperCase();
    //     table = document.getElementById("tableID");
    //     tr = table.getElementsByTagName("tr");
    //     console.log(filter)

    //     // Loop through all table rows, and hide those who don't match the search query
    //     for (i = 0; i < tr.length; i++) {
    //         td = tr[i].getElementsByTagName("td")[1];
    //         if (td) {
    //             txtValue = td.textContent || td.innerText;
    //             if (txtValue.toUpperCase().indexOf(filter) > -1) {
    //                 tr[i].style.display = "block";
    //             } else {
    //                 tr[i].style.display = "none";
    //             }
    //         }
    //     }
            
    //     }
    // }
        
        
    

    











</script>

</body>
</html>