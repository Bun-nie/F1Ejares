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
        <h4 style="color: #b67352; margin-top: 10px; text-align: center;"><b>REVIEWS</b></h4>
        <hr style="width: 75%; border-color: white; margin: auto;">
        <?php
            $mysqli = new mysqli('localhost', 'root','','dbejaresf1');
            $entries = $mysqli->query("SELECT * from tblreviewlocation entry INNER JOIN tbluseraccount as ua ON entry.acctid = ua.acctid") or die($mysqli->error);
            foreach($entries as $entry){
                if($entry['isDeleted'] == 0){
                    echo '<div style="margin: 10px; text-align: center; display: inline-block; line-height: 10px; width: 400px; height: 300px; border: 1px solid black; margin-top: 1.5%; padding: 10px; border-radius: 10px; background-color: white">
                        <h1 style="color: #b67352"><b>'.$entry['username'].'</b></h1>
                        <h3 style="color: #b67352"><b>Country: '.$entry['country'].'</b></h3>
                        <p style="font-size: 15px">'.$entry['review_content'].'</p>
                        <hr style="width: 75%; border-color: black; margin: auto;">
                        <p style="margin-top: 10px;"><b>'.$entry['date_added']. '</b></p>
                        <hr style="width: 75%; border-color: black; margin: auto;">';
                    echo '</div>';
                }
            
            }
        ?>
        <?php
            $mysqli = new mysqli('localhost', 'root', '', 'dbejaresf1');
            // Query to get reviews and count of reviews per country
            $query = "SELECT country, COUNT(*) as review_count FROM tblreviewlocation WHERE isDeleted = 0 GROUP BY country";
            $result = $mysqli->query($query) or die($mysqli->error);
        ?>
        <div>
            <h4 style="color: #b67352; margin-top: 10px; text-align: center;"><b>Number of Reviews for Each Country:</b></h4>
            <table id="tblReviewCounts" class="table table-striped table-bordered table-sm">
                <thead>
                <tr>
                    <th>Country</th>
                    <th>Total Reviews</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['country'] . '</td>';
                    echo '<td>' . $row['review_count'] . '</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php 
    require_once 'includes/footer_ejares.php';
?>