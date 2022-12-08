<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>SHOES WORLD</title>
	<link rel="icon" href="img/slogo.png" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/slogo.png">
		<label>StepIn - The Shoes WonderLand</label>

			<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i>&nbsp;&nbsp;<?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>

	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];

								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = $query->fetch_array ();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>



	<br>
<div id="container">
	<div class="nav">
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Our Policy</a></li>
				
			</ul>
	</div>

	<br />
	<br />

		<div id="content">
			<legend><h3>Privacy Policy</h3></legend>
				<p>This privacy policy ("policy") will help you understand how StepIn ("us", "we", "our") uses and
					protects the data you provide to us when you visit and use <strong>stepin_wonderlandshoes.co.org </strong>("website", "service").
					We reserve the right to change this policy at any given time, of which you will be promptly
					updated. If you want to make sure that you are up to date with the latest changes, we advise
					you to frequently visit this page.</p>
				<p>	
					The StepIn Shoes Store Incorporated respect the privacy of the visitors
					to the StepIn Shoes Store <strong>stepin_wonderlandshoes.co.org </strong> website and the local websites connected with it, and take great care to protect your
					information... This privacy policy tells you what information we collect from you, how we may use it and
					the steps we take to ensure that it is protected.
				</p>
			<hr>
				<h4>Protection of visitors information</h4>
					<p>In order to protect the information you provide to us by visiting our website we have implemented various
						security measures. Your personal information is contained behind secured networks and is only accessible
						by a limited number of people, who have special access rights and are required to keep the information
						confidential.Please keep in mind though that whenever you give out personal information online there is a
						risk that third parties may intercept and use that information. While StepIn Shoes Store strives to protect its user's
						personal information and privacy, we cannot guarantee the security of any information you disclose online
						and you do so at your own risk.</p>
			<hr>
				<h4>Use of cookies</h4>
					<p>Cookies are small pieces of text sent to your browser by a website you visit.
						They help that website remember information about your visit, which can both make it easier to visit the site 
						again and make the site more useful to you.
					</p>
					<p>You can turn off all cookies, in case you prefer not to receive them. You can also have your computer warn
						you whenever cookies are being used. For both options you have to adjust your browser settings
						(like internet explorer). There are also software products available that can manage cookies for you.
						Please be aware though that when you have set your computer to reject cookies, it can limit the
						functionality of the website you visit and it’s possible then that you do not have access to some of the
						features on the website.</p>
			<hr>
				<h4>Online policy</h4>
					<p>The Privacy Policy does not extend to anything that is inherent in the operation of the internet, and
						therefore beyond adidas' control, and is not to be applied in any manner contrary to applicable law or
						governmental regulation. This online privacy policy only applies to information collected through our
						website and not to information collected offline.</p>


		</div>
		
</div>
	<br />
<div>
	<br />
	<div id="footer">
		<div class="foot">
		<label style="font-size:17px;">T&N Co. &copy; </label>
			<p style="font-size:25px;">Wonderland shoes gives you many Varieties Since 2022 </p>
			<p><a href="privacy1.php" >Our Privacy</a></p>
		</div>

			<div id="foot">
				<h4>Links</h4>
					<ul>
					<a href="http://www.instagram.com/_justnishit"><li>Instagram -Nishit</li></a>
						<a href="http://www.instagram.com/__tanmay.____"><li>Instagram -Tanmay</li></a>
						<a href="http://www.twitter.com/nishit_shiv"><li>Twitter -Nishit</li></a>
					</ul>
			</div>
	</div>
</body>
</html>