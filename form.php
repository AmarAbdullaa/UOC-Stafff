<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container for the form */
        form {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        /* Heading styling */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Input field styling */
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button[type="submit"] {
            background-color: #6A0DAD; /* Green for submit */
            color: white;
        }

       

        .delete {
            background-color: #D3A6FF; /* Bright red for delete action */
            color: white; /* White text for contrast */
        }

        .delete:focus,
        button:focus {
            outline: 2px solid #ffcccc; /* Focus indication */
            outline-offset: 2px;
        }

        /* Label styling */
        label {
            font-weight: bold;
            color: #333;
        }

        /* Center everything inside the form */
        form > * {
            display: block;
        }

        /* Spacing for form elements */
        input,
        button,
        label {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form action="submit_form.php" method="post">
        <h2>Registration Form</h2>
        <label for="regNumber">Registration Number:</label>
        <input type="text" id="regNumber" name="regNumber" required>

        <label for="faculty">Faculty:</label>
        <input type="text" id="faculty" name="faculty" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Submit</button>
        <button class="delete">Delete Profile</button>
    </form>
</body>
</html>
