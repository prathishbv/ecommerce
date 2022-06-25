
<?php
  
  // Initialize the session
  session_start();
  $username = isset($_POST['name']) ? $_POST['name'] : "";
  $phno       = isset($_POST['pno']) ? $_POST['pno'] : "";
  $price       = isset($_POST['total']) ? $_POST['total'] : "";
  $proname       = isset($_POST['proname']) ? $_POST['proname'] : "";
  $code       = isset($_POST['code']) ? $_POST['code'] : "";
  $iprice       = isset($_POST['price']) ? $_POST['price'] : "";
  $quantity       = isset($_POST['quantity']) ? $_POST['quantity'] : "";
  $uid = isset($_POST['uid']) ? $_POST['uid'] : "";
//   echo $price;
// echo $proname;
             
  ?>

  
<html>
<img src="logo/logo.jpg" style="width: 200px; margin-left: 250px;">
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style2.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
        <script>
            document.getElementById("current_date").innerHTML = Date();
        </script>
        
	</head>
	<body>
		<header>
			<h1>Report</h1>
			<address contenteditable>
				<p>S Vishnu</p>
				<p>Sakthi Tower, near bus stand<br>Sathyamangalam-638402</p>
				<p>(+91) 9384912720</p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>City Trends<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Vishnu</p>
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Code </span></th>
					<td><span contenteditable><?php echo $uid;?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date and Time</span></th>
					<td><span id="demo" contenteditable></span></td>
                    <script>
                        const d = new Date();
                        document.getElementById("demo").innerHTML = d;
                    </script>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due in Rs:</span></th>
					<td><?php echo $price;?></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Name</span></th>
						<th><span contenteditable>Code</span></th>
						<th><span contenteditable>Quantity</span></th>
						<!-- <th><span contenteditable></span></th> -->
                        <th><span contenteditable>Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable><?php echo $proname;?></span></td>
						<td><span contenteditable><?php echo $code;?></span></td>
						<td><span contenteditable><?php echo $quantity;?></span></td>

						<td><span data-prefix>Rs</span><span><?php echo $price;?></span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span><?php echo $price;?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span data-prefix>$</span><span><?php echo $price;?></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<div contenteditable>
				<p style="margin-left: 200px; font-size: larger; font-weight: bold;"><b>THANK YOU FOR SHOPPING WITH US</b></p> 
			</div>
		</aside>
        <br>
        <aside>
			<div contenteditable>
				<p style="margin-left: 150px; font-size: large; "><b>We will deliver your product within in maximum of 1 week</b></p> 
			</div>
		</aside>
	</body>
</html>