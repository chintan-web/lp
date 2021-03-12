<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['userName'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "landingpage";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `users` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
        $result = mysqli_query($conn, $sql);

      }

    }

    
?>