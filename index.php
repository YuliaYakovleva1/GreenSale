<?php
include('include/data.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Menu</title>

	<link href="css/reset.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

	<?php include('include/header.php') ?>

	<div class="container">
		<h3 class="sale">Green Sale 9.9</h3>

		<section class="sale_cards">
			<div>
				<?php foreach ($card as $key => $val) {
					if ($val['id'] < 7) { ?>
						<div class="card">
							<img src="img/<?= $val['image'] ?>" alt="soup-pack">
							<h3 class="card_title">
								<?= $val['title'] ?>
							</h3>
							<p class="subtitle">
								<?= $val['subtitle'] ?>
							</p>
							<h3 class="price">
								<?= $val['price'] ?>
							</h3>
							<div class="discount">
								<?= $val['discount'] ?>
							</div>
							<span class="old_price">
								<?= $val['old_price'] ?>
							</span>
							<button class="basket">+ Keranjang</button>
						</div>
					<?php }
				} ?>
			</div>
		</section>

		<h3 class="sale">Kategori Untukmu</h3>

		<section class="review">
			<div>
				<?php foreach ($card2 as $key => $val) {
					if ($val['id'] < 13) { ?>
						<div class="review-card">
							<img src="img/<?= $val['image'] ?>" alt="soup-pack">
							<h3 class="card_title">
								<?= $val['title'] ?>
							</h3>
						</div>
					<?php }
				} ?>
			</div>
		</section>
	</div>


	<?php include_once('include/footer.php') ?>

</body>

</html>