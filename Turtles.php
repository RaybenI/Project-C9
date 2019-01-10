<?php
        include_once 'Turtles.html';
        require_once 'login.php';
        $conn = mysqli_connect($host, $user, $pass, $db, $port);
        if($conn->connect_error) die($conn->connect_error);
        $option = isset($_POST['seaturtles']) ? $_POST['seaturtles'] : false;
        if ($option){
            $testField = $_POST['seaturtles'];
            $query = "	select ". $species . " from species;";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            echo " Species " . $row['species'] . "Location: ". $$row[''] . "Population: " . $row['population'] .   "Status " . $row['conservation'];
          }
        }
        $result->close();
        $conn->close();
?>