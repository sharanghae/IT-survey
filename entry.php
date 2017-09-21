<?php 
$page_title = 'Welcome to this Site!';
include ('includes/header.html');
?>

<!DOCTYPE html> 

	
<body>
		<h3 style="text-align: center;"> SURVEY FOR MUSIC </h3>
			<h3 style="text-align: center;"> How many day(s) do you listen to the following genre of music in 1 week? </h3>
	<form class="form-horizontal" method="post" style="margin-left: 50px">
		<div class="form-group">
		  
		    <label class="control-label col-sm-2" for="email">Full Name:</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control input-sm" name='fname' placeholder="optional" required>
		    </div>
		</div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="email">KPOP:</label>
		    <div class="col-sm-8">
		      <input input type='number' name='kpop' min='0' max='7' class="form-control input-sm" placeholder="kpop" required>
		    </div>
		</div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="email">RNB:</label>
		    <div class="col-sm-8">
		      <input input type='number' name='rnb' min='0' max='7' class="form-control input-sm" placeholder="rnb" required>
		    </div>
		</div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="email">OPM:</label>
		    <div class="col-sm-8">
		      <input input type='number' name='opm' min='0' max='7' class="form-control input-sm" placeholder="opm" required>
		    </div>
		</div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="email">LOVESONG:</label>
		    <div class="col-sm-8">
		      <input input type='number' name='lovesong' min='0' max='7' class="form-control input-sm" placeholder="lovesong" required>
		    </div>
		</div>

		<div class="form-group">
		    <label class="control-label col-sm-2" for="email">ROCK:</label>
		    <div class="col-sm-8">
		      <input input type='number' name='rock' min='0' max='7' class="form-control input-sm" placeholder="rock" required>
		    </div>
	  	</div>

  		<div class="col-lg-4 col-lg-offset-5">
			<input  type="submit" name="sub" value="Submit" class="btn btn-info">
		</div>
	</form>
</body>

<?php

include 'includes/footer.html';
require 'config.php';

	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_query('CREATE DATABASE IF NOT EXISTS surveystat');
	mysql_select_db('surveystat');


	mysql_query('CREATE TABLE if NOT EXISTS surveytable
	(
	survey_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name varchar(32) not null,
	kpop int,
	rnb int,
	opm int,
	rock int,
	lovesong int
	)');

	$fname = ""; $kpop=0; $rnb=0; $opm=0; $rock=0; $lovesong=0;

	if(isset($_POST['sub']))
	{
	$fname = $_POST['fname'];
	$kpop = $_POST['kpop'];
	$rnb = $_POST['rnb'];
	$opm = $_POST['opm'];
	$rock = $_POST['rock'];
	$lovesong = $_POST['lovesong'];
	}
	
	if ($fname == "" ) {
	# code...exit
	exit();
	}

	mysql_query("START TRANSACTION");
	$insertque = "insert into surveytable (name, kpop, rnb, opm, rock, lovesong) values('$fname', '$kpop', '$rnb', '$opm', '$rock', '$lovesong')";


	if ($insertque)
	{
		mysql_query($insertque);
		mysql_query("COMMIT");
		echo "<script>alert ('Survey Added SuccessFully! ^_^')</script>";
		echo "<script>window.open('index.php,_self')</script>";
	clear();
	}


	else
	{
	mysql_query("ROLLBACK");
	}

function clear(){


$fname = "";
$kpop=0; 
$rnb=0; 
$opm=0;
$rock=0; 
$lovesong=0;
}
?>

</html>
