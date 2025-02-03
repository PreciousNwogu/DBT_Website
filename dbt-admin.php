<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="formStyle.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
            background: white;
        }
    </style>
</head>
<body>
    <header>
    <h1 class="admin">Bookings</h1>
    </header>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "CST8250!";
    $dbname = "dbt_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("<div class='alert alert-danger text-center'>Connection failed: " . $conn->connect_error . "</div>");
    }

    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = $result->fetch_all(MYSQLI_ASSOC);
       
        ?>
    <div class="table-responsive">
        <table border="1" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Home Address</th>
                    <th>Service</th>
                    <th>Length</th>
                    <th>size</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Message</th>
                    <th>Image Sample</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $counter = 1; 
                foreach ($records as $record): ?>
                    <tr>
                        <td><?= $counter++; ?></td>
                        <td><?= htmlspecialchars($record['firstName']); ?></td>
                        <td><?= htmlspecialchars($record['lastName']); ?></td>
                        <td><?= htmlspecialchars($record['phoneNumber']); ?></td>
                        <td><?= htmlspecialchars($record['emailAddress']); ?></td>
                        <td><?= htmlspecialchars($record['homeAddress']); ?></td>
                        <td><?= htmlspecialchars($record['service']); ?></td>
                        <td><?= htmlspecialchars($record['length']); ?></td>
                        <td><?= htmlspecialchars($record['size']); ?></td>
                        <td><?= htmlspecialchars($record['appointment_date']); ?></td>
                        <td><?= htmlspecialchars($record['appointment_time']); ?></td>
                        <td><?= htmlspecialchars($record['message']); ?></td>
                        <td><?= htmlspecialchars($record['image_sample']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

        <?php
    } else {
        echo '<div class="alert alert-info text-center">No records found.</div>';
    }

    $conn->close();
    ?>

</body>
</html>
