<?php session_start()?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>eli-e shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

        <header id="header" class="bar">
            <div class="logo"><a href="index.php">eli-e shop</a></div>
            <div class="icons"><a href="shop.php"><img class="iconMau" src="images/shop.png"></a></div>
            <div class="icons"><a href="cart.php"><img class="iconMau" src="images/shopCart.png"></a></div>
            <div class="icons"><a href="payment.php"><img class="iconMau" src="images/creditCard.png"></a></div>
            <div class="icons"><a href="login.php"><img class="roundIcon" src="
            <?php echo($_SESSION['userProfilePicture']);?>"></a></div>
            <?php 
                if($_SESSION['idUser'] == 15) {
                    echo('<div class="icons"><a href="addItem.php"><img class="iconMau" src="images/edit.png"></a></div>');
                }
            ?>
        </header>
            
            <section class="wrapper style2">
                <h2 class="align-center">Agregar al catalogo</h2>
                <form method="post" action="assets/scripts/insertItem.php">
                        <div class="row uniform">
                            <div class="itembox">
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="URL" value="" placeholder="Image URL"/>
                                <br><br>
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="Description" value="" placeholder="Description"/>
                                <br><br>
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="Price" value="" placeholder="Price"/>
                                <br><br>
                                <input type="text" style="width: 20%; margin-inline-start: 25%; text-align: center;" name="Stock" value="" placeholder="Stock"/>
                            </div>
                            <div class="12u$ align-center">
                                <br>
                                <ul class="actions">
                                    <li><input type="submit" value="Add"/></li>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </form>
                
            </section>

			<footer id="footer">
				<div class="container">
					<ul class="icons">
                    <li><a href="https://www.facebook.com/wero.munoz2" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.instagram.com/fxrgn_/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
				</div>
			</footer>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>