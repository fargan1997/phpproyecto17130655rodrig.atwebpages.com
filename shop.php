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
                    <div class="row itembox">

                        <?php
                            $host="fdb29.awardspace.net";
                            $database="3670505_shop";
                            $user="3670505_shop";
                            $password="Password123.";
                        
                            $mysqli = new mysqli($host, $user, $password, $database);

                            $query = "SELECT * FROM PRODUCTS";
                            $result = $mysqli->query($query);

                            $mysqli->close();

                            $arr = array();

                            for ($i = 1 ; $row = $result->fetch_assoc(); $i++) {
                                $arr[$i] = $row;
                                echo ("
                                <div class='4u'>
                                    <span class='image fit'>
                                        <div class='box'>
                                            <div class='image fit'>
                                                <img style='height:300px; object-fit: cover;
                                                object-position: center center;' src='".$row['productImageURL']."' alt='' />
                                            </div>
                                            <div class='content'>
                                                <header class='align-center'>
                                                    <h3>$ ".$row['productPrice']."</h3>
                                                    <h2>".mb_strimwidth($row['productDescription'], 0, 25, "")."</h2>
                                                </header>
                                                <footer class='align-center'>
                                                    <form method='post' action='assets/scripts/addProduct.php'>
                                                        <input style='width:0px; height:0px;' type='hidden' name='idProduct' value='".$row['idProduct']."'>
                                                        <input class ='align-center' type='submit' value='Add to Cart'/>
                                                    </form>
                                                </footer>
                                            </div>
                                        </div>
                                    </span>
                                </div>");
                            }
                        ?>
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