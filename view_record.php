nwogu@DESKTOP-7F2391F MINGW64 /c/xampp/htdocs (main)
$ git push -u origin main
error: src refspec main does not match any
error: failed to push some refs to 'https://github.com/PreciousNwogu/DBT_Website.git'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="formStyle.css">
    <style>
        /* Additional Styles for Form Layout */
        body {
            font-family: Arial, sans-serif;
        }

        .container-wide {
            text-align: center;
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            text-align: right;
            padding-right: 10px;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .button-container, .form-text {
            grid-column: span 2;
            text-align: center;
        }

        .button-container input[type="submit"],
        .button-container input[type="button"] {
            padding: 10px 20px;
            font-size: 16px;
        }

        .images img {
            width: 50%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h2>Appointment Booking</h2>
    </header>

    <main>
       
        <div class="form">
            <form id="SimpleForm" method="post" action="submitForm.php">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>

                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>

                <label for="phoneNumber">Phone Number:</label>
                <input type="text" id="phoneNumber" name="phoneNumber" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="emailAddress" required>

                <label for="homeAddress">Home Address:</label>
                <input type="text" id="homeAddress" name="homeAddress" required>

                <div class="button-container">
                    <input type="submit" value="Submit">
                    <a href="view_record.php"><input type="button" value="View Record"></a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
