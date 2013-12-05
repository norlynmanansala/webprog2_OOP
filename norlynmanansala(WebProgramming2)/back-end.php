<?php 
	/*
	* building connection to cobfig.php
	* calling function in MessageDAO.php
	*/
	include "config.php";
	$records = MessageDAO::getAllMessages();
?>
<html>
	<head>
		<title>Messaging</title>
	</head>
	<body><center><table border = '2'><tr><td>
		<div>
			<div>
				<center><h3><font face = "Verdana" >Message Data(s)</font></h3></center>
			</div>
			<center>
			<div>
				<div>	
					<table border = '1'>
						<tr><thead>
							<td><div><h4>ID</h4></div></td>
							<td><div><h4>Name</h4></div></td>
							<td><div><h4>Email</h4></div></td>
							<td><div><h4>Message</h4></div></td>
							<td><div><h4>Date Posted</h4></div></td>
							<td><div><h4>Approve</h4></div></td>
							<td><div><h4>Action</h4></div></td>
						</thead></tr>
				</div>
					<!-- Calling foreach function for retrieving datasss -->
					<?php foreach ($records as $record): ?> 

				<div>
					<tr>
						<td><div><center><?=$record['id']?></div></td>
						<td><div><?=$record['name']?></div></td>
						<td><div><?=$record['email']?></div></td>
						<td><div><textarea><?=$record['message']?></textarea></div></td>
						<td><div><?=$record['date_posted']?></div></td>
						<td><div><?=$record['is_approved']?></div></td>
						<td><div><center>

						<?php if($record['is_approved'] == 'N'){?>

							<a href="update.php?id=<?=$record['id'];?>"><input type = "submit" value = "Approve"></a>

						<?php }else{?>

							<a href="reject.php?id=<?=$record['id'];?>"><input type = "submit" value = "Reject" ></a>

						<?php }?>

							<a href="delete.php?id=<?=$record['id'];?>"><input type = "submit" value = "Delete" ></a>
								
						</center></div></td>

					<?php endforeach;?></tr></table>

				</div><br>
					<a href="front-end.php"><input type = "button" value = "Create Message" ></a><br>
			</div>
			</center>
		</div></td></tr></table>
	</body>
</html>