<?php 

$servername = "localhost";
$username = "root";
$password = "CST8250!";
$dbname = "dbt_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->connect_error){
}else {
    die ("connection failed: ".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $homeAddress = $_POST["homeAddress"];
    $mainOptions = $_POST["mainOptions"];
    $subOptions1 = $_POST["subOptions1"];
    $appointmentDate = $_POST["date"];
    $appointmentTime = $_POST["time"];
    $message = $_POST["message"];
    $imageSample = $_POST["imageSample"];



    $sql = "INSERT INTO appointments (firstName, lastName, phoneNumber, emailAddress, homeAddress, service, length, appointment_date, appointmentTime, message, imageSample ) VALUES ('$firstName', '$lastName', $phoneNumber, '$emailAddress', '$homeAddress', '$mainOptions', '$subOptions1' '$appointmentDate', '$appointmentTime', '$message', '$imageSample')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
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
    <a href="form.php" class="btn btn-primary">Back to Form</a>
    <a href = "updateForm.php" class="btn btn-primary">Update Form</a>
</div>

</body>
</html>
