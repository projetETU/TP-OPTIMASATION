<?php include ( "inc/connect.inc.php" ); ?>
<?php include ( "inc/close.php" ); ?>

<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];


	$result =$conn -> query("SELECT * FROM user WHERE id='$user'");
		$get_user_email = $result ->fetch_assoc();
			$uname_db = $get_user_email['firstName'];
}
?>
<!DOCTYPE html>
<html lang="en">
		<head>
		<title>Welcome to ebuybd online shop</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
			</head>
			<!-- Google tag (gtag.js) -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SEVJW9KBRP');
</script>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN IN</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php"  aria-label="home">
					<img style=" height: 75px; width: 130px;" src="image/ebuybdlogo.webp">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="home-welcome">
			<div class="home-welcome-text" style="background-image: url(image/homebackgrndimg.webp); height: 380px; ">
				<h1 style="margin: 0px;">Welcome To eBuyBD</h1>
				<h2>Largest Online Shopping In Bangladesh</h2>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/saree.php">
							<img alt="image" src="./image/product/saree/new-designer-fancy-look-attractive-saree-2-original.webp" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/perfume.php">
							<img alt="image" src="./image/product/perfume/Most-Popular-Perfumes-for-Women10.webp" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/hijab.php">
							<img alt="image" src="./image/product/saree/hijab 1.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/toilatry.php">
							<img alt="image" src="./image/product/beauty/toiletries.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/footwear.php">
							<img alt="image" src="./image/product/footwear/footwear1.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/tshirt.php">
							<img alt="image" src="./image/product/saree/tshirts1.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/watch.php">
							<img alt="image" src="./image/product/watch/watches1.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/ornament.php">
							<img alt="image" src="./image/product/ornament/earrings1.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>
