<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    if (!empty($name) && !empty($age) && !empty($address)) {
        $sql = "INSERT INTO users (name, age, address) VALUES ('$name', $age, '$address')";

        if ($conn->query($sql) === TRUE) {
            echo "New user added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all fields";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Add a New User</h2>

    <form method="post" action="add.php">
        Name: <input type="text" name="name"> <br><br>
        Age: <input type="number" name="age" min="1" max="120"> <br><br>
        Address: <input type="text" name="address"> <br><br>
        <input type="submit" value="Add User">
    </form>
    <a href="index.php">Back to User List</a>
</body>
</html>
