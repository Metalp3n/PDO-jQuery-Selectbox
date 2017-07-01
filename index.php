<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<!--Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<style media="screen">
		.page-header{
			padding: 20px 0 9px 20px;
			margin: 0 0 20px;
			background-color: #3954A1;
			color: #FFF;
		}
		h2 small{
			color: #afbad9;
		}
		.row{
			margin: 0;
		}
	</style>
	
</head>
<body>

	<?php
		//Load database connection
		require_once("conn.php");

		//Query the table
		$sql="SELECT * FROM `music`";
		$stm = $conn->prepare($sql);
		$stm->execute();
		$data=$stm->fetchAll(PDO::FETCH_OBJ);

	?>

	<div class="page-header">
		<h2> Populate SelectBox with MySQL <small>Using PDO</small></h2>
	</div>

	<br>

	<div class="row">
		<div class="container">
			<div class="col-sm-6 col-md-4">
				<p><strong>Music: Select Title to know the Artist</strong></p>
				<select id="selectbox_id" name="selectbox_name" class="form-control" required>
					<option value=""></option>

					<?php foreach ($data as $register): ?>
							<option value="<?php echo $register->id ?>"><?php	echo $register->title; ?></option>
					<?php endforeach; ?>

				</select>
			</div>

			<div class="col-sm-6 col-md-4">
				<p>Artist: </p>
				<div id="artist" class="alert alert-info" role="alert"></div>
			</div>	
		</div>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function() {

			//Populate textbox depending on drop-down selection
			$('#selectbox_id').change(function(){

				var selectbox_id = $(this).val();
				if (selectbox_id!=0) {
					var data_String;
					data_String = 'selectbox_id='+selectbox_id;
					//alert(data_String);
					$.post('selectbox_query.php',data_String,function(data){
						var data= jQuery.parseJSON(data);
						$('#artist').text(data.artist);
					});

				}else{
					$('#artist').text("");

				}
			});
		});
	</script>

</body>
</html>
