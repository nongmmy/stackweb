<?php include("database.php") ; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Stack Web Application</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	<div class="flex-center full-height">
        <div class="content">
            <div class="title m-b-md">
                  Stack Web Application
            </div>
	        <form action="main.php" method="POST">
	       	 	<button name="push">push</button>
			  	<button name="special">special</button><br>
				<input type="text" name="data" placeholder="data"><br>
				<input class="text-form" type="text" name="index" placeholder="index">
			</form>
			<br>
			<form action="main.php" method="POST">
			  	<button name="pop">pop</button>
			</form>
	        <table>
	        	<tr>
	        		<th>stack data</th>
	        	</tr>
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

	
	<br>


	
</body>
</html>