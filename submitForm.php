<?php 

 $servername = "sql312.infinityfree.com";
    $username = "if0_38252379";
    $password = "Dab03031997";
    $dbname = "if0_38252379_dbt_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $homeAddress = $_POST["homeAddress"];
    $mainOptions = $_POST["mainOptions"];
    $subOptions1 = $_POST["subOptions1"];
    $subOptions2 = $_POST["subOptions2"];
    $appointmentDate = $_POST["date"];
    $appointmentTime = $_POST["time"];
    $message = $_POST["message"];
    $imageSample = null;

    
    if (isset($_FILES['imageSample']) && $_FILES['imageSample']['error'] === 0) {
        $uploadDir = 'uploads/';

        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES['imageSample']['name']);
        $targetFile = $uploadDir . time() . '_' . $fileName;

        if (move_uploaded_file($_FILES['imageSample']['tmp_name'], $targetFile)) {
            $imageSample = realpath($targetFile); 
        } else {
            echo "<div class='alert alert-danger'>Failed to upload image.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>File upload error: " . $_FILES['imageSample']['error'] . "</div>";
    }

    $sql = "INSERT INTO appointments (firstName, lastName, phoneNumber, emailAddress, homeAddress, service, size, length, appointment_date, appointment_time, message, image_sample) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $firstName, $lastName, $phoneNumber, $emailAddress, $homeAddress, $mainOptions, $subOptions2, $subOptions1, $appointmentDate, $appointmentTime, $message, $imageSample);

    
    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Thanks for booking with DBT!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
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
    <a href="index.php" class="btn btn-primary">Back to Home</a>
    <!-- <a href="updateForm.php" class="btn btn-primary">Edit Form</a> -->
</div>

</body>
</html>
