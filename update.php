<?php
$servername = "localhost";
$username = "root";
$password = "CST8250!";
$dbname = "user_system_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the user data
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);  // Binding parameter for ID (integer)
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc(); // Fetch user details as an associative array
    $stmt->close();
} else {
    die("No ID provided.");
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch the submitted data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $homeAddress = $_POST['homeAddress'];

    // Prepare and bind the update query
    $stmt = $conn->prepare("UPDATE users SET firstName=?, lastName=?, phoneNumber=?, emailAddress=?, homeAddress=? WHERE id=?");
    $stmt->bind_param("sssssi", $firstName, $lastName, $phoneNumber, $emailAddress, $homeAddress, $id); // Bind all variables

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Success message and button to return to view_record.php
        echo "<div class='alert alert-success'>Record updated successfully!</div>";
        echo "<form action='view_record.php' method='get'>";
        echo "<button type='submit' class='btn btn-primary mt-5'>Back to View Records</button>";
        echo "</form>";
    } else {
        echo "<div class='alert alert-danger'>Error updating record: " . $stmt->error . "</div>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<div class='alert alert-danger'>Invalid request method.</div>";
}

// Close connection
$conn->close();
?>
