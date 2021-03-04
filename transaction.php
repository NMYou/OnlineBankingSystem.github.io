<?php 
	require_once ('process/database.php');
	$sql3 = "SELECT * FROM `transactionhistory`";
	$result3 = mysqli_query($conn, $sql3);

?>


<html>
<head>
	<title>Employee Panel | PAYROLL MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav>
			<h1>Nilesh Maurya.</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.php">HOME</a></li>
				<li><a class="homeblack" href="viewcus.php">View Customers</a></li>
				<li><a class="homered" href="transaction.php">Transaction</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Transaction History</h2>
    	

    	<table>

			<tr>
			<th align = "center">Transaction ID.</th>
				<th align = "center">Sender Name</th>
				<th align = "center">Receiver Name</th>
				<th align = "center">Transaction Amount</th>
				
			</tr>

			<?php
				while ($customers = mysqli_fetch_assoc($result3)) {
					
					echo "<tr>";
					
					echo "<td>".$customers['transactionid']."</td>";
					echo "<td>".$customers['sender']."</td>";
					echo "<td>".$customers['receiver']."</td>";
					echo "<td>".$customers['amount']." Rs</td>";
					
				}

			?>

		</table>
  
<br>
<br>
<br>
<br>
<br>


</div>
</div>
</body>
</html>