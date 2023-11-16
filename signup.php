<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Signup</title>
</head>
<body>

    <h2>College Signup</h2>

    <form action="signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="program">Program of Interest:</label>
        <select id="program" name="program">
            <option value="engineering">Engineering</option>
            <option value="business">Business</option>
            <option value="science">Science</option>
            <!-- Add more options as needed -->
        </select>

        <button type="submit">Signup</button>
    </form>

</body>
</html>
