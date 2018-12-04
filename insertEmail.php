<?php
$servername = "localhost";

//production
$username = "u4887161_samuel";
$password = "muelcel722005";
$dbname = "u4887161_waqara";

//local
// $username = "root";
// $password = "";
// $dbname = "waqara";

date_default_timezone_set("Asia/Bangkok");

$email = $_POST["email"];
$audit_time = date("Y-m-d H:i:s");

//echo $email; die();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ListEmail (Email, AuditTime)
VALUES ('".$email."', '".$audit_time."')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://www.waqara.com?err=1');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>