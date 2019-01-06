<?php
        include_once 'Turtles.html';
        require_once 'login.php';
        $conn = mysqli_connect($host, $user, $pass, $db, $port);
        if($conn->connect_error) die($conn->connect_error);
            while ($row = mysqli_fetch_assoc($result)) {
            echo " Species " . $row['species'] . "URL: ". $$row['url'] . "Population: " . $row['population'] . "Location: " . $row['Location'];
        }
?>