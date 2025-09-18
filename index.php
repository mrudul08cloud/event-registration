<?php
require 'db.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    $stmt = $pdo->prepare("INSERT INTO registrations (name, email, event_name) VALUES (?, ?, ?)");
    if ($stmt->execute([$name, $email, $event])) {
        $message = "Registration successful!";
    } else {
        $message = "Registration failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
</head>
<body>
<h2>Event Registration Form</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Event: <input type="text" name="event" required><br><br>
    <input type="submit" value="Register">
</form>
<p><?php echo $message; ?></p>
</body>
</html>
