<?php session_start()?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>eli-e shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script language="Javascript">

            function imprSelec(nombre) {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open(' ', 'popimpr');
            ventimp.document.write( ficha.innerHTML );
            ventimp.document.close();
            ventimp.print( );
            ventimp.close();
        }

	    </script>
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
                <br>
                <h2 class="align-center">Carro de compra</h2>
                <br>
                <div class="table-wrapper" id="content">
                    <table>
                        <thead>
                            <tr>
                                <th class="10u">Descripcion</th>
                                <th class="4u">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $host="fdb29.awardspace.net";
                                $database="3670505_shop";
                                $user="3670505_shop";
                                $password="Password123.";
                            
                                $mysqli = new mysqli($host, $user, $password, $database);

                                $idUser = $_SESSION['idUser'];

                                $query = "select PRODUCTS.idProduct, productPrice, productDescription from CART join PRODUCTS 
                                WHERE (PRODUCTS.idProduct = CART.idProduct) AND (idUser = '$idUser')";
                                $result = $mysqli->query($query);

                                $mysqli->close();

                                $total = 0.00;

                                for ($i = 1 ; $row = $result->fetch_assoc(); $i++) {
                                    echo ("
                                        <tr>
                                            <td>".$row['productDescription']."</td>
                                            <td>$ ".$row['productPrice']."</td>
                                        </tr>");

                                    $total += $row['productPrice'];
                                }
                        echo("</tbody>
                        <tfoot>
                            <tr>
                                <td>Total</td>
                                <td>$ $total</td>
                            </tr>
                        </tfoot>
                    </table>");
                    ?>
                </div>
                <div class="align-center">
                    <form method="post" action="assets/scripts/purchase.php">
                        <div class="12u$ align-center">
                            <br>
                            <ul class="actions">
                                <li><input type="submit" value="Purchase"/></li>
                                <a class="button alt" href="javascript:imprSelec('content')" >Imprimir</a>
                            </ul>
                            <br><br>
                        </div>
                    </form>
                </div>
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