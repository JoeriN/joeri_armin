<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ajax";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT festivals FROM concerten WHERE festivals LIKE '" . $_GET['i'] . "%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "festivals: " . $row["festivals"]."<br>";
            }
        } else {
            echo $row;
        }
        $conn->close();
?>