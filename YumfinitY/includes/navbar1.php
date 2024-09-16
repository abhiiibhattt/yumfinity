
		<nav class="navbar bg-info">
			<h3 class="navbar-brand text-white" style="font-family:'Kanit', sans-serif; font-size: x-large;">
			YumfinitY
			</h3>

			<?php

				if (empty($_SESSION)) {
					echo '<button class="btn btn-light" style="margin-right:45px" data-toggle="modal" data-target="#loginClient">Login</button>';

				}else{
                    echo'
                    			<div class="dropdown" style="margin-right:45px">
							  	<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi! 
							    	'.$_SESSION['name'].'
							  	</button>
							  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							  		<a class="dropdown-item" href="index1.php">My Home Page</a>
							    	<a class="dropdown-item" href="client.php">My Profile</a>
							    	<a class="dropdown-item" href="my_menu.php">Menu</a>
							    	<a class="dropdown-item" href="client_logout.php">Logout</a>
							  	</div>
						</div>';
				}	

			?>
		</nav>