<style type="text/css">
    #shopping-cart {
        position: absolute;
        top: 10px;
        right: 300px; /* Adjust the right value as needed */
        font-size: 28px;
        color: white;
        cursor: pointer;
    }
</style>




<nav class="navbar bg-info">
    <h3 class="navbar-brand text-white" style="font-family:'Kanit', sans-serif; font-size: x-large;">
        YumfinitY
    </h3>

    <?php
    if (empty($_SESSION)) {
        echo '<div style="display: flex;">';
        echo '<button class="btn btn-light" style="margin-right: 10px;" data-toggle="modal" data-target="#loginModal">Login</button>';
        echo '</div>';
    } else {
        echo '<a id="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>';
        echo '<div class="dropdown" style="margin-right: 10px;">';
        echo '<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi! 
                '.$_SESSION['name'].'
            </button>';
        echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
        echo '<a class="dropdown-item" href="index.php">My Home Page</a>';
        echo '<a class="dropdown-item" href="profile.php">My Profile</a>';
        echo '<a class="dropdown-item" href="my_orders.php">My orders</a>';
        echo '<a class="dropdown-item" href="logout.php">Logout</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</nav>
