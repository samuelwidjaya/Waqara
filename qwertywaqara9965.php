<?php
  $servername = "localhost";
  $username = "u4887161_samuel";
  $password = "muelcel722005";
  $dbname = "u4887161_waqara";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT * FROM ListEmail";
  $result = $conn->query($sql);

  
  $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Email List</h2>
  <p>This data was inputted from Waqara.com Homepage</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Input Date</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["ID"]."</td><td>".$row["Email"]."</td><td>".$row["AuditTime"]."</td></tr>";
            }
        } 

      ?>
    </tbody>
  </table>
</div>

</body>
</html>
