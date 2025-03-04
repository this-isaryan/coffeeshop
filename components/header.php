<header class="header">
	<div class="flex">
		<a href="/" class="logo"><img src="img/coffee_header.png"></a>
		<nav class="navbar">
			<a href="/">home</a>
			<a href="view_products.php">products</a>
			<a href="order.php">orders</a>
			<a href="about.php">about us</a>
			<a href="contact.php">contact us</a>
		</nav>
		<div class="icons">
			<i class="bx bxs-user" id="user-btn"></i>
			<?php
			$count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
			$count_wishlist_items->execute([$user_id]);
			$total_wishlist_items = $count_wishlist_items->rowCount();
			?>
			<a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><div class="sup"><?= $total_wishlist_items ?></div></a>
			<?php
			$count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
			$count_cart_items->execute([$user_id]);
			$total_cart_items = $count_cart_items->rowCount();
			?>
			<a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><div class="sup"><?= $total_cart_items ?></div></a>
			<i class='bx bx-list-plus' id="menu-btn" style="font-size: 2rem;"></i>
		</div>
		<div class="user-box">
			<?php
			if (isset($_SESSION['user_id'])) {
			?>
				<p><span><?php echo $_SESSION['user_name']; ?></span></p>
				<p><span><?php echo $_SESSION['user_email']; ?></span></p>
				<form method="post">
					<button type="submit" name="logout" class="logout-btn">log out</button>
				</form>

			<?php
			} else {
			?>

				<h3 style="margin-bottom: 1rem">please login or register</h3>
				<div class="flex-btn">
					<a href="login.php" class="btn">login</a>
					<a href="register.php" class="btn">register</a>
				</div>
			<?php
			}
			?>

		</div>
	</div>
</header>