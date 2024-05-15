<?php    
    include 'connect.php';
    //include 'readrecords.php';   
    require_once 'includes/header.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
              crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div>
            <img src="images/contact.png" style="width: 2000px;">
        </div>
        <h1 style="text-align: center; margin-top: 10px; font-weight: 800px;">Contact Us</h1>
        <hr>
        <h3 style="text-align: center;">We are ready to help for your memorable travels!</h3>   
        <div>
            <div class="image-container">
                <img src="images/fb.png" class="centered-image" style="height: 50px;"><b>/WanderLOG</b>
                <img src="images/ig.png" class="centered-image" style="height: 50px;"><b>@wanderlog</b>
                <img src="images/website.png" class="centered-image" style="height: 50px;"><b>wanderlog.com</b>
                <img src="images/email.png" class="centered-image" style="height: 50px;"><b>contact@wanderlog.com</b>
            </div>
        </div>
    </body>
</html>
<?php require_once 'includes/footer_obando.php'; ?>