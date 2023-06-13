<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
    <style>
        table{
            border-collapse: collapse;
            width:100%;
            height:100%;
            border-color:rgb(229,229,229); 
        }

        th,td{padding:7px;}
        input[type=submit]{
            background-color: rgb(39,92,140);
            border: 1px solid black;
            color: white;
            padding: 10px 10px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        .right{
           
            padding:10px;
            padding-top: 0px;
            border:1px;
            border-color:rgb(229,229,229);
            border-top: 2px rgb(60,141,188) solid;
            float:right; 
            width:72%;

        }
       
        ol {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: white;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            font-weight: bold;
        }
        
        li a:hover:not(.active) {
            background-color: rgb(193,193,193);
            color: black;
        }

        #sub{
            color:green;
            align:center;
            font-weight:600;
        }
        #sub1{
            color:red;
            align:center;
            font-weight:600;
        }
    </style>
</head>
    <body style="background-color:rgb(229,229,229); font-family:Arial">
        <div class="right" style="background-color:rgb(255,255,255);">
        <h2>Enter Student Marks</h2>
        <hr>
        <table border="2">
            <form action = "<?php $_PHP_SELF ?>" method = "POST">
                <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
                <tr><td>Registration Number:</td><td><input type="text" name="regno"></td></tr>
                <tr><td>Course:</td><td><input type="text" name="course"></td></tr>
                <tr><td>Course Code:</td><td><input type="text" name="course_code"></td></tr>
                <tr><td>CAT-1 Marks:</td><td><input type="number" step="0.1" name="cat1"></td></tr>
                <tr><td>CAT-2 Marks:</td><td><input type="number" step="0.1" name="cat2"></td></tr>
                <tr><td>DA-1 Marks:</td><td><input type="number" step="0.1" name="da1"></td></tr>
                <tr><td>DA-2 Marks:</td><td><input type="number" step="0.1" name="da2"></td></tr>
                <tr><td>Quiz Marks:</td><td><input type="number" step="0.1" name="quiz"></td></tr>
                <tr ><td colspan="2"><center><input type="submit" name="submit"></center></td></tr>
                <tr><td colspan="2"><center><div id="sub"></div></center></td></tr>
            </form>
    </table>
        </div>
    <div style="float:left; width:25%;">
        <ol>
            <li style="background-color:rgb(42,111,185); height:30px; color:white; text-align:center; padding:10px;">Menu</li>
            <li><a href="enter_marks.php" target="rightframe">Enter Marks</a></li>
            <li><a href="slow.php" target="rightframe">Slow learners</a></li>
            <li><a href="display.php" target="rightframe">Student Details</a></li>
            <li><a href="lessthan25.php" target="rightframe">Students with less than 25 marks</a></li>
        </ol>
    </div>
        <?php
            if(isset($_POST['submit']))
            { 
                $Name=$_POST['name'];
                $Reg=$_POST['regno'];
                $Course=$_POST['course'];
                $Ccode=$_POST['course_code'];

                if($_POST['cat1']>50 || $_POST['cat2']>50)
                    exit("<script> document.getElementById('sub').innerHTML='CAT marks cannot be greater than 50!';document.getElementById('sub').style.color='red';</script>");

                else if($_POST['cat1']<0 || $_POST['cat2']<0)
                    exit("<script> document.getElementById('sub').innerHTML='CAT marks cannot be less than 0!';document.getElementById('sub').style.color='red';</script>");
                
                else{
                    $c1=$_POST['cat1'];
                    $c2=$_POST['cat2'];
                }
                
                $d1=$_POST['da1'];
                $d2=$_POST['da2'];
                $quiz=$_POST['quiz'];

                $int_marks=((($_POST['cat1']/50)*15)+(($_POST['cat2']/50)*15)+$_POST['da1']+$_POST['da2']+$_POST['quiz']);

                $note='NULL';
            }
    


    $con = mysqli_connect("localhost","root","","stu_rec");
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error());
    } 

    //   $sql = "create table Marks (Name varchar(30), Regno varchar(10), Course varchar(20),Ccode varchar(10),cat1 float(2),cat2 float(2),da1 float(2),da2 float(2),quiz float(2),int_marks float(2),note varchar(20))";

    // if (!mysqli_query($con, $sql)) {
    //     die('Error: ' . mysqli_errno($con));
    // }
   
    if(isset($_POST['submit'])){
    $sql1= "INSERT INTO Marks VALUES ('$Name','$Reg','$Course','$Ccode','$c1','$c2','$d1','$d2','$quiz',$int_marks,'$note')";

    if (!mysqli_query($con, $sql1)) { die('Error: ' . mysqli_errno($con));}

    else
    echo "<script> document.getElementById('sub').innerHTML='SUBMITTED';document.getElementById('sub').style.color='green';</script>";
    }
    mysqli_close($con);
    ?>
    
    <?php

    $con = mysqli_connect("localhost","root","","stu_rec");
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error());
    } 

    if(isset($_POST['submit'])){
    $sql = "SELECT AVG(int_marks) FROM Marks where course='$Course' ";
    if ($res = mysqli_query($con, $sql)) {
        while ($row = mysqli_fetch_assoc($res))
         {
            $avg=$row['AVG(int_marks)'];
         }
    }

    $q1="UPDATE Marks SET note='Slow learner' where int_marks<'$avg'";
    $res1=mysqli_query($con, $q1);

    $q2="UPDATE Marks SET note=NULL where int_marks>'$avg'";
    $res2=mysqli_query($con, $q2);

}
    mysqli_close($con);

?>
    
    </body>
</html>