<?php 

$servername = "localhost";
$username = "root";
$password = "CST8250!";
$dbname = "user_system_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->connect_error){
    // echo"Database Successfull" ;
}else {
    die ("connection failed: ".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $homeAddress = $_POST["homeAddress"];

    $sql = "INSERT INTO users (firstName, lastName, phoneNumber, emailAddress, homeAddress ) VALUES ('$firstName', '$lastName', $phoneNumber, '$emailAddress', '$homeAddress')";

     // Check if the query was successful
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Record added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <!-- Display the buttons to navigate back to the form or view records -->
    <a href="form.php" class="btn btn-primary">Back to Form</a>
    <a href="view_record.php" class="btn btn-secondary">Back to View Records</a>
</div>

</body>
</html>
