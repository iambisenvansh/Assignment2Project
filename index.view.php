<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
</head>
<body>
    <h1>Contact List</h1>
    <table >
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        if ($contacts->num_rows > 0) {
            while ($row = $contacts->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['phone'] . "</td>
                        <td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>
                      </tr>";
            }
        }
         else {
            echo "<tr><td colspan='4'>No contacts found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
