<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            include './connect.php';
            $q = "select * from crud";

            $query = mysqli_query($connect, $q);

            while ($res = mysqli_fetch_array($query)) {


            ?>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>