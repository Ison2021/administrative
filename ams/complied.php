<!DOCTYPE html>
<html>
<head>
    <title>Complied information</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: monospace;
            font-size: 15px;
            text-align: left;
        }
        th{
            background-color: cornflowerblue;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        body{
            background: url("./vendor/blue.jpg") no-repeat center fixed;
            background-size: cover;
            }
    </style>

</head>
<body>
<div>
&ensp;&ensp;&ensp;<a class="btn btn-primary" href="report/export_excel.php">Save as file</a>
    </div>
<br>    
<table>
    <tr>
        <th>Full name</th>
        <th>Module name</th>
        <th>Date and Time</th>
        <th>Status</th>

    </tr>
<?php
$con=mysqli_connect("localhost","root","","administrative-management-system");
if ($con-> connect_error){
    die("Connection failed:". $con-> connect_error);
}
$sql = "SELECT fullname, modulename, xdatetime, xstat from compliance_regulatory";
$result = $con-> query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["fullname"] ."</td><td>". $row["modulename"] ."</td><td>" 
        . $row["xdatetime"] ."</td><td>". $row["xstat"] ."</td></tr>";
    }
    echo"</table>";
}
else {
    echo "0 result";
}
$con-> close();
?>
</table>
</body>
</html>