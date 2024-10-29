<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $age = $row['age'];
        $address = $row['address'];
    } else {
        echo "No user found with that ID.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $id = $_POST['id'];

    if (!empty($name) && !empty($age) && !empty($address)) {
        $sql = "UPDATE users SET name='$name', age=$age, address='$address' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "User successfully updated.";
        } else {
            echo "Error editing record: " . $conn->error;
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Age: <input type="number" name="age" value="<?php echo $age; ?>" min="1" max="120"><br><br>
        Address: <input type="text" name="address" value="<?php echo $address; ?>"><br><br>
        <input type="submit" value="Update User">
    </form>
    <a href="index.php">Back to User List</a>
</body>
</html>
