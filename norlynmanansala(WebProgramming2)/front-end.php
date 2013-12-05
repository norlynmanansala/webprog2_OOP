<html>
	<head>
		<title>Messaging</title>
	</head>
	<body>
		<center>
		<table border = '2'><tr><td>
		<div>
			<?php 
			/*
			* building connection to cobfig.php
			* calling function in MessageDAO.php
			*/
			include "config.php";
			$records = MessageDAO::getAllMessages();
			?>
			<div>
				<div>
					<center><h3><font face = "Verdana">Message(s)</font></h3></center>
				</div>
				<!-- Calling foreach function for retrieving datasss -->
				
				<?php foreach ($records as $record): ?>

					<?php if( $record['is_approved']  == ('Y')){ ?>

					<div>
						<table border = '1'><tr><td><div>

							<?=$record['name']?><br> 
							<?=$record['date_posted']?>

						</div></td>
						<td><textarea>

							<?=$record['message']?>

						</textarea></td><br>
					</div>
					<?php }else{	}?>

					<?php endforeach;?></tr></table><br>
					
					<center><a href="back-end.php"><input type = "submit" value = "View Message Data" ></a></center><br>		
			</div>
		</div>	
		</td></tr><br><tr><td>
		<center>
		<div>
			<div><h3><font face = "Verdana" >Post New Message</font></h3></div>
			<div>
				<form method = "POST" action = "insert.php">
				<div>
				Name:<br>
				<input type = "text" name = "name" style ="height:30px" placeholder = "Name..." autofocus>
				</div>
				<div>
				Email:<BR>
				<input type = "text" name = "email" style ="height:30px" placeholder = "Email...">
				</div>
				<div>
				Message:<br>
				<textarea name = "message" placeholder = "Message..."></textarea>	
				</div>
				<div><br>
					<input type = "submit" value = "POST Message" ></td></tr><br>
				</form>
				</div>
				</div>
			</div>
		</div>

		</td></tr></table>
		</center>
	</body>
</html>