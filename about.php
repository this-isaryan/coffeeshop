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
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Coffee Shop - about us page</title>
</head>

<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>about us</h1>
		</div>
		<div class="title2">
			<a href="/greenCoffee">home </a><span>/ about</span>
		</div>
		<div class="about-category">
			<div class="box">
				<img src="img/americano.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>Americano</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/latte.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>latte</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/cappuccino.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>Cappuccino</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/oreofr.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>Oreo Frappé</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<section class="services">
			<div class="title">
				<img src="img/coffee_logo.png" class="logo">
				<h1>why choose us</h1>
				<p>Choose Coffee Co. for expertly roasted, sustainably sourced beans that support both the environment and our communities.
				</p>
			</div>
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
		<div class="about">
			<div class="row">
				<div class="img-box">
					<img src="img/cfe.webp" height="549px">
				</div>
				<div class="detail">
					<h1>visit our beautiful showroom!</h1>
					<p>Our showroom is an expression of what we love doing; being creative with floral and plant
						arrangements.
						Whether you are looking for a florist for your perfect wedding, or just want to uplift any room
						with
						some one of a kind living decor, Blossom With Love can help.</p>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
		</div>
		<div class="testimonial-container">
			<div class="title">
				<img src="img/coffee_logo.png" class="logo">
				<h1>what people say about us</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam
					tenetur
				</p>
			</div>
			<div class="container">
				<div class="testimonial-item active">
					<img src="img/01.jpg">
					<h1>Meet Solanki, Frequent Buyer</h1>
					<p>I appreciate how Green Coffee supports sustainable practices and the community. Not only is the coffee delicious, but it also feels good knowing my purchase makes a difference.</p>
				</div>
				<div class="testimonial-item">
					<img src="img/04.png">
					<h1>john smith</h1>
					<p>Coffee Co. has truly transformed my mornings. The quality and richness of the coffee are unmatched. It’s like a daily gourmet treat!</p>
					</div>
					<div class="testimonial-item">
						<img src="img/03.jpg">
						<h1>selena ansari</h1>
						<p>I choose Coffee Co. for their commitment to the environment. Their coffee is as good for the planet as it is for my coffee cup!</p>
					</div>
					<div class="testimonial-item">
						<img src="img/02.jpg">
						<h1>Aryan, Barista</h1>
						<p>As a barista, I recommend Coffee Co. to all coffee lovers. Their wide range and consistent quality make them stand out in the coffee market.</p>
					</div>
					
				<div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
				<div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
			</div>
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide() {
			slides[index].classList.remove('active');
			index = (index + 1) % slides.length;
			slides[index].classList.add('active');
		}

		function prevSlide() {
			slides[index].classList.remove('active');
			index = (index - 1 + slides.length) % slides.length;
			slides[index].classList.add('active');
		}
	</script>
	<?php include 'components/alert.php'; ?>
</body>

</html>