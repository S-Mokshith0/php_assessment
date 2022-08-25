<?php
	

					$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
					mysqli_select_db ($con,'blockchain');
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
		margin:0 auto;
		color: white;

	}

ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 12%;
		background-color: #7792b1;
		position: fixed;
		height: 850px;
		overflow: auto;
	}

li a{
		display: block;
		color: #000;
		padding: 20px 16px;
		text-decoration: none;
	}

li a.active {
				background-color: #5f728b;
				color: white;
			}

li a:hover:not(.active) {
							background-color: #555;
							color: white;
						}
.inner_container
{
	background:rgba(44,62,80,0.7);
	padding:40px;
	width:80%;
	margin:auto;
	margin-top:-5%;
	height:450px;
	margin-left:15%;
	border-radius:15px;
	height: auto;
}
.button
{
	border:none;
	width:200px;
	background:white;
	color:#000;
	font-size:16px;
	line-height:25px;
	padding:10px 0;
	border-radius:15px;
	cursor:pointer;
	
}
.button:hover
{
	color:#fff;
	background-color:black;
}
table
{
	width:100%;
	color:white;
}



</style>
</head>
<body >

<ul>
  <li class="active"><font face = "Times New Roman" size = "4"><a class="active"  href="home.php">Home</a></li>
  <li><a href="home.php">History</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
 </font>
</ul>
 
<div style="margin-left:-15%;padding:8% 300px; height:515px; background-image:url('https://static.vecteezy.com/system/resources/previews/000/543/898/original/blockchain-technology-fintech-cryptocurrency-block-chain-server-abstract-background-linked-block-contain-cryptography-hash-and-transaction-data-new-futuristic-system-technology-vector-illustration.jpg'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment:fixed ;">
  <form action="signup1.php" method="post">
			<center>
			<p style="margin-left:30%;margin-top:-11%;font-size:400%;color:white"><b>Mr.JOHN'S WALLET</b></p></center>
			
				
			<?php
				$query1="select * from transaction_details where cus_id=1";
				$query_run2=mysqli_query($con,$query1);
				$total=0;
				while ($row = mysqli_fetch_array($query_run2))
				{
					
					 $total=$total+$row['total_cost']; 
				}
			?>
			
			<center><p style=" margin-left:10%;font-size:60px;margin-top:-0%;font-family:Times New Roman";><u><i>Wallet:</u> ₹</i><?php echo $total; ?></p></center><br>
			<div class="inner_container">
			<h3><center><div style="margin-left:10%;font-size:250%;color:white"><b>TRANSACTIONS</b></div></h3></center><br>
				<?php
					$query3="select * from transaction_details where cus_id='1'";
					$query_run4=mysqli_query($con,$query3);?>
						<table style="margin-left:2%;";>
							<tr style ="margin-left:-5%;font-size:190%;">
								<th><i><u>Transactions Id</u></i></th>
								<th><i><u>Product Name</u></i></th>
								<th><i><u>No Of Items</u></i></th>
								<th><i><u>Cost</u></i></th>
							</tr>
							<tr>
								<?php while ($row = mysqli_fetch_array($query_run4)){?>
							<tr>
								<td style ="font-size:150%;"><center><?php echo $row['transac_id']; ?></center></td>
								<td style ="font-size:150%;"><center><?php echo $row['contents']; ?></center></td>
								<td style ="font-size:150%;"><center><?php echo $row['no_of_items']; ?><center></td>
								<td style ="font-size:150%;"><center><?php echo $row['total_cost']; ?></center></td>
							</tr>
								<?php	}	?>
						</table>
						
						
						
								
						
			
			</div>
			
			
			
		
				
			
			</center>
			
		</form>
		
</div>

</body>
</html>