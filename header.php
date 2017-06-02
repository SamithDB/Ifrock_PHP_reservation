<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					
					<li><a href="">Contact</a></li>|
					<li><a href="">Collection</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link"><a href="">
					<?php 
        	if(isset($_SESSION['user'])){
        		echo "Hello ".$_SESSION['user']."!!"; 
        	}else {
        		echo "<a href='account.php'>login</a>";
        	}
        			?>
					</a></li>|
					<li class="top_link"><a href="loginform.php">
					<?php 
	if(isset($_SESSION['user'])){
				echo "<a href='logout.php'>LogOut</a>";
        	}else {
        		echo "Not logged in";
        	}
 ?>
					</a></li>
					<li>
						
					</li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>

        
        
</body>
</html>