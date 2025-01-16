<?php
$servername = "localhost";
$username = "root";
$password = "CST8250!";
$dbname = "user_system_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);  
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc(); 
    $stmt->close();
} else {
    die("No ID provided.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $homeAddress = $_POST['homeAddress'];

    $stmt = $conn->prepare("UPDATE users SET firstName=?, lastName=?, phoneNumber=?, emailAddress=?, homeAddress=? WHERE id=?");
    $stmt->bind_param("sssssi", $firstName, $lastName, $phoneNumber, $emailAddress, $homeAddress, $id); 

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Record updated successfully!</div>";
        echo "<form action='view_record.php' method='get'>";
        echo "<button type='submit' class='btn btn-primary mt-5'>Back to View Records</button>";
        echo "</form>";
    } else {
        echo "<div class='alert alert-danger'>Error updating record: " . $stmt->error . "</div>";
    }

    
    $stmt->close();
} else {
    
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formStyle.css">
    
</head>
<body>
    <header>
        <h2>
        Edit Form
        </h2>
    </header>
    <main>
        <div class="form">
            <div class="container mt-4">
            <h3>Welcome <?php echo $user['firstName'] . ' ' . $user['lastName']; ?></h3>
</div>
 <form id="SimpleForm" method="post" action="update.php?id=<?php echo $_GET['id']; ?>">
  
            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            <label for="name">First Name:</label>
            <input Type="text" id="firstName" name="firstName"  value="<?php echo $user['firstName'];?>">

            <label>Last Name:</label>
            <input Type="text" id="lastName" name="lastName" value="<?php echo $user['lastName'];?>" required>

            <label for="phoneNumber">Phone Number:</label>
            <input Type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $user['phoneNumber'];?>">

            <label for="emailAddress">Email Address:</label>
            <input Type="emailAddress" id="email" name="emailAddress" value="<?php echo $user['emailAddress'];?>" required>

            <label for="homeAddress">Home Address:</label>
            <input Type="text" id="homeAddress" name="homeAddress" value="<?php echo $user['homeAddress'];?>">

       <div class="button-container">
<a href="update_form.php?id=<?php echo $rows['id']; ?>"><input type="submit" name="submit" value="Submit"></a>       
</form> 

<a href="form.php" class="btn btn-primary">Back</a>
        </div>

    </div>
    </main>

</body>
</html>