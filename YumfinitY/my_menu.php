<?php
require "db_config.php";
session_start();

if (isset($_SESSION['client_id'])) {
    $cook_id = $_SESSION['client_id']; // You should replace this with your actual session handling code

    // Fetch information about the homecook
    $query = "SELECT * FROM homecook WHERE id = $cook_id ";
    $result = mysqli_query($conn, $query);
    $fetched_result = mysqli_fetch_assoc($result);
    $restrau_name = $fetched_result['name'];
    $restrau_address = $fetched_result['address'];
    $restrau_img = $fetched_result['image'];
    $restrau_rating = $fetched_result['rating'];

    // Fetch the items for the homecook
    $query2 = "SELECT * FROM food WHERE cook_id = $cook_id";
    $result2 = mysqli_query($conn, $query2);
} else {
    echo "User ID not found in session.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homecook - <?php echo $restrau_name; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Pacifico&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/12fd2f4021.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "includes/navbar1.php" ; ?>
    <div class="container">
        <div class="restrau-page">
            <div class="restrau-page-left">
                <img src="<?php echo $restrau_img; ?>">
            </div>
            <div class="restrau-page-right">
                <h3 style="font-size: 3rem;"><?php echo $restrau_name; ?></h3>

                <div class="row">
                    <div class="col-md-3 text-center">
                        <h5><?php echo $restrau_rating; ?> <i style="color: #ffcc00 ;" class="fas fa-star"></i></h5>
                    </div>
                </div>
                
                <p style="font-weight: bold;"><?php echo $restrau_address; ?></p>
            </div>
        </div>

        <div class="mt-5 text-center mb-5">
            <h2 style="font-family: 'Pacifico', cursive; font-size: 3rem; color: #880000;">Our Menu...</h2>
        </div>

        <div class="menu-list">
            <?php
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo '<div class="food">
                            <div class="food-img">
                                <img src="'.$row['image'].'">
                            </div>
                            <div class="food-desc">
                                <h3>'.$row['name'].'</h3>
                                <p>'.$row['description'].'</p>
                            </div>
                            <div class="food-price"><h4>Rs. '.$row['price'].'</h4></div>
                        </div>';
                }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
