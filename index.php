<!DOCTYPE html>
<html>
<head>
	<title>Stack Web Application</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	<div id="msg">
		<?php if(isset($_GET['msg'])){ ?>
		<p><?php echo $_GET['msg'] ; } ?></p>

		<?php if(isset($_GET['data']) ){ ?>
		<p><?php echo "data ".$_GET['data'] ;} ?></p>
	</div>

	<div class="container">
        <div class="content">
            <div class="title">
                  Stack Web Application
            </div>
	        <form action="main.php" method="POST">
	       	 	<button class="push" name="push">push</button>
			  	<button class="special" name="special">special</button><br>
				<input type="text" name="data" placeholder="data"><br>
				<input class="text-form" type="text" name="index" placeholder="index">
			</form>
			<br>
			<form action="main.php" method="POST">
			  	<button class="pop" name="pop">pop</button>
			</form>
	        <table>
	        	<tr>
	        		<th>stack data</th>
	        	</tr>
	        	<?php include 'class/database.php' ; ?>
	        	<?php $db = new Database(); ?>
	        	<?php 
	        		for( $i=$db->count_data()-1 ; $i>=0 ; $i-- ){ 
	        				$row = $db->select_data($i);
	        	?>
	        	<tr>
	        		<td><?php echo $row['data'] ?></td>
	        	</tr>
	        	<?php } ?>
	        </table>
        </div>
    </div>
	
</body>
</html>