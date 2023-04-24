<?php 
  session_start(); 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
			header("refresh: 3; url=search.php");
          ?>
      	</h3>
      </div>
  	<?php endif ?>

   
</div>
		
</body>
</html>









