<?php
include 'components/connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];
} else {
	$user_id = '';
}

if (isset($_POST['logout'])) {
	session_destroy();
	header("location: login.php");
}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="/img/coffee_logo.ico">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Coffee Shop - home page</title>
</head>

<body>
	<?php include 'components/header.php'; ?>
	<div class="main">

		<section class="home-section">
			<div class="slider">
				<div class="slider__slider slide1">
					<div class="overlay"></div>
					<div class="slide-detail">
						<h1>Savor the Moment</h1>
						<p>Discover the finest blends from around the world, roasted to perfection just for you.</p>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
					<div class="hero-dec-top"></div>
					<div class="hero-dec-bottom"></div>
				</div>
			</div>
		</section>
		<section class="thumb">
			<div class="box-container">
				<div class="box">
					<img src="img/thumb2.jpg">
					<h3>green tea</h3>
					<p>Explore the serene complexity of our Green Tea, a soothing blend rich in antioxidants and naturally enhancing vitality and health.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb0.jpg">
					<h3>lemon tea</h3>
					<p>Awaken your senses with our Lemon Tea—bright, bold, and beautifully infused with a burst of citrusy freshness.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb1.jpg">
					<h3>Coffee Shop</h3>
					<p>Enjoy a perfect complement to your coffee with our freshly baked, buttery croissants, golden and flaky every morning.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="box">
					<img src="img/thumb.jpg">
					<h3>green tea</h3>
					<p>Delight in the delicate flavor of our premium Green Tea, crafted to offer a tranquil tea experience with every cup.</p>
					<i class="bx bx-chevron-right"></i>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="box-container res-grid">
				<div class="box">
					<img src="img/about-us.png">
				</div>
				<div class="box">
					<img src="img/coffee_logo.png" class="logo" width="90px">
					<span>healthy coffee</span>
					<h1>save up to 50% off</h1>
					<p>Take advantage of our special promotion today! Get up to 50% off on our exclusive range of Healthy Coffee, meticulously sourced and roasted to offer both wellness and exceptional taste. Don't miss out—your journey to a healthier, tastier coffee experience starts here!</p>
				</div>
			</div>
		</section>
		<section class="shop">
			<div class="title">
				<img src="img/coffee_logo.png" class="logo">
				<h1>Trending Products</h1>
			</div>
			<div class="row">
				<img src="img/about.webp" height="410px">
				<div class="row-detail">
					<img src="img/basil.webp">
					<div class="top-footer">
						<h1>a cup of coffee keeps you active</h1>
					</div>
				</div>
			</div>
			<div class="box-container">
				<div class="box">
					<img src="img/card.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/card0.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/card1.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/card2.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/10.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
				<div class="box">
					<img src="img/6.webp">
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</section>
		<section class="shop-category">
			<div class="box-container">
				<div class="box">
					<img src="img/6.1.webp" width="570px">
					<div class="detail">
						<span>BIG OFFERS</span>
						<h1>Extra 15% off</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
				<div class="box">
					<img src="img/7.webp" width="570px">
					<div class="detail">
						<span>new in taste</span>
						<h1>coffee house</h1>
						<a href="view_products.php" class="btn">shop now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="img/icon2.png">
					<div class="detail">
						<h3>great savings</h3>
						<p>save big every order</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon1.png">
					<div class="detail">
						<h3>24*7 support</h3>
						<p>one-on-one support</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon0.png">
					<div class="detail">
						<h3>gift vouchers</h3>
						<p>vouchers on every festivals</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon.png">
					<div class="detail">
						<h3>worldwide delivery</h3>
						<p>dropship worldwide</p>
					</div>
				</div>
			</div>
		</section>
		<section class="brand">
			<div class="box-container">
				<div class="box">
					<img src="img/brand.jpg">
				</div>
				<div class="box">
					<img src="img/brand2.jpg">
				</div>
				<div class="box">
					<img src="img/brand3.jpg">
				</div>
				<div class="box">
					<img src="img/brand4.jpg">
				</div>
				<div class="box">
					<img src="img/brand5.jpg">
				</div>
			</div>
		</section>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>

</html>