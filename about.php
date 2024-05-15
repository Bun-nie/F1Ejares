<?php    
    include 'connect.php';
    //include 'readrecords.php';   
    require_once 'includes/header.php'; 
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
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
            <img src="images/about.png" style="width: 2000px;">
        </div>
        
        <h1 style="text-align: center; margin-top: 10px; font-weight: 800px;">About Us</h1>
        <hr style="width: 50%; margin: 0 auto;">
        <h3 style="text-align: center;">Know your ultimate creator travel buddies!</h3>
        <div class="image-container">
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/6833/6833605.png" class="centered-image" style="height: 200px; width: 200px;">
                <br>
                <img src="images/socials.png" class="socials">
                <h4><b>NICOLE EJARES</b></h4>
                <p>WanderLOG President</p>
                <hr style="width: 25%; margin: 0 auto;">
                <p><b style="font-size: 20px;">I am your nature-loving travel buddy!</b><br>
                Always equipped with a keen eye for scenic wonders, I thrive on immersive experiences<br>
                amidst lush landscapes and pristine wilderness. From serene hikes to breathtaking sunsets,<br>
                my enthusiasm for nature adds an extra layer of adventure and appreciation to every journey.</p>
            </div>
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/6833/6833605.png" class="centered-image" style="height: 200px; width: 200px;">
                <br>
                <img src="images/socials.png" class="socials">
                <h4><b>GUADALUE NIÑA MARIE L. OBANDO</b></h4>
                <p>WanderLOG Vice-President</p>
                <hr style="width: 25%; margin: 0 auto;">
                <p><b style="font-size: 20px;">I am your free-spirited travel companion!</b><br>
                    With an insatiable wanderlust and a heart open to new adventures, I dance to the rhythm of<br>
                    spontaneity and embrace every moment with unbridled joy. From impromptu road trips to off-the-beaten-path<br>
                    discoveries, my vibrant energy and open-mindedness make every escapade an unforgettable journey.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </body>
</html>
<?php require_once 'includes/footer_obando.php'; ?>