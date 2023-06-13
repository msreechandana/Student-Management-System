<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slow Learners</title>
    <style>
        table{
            border-collapse: collapse;
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
            overflow:auto;

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

        h1{
            margin-top:200px;
        }
    </style>
</head>

<body style="background-color:rgb(229,229,229); font-family:Arial">
    <div style="float:left; width:25%;">
            <ol>
            <li style="background-color:rgb(42,111,185); height:30px; color:white; text-align:center; padding:10px;">Menu</li>
            <li><a href="enter_marks.php" target="rightframe">Enter Marks</a></li>
            <li><a href="slow.php" target="rightframe">Slow learners</a></li>
            <li><a href="display.php" target="rightframe">Student Details</a></li>
            <li><a href="lessthan25.php" target="rightframe">Students with less than 25 marks</a></li>
        </ol>
    </div>
        <div class="right" style="background-color:rgb(255,255,255);">
        <h2>Student Marks Details</h2>
        <hr>

        <?php 
            $con = mysqli_connect("localhost", "root", "", "stu_rec"); 
            $query = "SELECT * FROM Marks";
            echo '<table border="2" cellspacing="0" cellpadding="10"> 
                <tr> 
                    <td><b>Name</b></td> 
                    <td><b>Regno</b></td> 
                    <td><b>Course</b></td> 
                    <td><b>Course Code</b></td> 
                    <td><b>CAT-1</b></td> 
                    <td><b>CAT-2</b></td>
                    <td><b>DA-1</b></td> 
                    <td><b>DA-2</b></td>
                    <td><b>Quiz</b></td> 
                    <td><b>Internal Marks</b></td>
                    <td><b>Note</b></td> 
                </tr>';

            if ($result = mysqli_query($con, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $field1name = $row["Name"];
                    $field2name = $row["Regno"];
                    $field3name = $row["Course"];
                    $field4name = $row["Ccode"];
                    $field5name = $row["cat1"];
                    $field6name = $row["cat2"]; 
                    $field7name = $row["da1"];
                    $field8name = $row["da2"];
                    $field9name = $row["quiz"];
                    $field10name = $row["int_marks"];
                    $field11name = $row["note"];

                    if($field10name>=45){
                        echo '<tr> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field1name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field2name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field3name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field4name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field5name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field6name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field7name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field8name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field9name.'</td> 
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field10name.'</td>
                        <td style="background-color:rgba(0, 128, 0, 0.8);">'.$field11name.'</td> 
                    </tr>';
                    }

                    else if($field10name<25){
                        echo '<tr> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field1name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field2name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field3name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field4name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field5name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field6name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field7name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field8name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field9name.'</td> 
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field10name.'</td>
                        <td style="background-color:rgba(255, 0, 0, 0.8);">'.$field11name.'</td> 
                    </tr>';
                    }

                    else
                    {
                        echo '<tr>
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td> 
                        <td>'.$field3name.'</td> 
                        <td>'.$field4name.'</td> 
                        <td>'.$field5name.'</td> 
                        <td>'.$field6name.'</td> 
                        <td>'.$field7name.'</td> 
                        <td>'.$field8name.'</td> 
                        <td>'.$field9name.'</td> 
                        <td>'.$field10name.'</td>
                        <td>'.$field11name.'</td> 
                        </tr>';

                    }
                    
                }
            } 
            ?>
    </div>
    
</body>
</html>