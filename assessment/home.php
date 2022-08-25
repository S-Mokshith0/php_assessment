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
		height: 100%;
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
	margin-top:0%;
	height:450px;
	margin-left:30%;
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
 
<div style="margin-left:-15%;padding:8% 300px; height:515px; background-image:url('https://static.vecteezy.com/system/resources/previews/000/543/898/original/blockchain-technology-fintech-cryptocurrency-block-chain-server-abstract-background-linked-block-contain-cryptography-hash-and-transaction-data-new-futuristic-system-technology-vector-illustration.jpg'); background-size:1750px 800px;  background-repeat:no-repeat,no-repeat;background-attachment: fixed ;">
   
			 <div class="inner_container">
				<center>
			<h1 style="font-size:400%;font-family:Times New Roman";><u>WELCOME  CUSTOMER</u></h1>
			</center>
			<center> 
				<table>
					<tr>
					<th><p style="font-size:30px;font-family:Times New Roman";><u>MR.JOHN</u></p></th>
					<th><h2 style="font-size:30px;font-family:Times New Roman";><u>MRS.DIGGLE</u></h2></th>
					</tr>
					
					<tr>
					<td><center><button class="button" name="button" type="button" onclick="location.href='mr_john.php'">CHECK YOUR TRANSACTIONS</button></center></td>
					<td><center><button class="button" name="button" type="button" onclick="location.href='mr_diggle.php'">CHECK YOUR TRANSACTIONS</button></center></td>
					</tr>
				</table>
			</center>
			<center>
			</div>
			</center>
		
</div>
</body>
</html>