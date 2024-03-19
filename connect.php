<?php
        
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'vizzie_db');
        if($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }else{

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO registration (username, email, password, city, address, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $username, $email, $password, $city $address, $phone);
        $stmt->excecute();
        echo "Registration successful!";
       
        // // Execute the statement
        // if ($stmt->execute()) {
        //     echo "Registration successful!";
        // } else {
        //     echo "Error: " . $stmt->error;
        // }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    // } else {
    //     echo "Invalid request method!";
    // }
}
?>
