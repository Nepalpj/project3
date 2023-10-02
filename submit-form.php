<?php 
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
   
      $errors = array();
   
      if (empty($name)) {
         $errors[] = "Name is required";
      }
      if (empty($email)) {
         $errors[] = "Email is required";
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors[] = "Invalid email format";
      }
      if (empty($phone)) {
         $errors[] = "Phone number is required";
      }elseif(!preg_match("/^[0-9]{10}$/", $phone)) {
         $errors[] = "Invalid phone number";
      }
      if (empty($address)) {
         $errors[] = "Address is required";
      }
      if (empty($location)) {
         $errors[] = "Location is required";
      }
   
      if (empty($errors)) {
         // Connect to the database
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "form";
   
         $conn = new mysqli($servername, $username, $password, $dbname);
   
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
         }
   
         $sql = "INSERT INTO registration (name, email, phone, address, location)
                 VALUES ('$name', '$email', '$phone', '$address', '$location')";
   
         if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
         } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
         }
   
         $conn->close();
      } else {
         echo "Errors:<br>";
         foreach ($errors as $error) {
            echo $error . "<br>";
         }
      }
   }
?>
