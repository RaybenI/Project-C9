<?php
    $host = "127.0.0.1";
    $user = "rayben";                     
    $pass = "";                                  
    $db = "c9";                                
    $port = 3306;                                
    ?>
    
<?php
    
    include_once 'formtest.html';
      require_once 'login.php';
      $conn = mysqli_connect($host, $user, $pass, $db, $port);
     if($conn->connect_error) die($conn->connect_error);
      $option = isset($_POST['myTest']) ? $_POST['myTest'] : false;
     if ($option){
         $testField = $_POST['myTest'];
          $query = "  select ". $testField . " from users;";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
              echo $row[$testField] . "<br>";
                        }
      }
     $result->close();
      $conn->close();
 ?>
<html>
<head>
<title>phptest</title>
</head>
<body>
	<form action = 'phptest2.php' method= "post">
			<select name = "myTest"
				<option value ="username">User name</select></option>
				<option value = "email">email</option>
			</select>
	</form>
</body>
</html>