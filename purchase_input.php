<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>購入画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>

	<?php
	if (!isset($_SESSION['customer'])) {
		echo "購入手続きを行うにはログインしてください。";
	} elseif (!empty($_SESSION['product'])) { 
	?>
		<table>
			<tr>
				<td>お名前：</td>
				<td><?= $_SESSION['customer']['name'] ?></td>
			</tr>
			<tr>
				<td>ご住所：</td>
				<td><?= $_SESSION['customer']['address'] ?></td>
			</tr>
		</table>
		<hr>

		<?php require 'cart.php';?>
		<hr>

		<p>内容をご確認いただき、ご講習を確定してください。</p>
		<a href="purchase_output.php">購入を確定する</a>
	<?php
	}
	?>
	
</body>

</html>