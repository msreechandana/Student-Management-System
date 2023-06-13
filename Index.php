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
            height:550px;

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
        <div class="right" style="background-color:rgb(255,255,255);">
        <center><h1>Welcome to Student Records!</h1></center>
        <center><h3>Select options in the menu to explore...</h3></center>
        
        
        </div>
    <div style="float:left; width:25%;">
        <ol>
        <li style="background-color:rgb(42,111,185); height:30px; color:white; text-align:center; padding:10px;">Menu</li>
        <li><a href="enter_marks.php" target="rightframe">Enter Marks</a></li>
        <li><a href="slow.php" target="rightframe">Slow learners</a></li>
        <li><a href="" target="rightframe">Student Details</a></li>
        <li><a href="lessthan25.php" target="rightframe">Students with less than 25 marks</a></li>
    </ol>
    </div>
    </body>
</html>