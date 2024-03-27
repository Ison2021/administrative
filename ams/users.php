<!DOCTYPE html>
<html>
<head>
    <title>Users Information</title>
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
<table>
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Contact number</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Verification code</th>
    </tr>
<?php
$con=mysqli_connect("localhost","root","","administrative-management-system");
if ($con-> connect_error){
    die("Connection failed:". $con-> connect_error);
}
$sql = "SELECT first_name,  last_name, contact_number, email, username, password, verification_code from tbl_user";
$result = $con-> query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>" 
        . $row["contact_number"] ."</td><td>". $row["email"] ."</td><td>". $row["username"] ."</td><td>"
        .$row["password"]. "</td><td>". $row["verification_code"] ."</td></tr>";
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