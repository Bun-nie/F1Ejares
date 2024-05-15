<?php
    $title = 'Dashboard';
    require_once 'includes/header.php';
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User List</title>
        </head>
        <body>
        <div>
            </div><p><h5>List of User Accounts Registered</h5></p>
            <div>
                <?php
                            $mysqli = new mysqli('localhost', 'root','','dbejaresf1') or die (mysqli_error($mysqli));
                            $resultset = $mysqli->query("SELECT * from tbluserprofile") or die ($mysqli->error);
                        ?>
            <table id="tblUserProfiles" class="table table-striped table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $resultset->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['userid'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['birthdate'] ?></td>
                        <td>
                            <a href="">VIEW</a>
                            <a href="">DELETE</a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php
    require_once 'includes/footer_ejares.php';
?>