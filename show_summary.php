<?php
include 'includes/header.html';
require_once'config.php';
require_once 'computations.php';
?>
<!DOCTYPE html>
<html>
<body>
<div class="container">
	<h3>Music Genre Response</h3>
	<?php
	$kpop = new Formulas;
			$kpop_table = ($kpop->build_table($genres['kpop']));
			$kpop_genre   = ($kpop->tendency($genres['kpop']));

			$rnb = new Formulas;
			$rnb_table = ($rnb->build_table($genres['rnb']));
			$rnb_genre   = ($rnb->tendency($genres['rnb']));

			$opm = new Formulas;
			$opm_table = ($opm->build_table($genres['opm']));
			$opm_genre   = ($opm->tendency($genres['opm']));

			$rock = new Formulas;
			$rock_table = ($rock->build_table($genres['rock']));
			$rock_genre   = ($rock->tendency($genres['rock']));

			$lovesong = new Formulas;
			$lovesong_table = ($lovesong->build_table($genres['lovesong']));
			$lovesong_genre   = ($lovesong->tendency($genres['lovesong']));
	?>
	<div class="jumbotron text-center">
 
		<table class="table table-bordered table-hover">
				<!-- for headers in response table (survey_id, name, genres) -->
				<tr>
					<?php if (sizeof($stored_header) > 0): ?>
						<?php foreach ($stored_header as $header): ?>
							<th>
								<?php echo ucwords(str_replace('_', ' ', $header));  ?>
							</th>
						<?php endforeach ?>
					<?php endif ?>
				</tr>
				<!-- for individual responses of students -->
				<?php if ($stored_data && (sizeof($stored_data) > 0)): ?>
					<?php foreach ($stored_data as $data): ?>
						<tr>
							<?php if (is_array($data)): ?>
								<?php foreach ($data as $key => $record): ?>
									<td>
											<?php echo $record; ?>
										
									</td>
								<?php endforeach ?>
							<?php endif ?>
						</tr>
					<?php endforeach ?>
				<?php endif ?>	

		</table>
	</div>

	<div class="genre_tables">

		  <!-- frequency table for each genre -->
		  <ul class="nav nav-pills nav-justified" role="tablist">
		    <li role="presentation" class="active"><a href="#kpop" aria-controls="kpop" role="tab" data-toggle="tab">Kpop</a></li>
		    <li role="presentation"><a href="#opm" aria-controls="opm" role="tab" data-toggle="tab">Opm</a></li>
		    <li role="presentation"><a href="#rnb" aria-controls="rnb" role="tab" data-toggle="tab">Rnb</a></li>
		    <li role="presentation"><a href="#rock" aria-controls="rock" role="tab" data-toggle="tab">Rock</a></li>
		    <li role="presentation"><a href="#lovesong" aria-controls="lovesong" role="tab" data-toggle="tab">Lovesong</a></li>
		  </ul>

		  <div class="tab-content">

		  	<!-- for kpop frequency table and mean median mode -->
		    <div role="tabpanel" class="tab-pane active" id="kpop">
		    	<div class="container-fluid">
		    	<div id="kpop_table">
				<h4 class="header">Kpop</h4>
				
				<div class="row">
					<div class="col-sm-9">
						<table class="table table-bordered">
							<?php foreach ($kpop_table as $row): ?>
								<tr>
									<?php foreach ($row as $col): ?>
										<td>
											<?php echo $col; ?>
										</td>
									<?php endforeach ?>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="col-sm-3">
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="badge"><?php echo ($kpop_genre['mean']); ?></span>
						    Mean
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo $kpop_genre['median']; ?></span>
						    Median
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo str_replace('class_', '', $kpop_genre['mode']); ?></span>
						    Mode
						  </li>
						</ul>
					</div>
				</div>

				</div>
		    	</div>
		    </div>

		    <!-- for opm frequency table and mean median mode -->
		    <div role="tabpanel" class="tab-pane" id="opm">
		    	<div class="container-fluid">
		    	<div id="opm_table">
				<h4 class="header">Opm</h4>
				
				<div class="row">
					<div class="col-sm-9">
						<table class="table table-bordered">
							<?php foreach ($opm_table as $row): ?>
								<tr>
									<?php foreach ($row as $col): ?>
										<td>
											<?php echo $col; ?>
										</td>
									<?php endforeach ?>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="col-sm-3">
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="badge"><?php echo ($opm_genre['mean']); ?></span>
						    Mean
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo $opm_genre['median']; ?></span>
						    Median
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo str_replace('class_', '', $opm_genre['mode']); ?></span>
						    Mode
						  </li>
						</ul>
					</div>
				</div>

				</div>
		    	</div>
		    </div>

		    <!-- for rnb frequency table and mean median mode -->
		    <div role="tabpanel" class="tab-pane" id="rnb">
		    	
		    	<div class="container-fluid">
		    	<div id="rnb_table">
				<h4 class="header">Rnb</h4>
				
				<div class="row">
					<div class="col-sm-9">
						<table class="table table-bordered">
							<?php foreach ($rnb_table as $row): ?>
								<tr>
									<?php foreach ($row as $col): ?>
										<td>
											<?php echo $col; ?>
										</td>
									<?php endforeach ?>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="col-sm-3">
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="badge"><?php echo ($rnb_genre['mean']); ?></span>
						    Mean
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo $rnb_genre['median']; ?></span>
						    Median
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo str_replace('class_', '', $rnb_genre['mode']); ?></span>
						    Mode
						  </li>
						</ul>
					</div>
				</div>

				</div>
		    	</div>
		    </div>

		    <!-- for rock frequency table and mean median mode -->
		    <div role="tabpanel" class="tab-pane" id="rock">
		    	<div class="container-fluid">
		    	<div id="rock_table">
				<h4 class="header">Rock</h4>
				
				<div class="row">
					<div class="col-sm-9">
						<table class="table table-bordered">
							<?php foreach ($rock_table as $row): ?>
								<tr>
									<?php foreach ($row as $col): ?>
										<td>
											<?php echo $col; ?>
										</td>
									<?php endforeach ?>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="col-sm-3">
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="badge"><?php echo ($rock_genre['mean']); ?></span>
						    Mean
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo $rock_genre['median']; ?></span>
						    Median
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo str_replace('class_', '', $rock_genre['mode']); ?></span>
						    Mode
						  </li>
						</ul>
					</div>
				</div>

				</div>
		    	</div>
		    </div>

		    <!-- for lovesong frequency table and mean median mode -->
		    <div role="tabpanel" class="tab-pane" id="lovesong">
		    	<div class="container-fluid">
		    	<div id="lovesong_table">
				<h4 class="header">Lovesong</h4>
				
				<div class="row">
					<div class="col-sm-9">
						<table class="table table-bordered">
							<?php foreach ($lovesong_table as $row): ?>
								<tr>
									<?php foreach ($row as $col): ?>
										<td>
											<?php echo $col; ?>
										</td>
									<?php endforeach ?>
								</tr>
							<?php endforeach ?>
						</table>
					</div>
					<div class="col-sm-3">
						<ul class="list-group">
						  <li class="list-group-item">
						    <span class="badge"><?php echo ($lovesong_genre['mean']); ?></span>
						    Mean
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo $lovesong_genre['median']; ?></span>
						    Median
						  </li>
						  <li class="list-group-item">
						    <span class="badge"><?php echo str_replace('class_', '', $lovesong_genre['mode']); ?></span>
						    Mode
						  </li>
						</ul>
					</div>
				</div>

				</div>
		    	</div>
		    </div>
		  </div>



</div>
</body>
 <script src="assets/js/jquery.js"></script>
 <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/controller.js"></script>
</html>