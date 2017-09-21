<?php 
$page_title = 'Welcome to this Site!';
include ('includes/header.html');
?>

<!DOCTYPE html> 
<html>

<body>
	
<div class="intro">
  <h2 style="color:#FFFFFF" >Welcome to MUSIC SURVEY BTIT!</h2>
</div>
 <div class="container" style="text-align: center; margin-top: 90px;">
  <div id = "menu_button" class="btn-group-vertical btn-group btn-group-lg ">
    	<a class="btn btn-primary" href="show_summary.php"> VIEW SUMMARY </a>
    	<a style="margin-top: 5px" class="btn btn-primary" href="entry.php">ANSWER SURVEY</a>
  </div>
</div>
</body>

<?php 
include ('includes/footer.html');
?>