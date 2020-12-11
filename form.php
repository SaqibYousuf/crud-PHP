<?php
include './connect.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";

    $q = mysqli_query($connect, $query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label> User Name
            <input type="text" name="username" />
        </label>
        <label> Password
            <input type="text" name="password" />
        </label>
        <!-- <label> Age
        <input type="text" name="Age" />
    </label> -->

        <button type="submit" name="submit">Add</button>
    </form>

</body>

</html>