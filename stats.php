<?php 
    require_once 'includes/header.php';
    include('connect.php');
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>WanderLOG</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body id="bodyGen" style="background-image: url('images/bgLogIn.png'); margin-bottom: 100px">
    <div style="justify-content: center;">
        <hr style="width: 75%; border-color: white; margin: auto;">
        <h4 style="color: #b67352; margin-top: 10px; text-align: center;"><b>STATISTICS</b></h4>
        <hr style="width: 75%; border-color: white; margin: auto;">
        <?php
            $mysqli = new mysqli('localhost', 'root','','dbejaresf1');
            
            // Total number of users
            $total_users_query = "SELECT COUNT(*) as total_users FROM tbluserprofile";
            $total_users_result = $mysqli->query($total_users_query) or die($mysqli->error);
            $total_users = $total_users_result->fetch_assoc()['total_users'];

            echo '<div style="text-align: center; margin: auto;">';
            echo "<h5>Total Number of Users</h5>";
            echo '<h1 style="text-align: center; font-size: 90px">'.$total_users.'</h1>';
            echo '</div>';
            echo '<img src="images/gender.png" width="300px" height="117px" style="display: block;
            margin-left: auto;
            margin-right: auto;">';
            
            // Gender distribution
            $gender_query = "SELECT gender, COUNT(*) as count FROM tbluserprofile GROUP BY gender";
            $gender_result = $mysqli->query($gender_query) or die($mysqli->error);

            echo '<table class="table table-striped table-bordered table-sm">';
            echo '<tr><th>Gender</th><th>Count</th></tr>';
            while ($row = $gender_result->fetch_assoc()) {
                echo '<tr><td>' . $row['gender'] . '</td><td>' . $row['count'] . '</td></tr>';
            }
            echo '</table>';

            // Total number of reviews
            $total_reviews_query = "SELECT COUNT(*) as total_reviews FROM tblreviewlocation WHERE isDeleted = 0";
            $total_reviews_result = $mysqli->query($total_reviews_query) or die($mysqli->error);
            $total_reviews = $total_reviews_result->fetch_assoc()['total_reviews'];

            echo '<div style="text-align: center; margin: auto;">';
            echo "<h5>Total Number of Reviews</h5>";
            echo '<h1 style="text-align: center; font-size: 90px">'.$total_reviews.'</h1>';
            echo '</div>';

            echo '<img src="images/country_review.png" width="650px" height="650px" style="display: block;
            margin-left: auto;
            margin-right: auto;">';

            // Number of reviews by country
            $reviews_by_country_query = "SELECT country, COUNT(*) as count FROM tblreviewlocation WHERE isDeleted = 0 GROUP BY country";
            $reviews_by_country_result = $mysqli->query($reviews_by_country_query) or die($mysqli->error);

            echo '<table class="table table-striped table-bordered table-sm">';
            echo '<tr><th>Country</th><th>Review Count</th></tr>';
            while ($row = $reviews_by_country_result->fetch_assoc()) {
                echo '<tr><td>' . $row['country'] . '</td><td>' . $row['count'] . '</td></tr>';
            }
            echo '</table>';

            echo '<img src="images/user_review.png" width="650px" height="650px" style="display: block;
            margin-left: auto;
            margin-right: auto;">';
            // Number of reviews by users
            $reviews_by_users_query = "SELECT ua.username, COUNT(*) as count FROM tblreviewlocation rl JOIN tbluseraccount ua ON rl.acctid = ua.acctid WHERE rl.isDeleted = 0 GROUP BY ua.username";
            $reviews_by_users_result = $mysqli->query($reviews_by_users_query) or die($mysqli->error);

            echo '<table class="table table-striped table-bordered table-sm">';
            echo '<tr><th>Username</th><th>Review Count</th></tr>';
            while ($row = $reviews_by_users_result->fetch_assoc()) {
                echo '<tr><td>' . $row['username'] . '</td><td>' . $row['count'] . '</td></tr>';
            }
            echo '</table>';
        ?>
    </div>
</body>
</html>

<?php 
    require_once 'includes/footer_ejares.php';
?>
