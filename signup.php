<?php session_start()?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>eli-e shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <script> 
            function validateForm(){
                
                var txtEmail = document.getElementById('email').value;
                var txtPassword = document.getElementById('password').value;
                var txtName = document.getElementById('name').value + " " + document.getElementById('lastName').value;;

                var EmailRegEx = /\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/gi;
                var PasswordRegEx = /(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z]*([0-9#$-/:-?{-~!"^_`\[\]]))(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]*[a-zA-Z])[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]{4,}/g;
                var NameRegEx = /[a-zA-Z][a-zA-Z]+/gi;

                if(!EmailRegEx.test(txtEmail)){
                    alert('ERROR: El correo no es valido');
                    return false;
                }

                if(txtPassword == null || txtPassword.length == 0){
                    alert('ERROR: contraseña no valida');
                    return false;
                }

                if(!NameRegEx.test(txtName)){
                    alert('ERROR: Nombre solo debe contener letras');
                    return false;
                }

                return true;
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
                <h2 class="align-center">Registrarse</h2>
                <br><br>
                <div class="itembox">
                    <form method="post" action="assets/scripts/signUp.php" onsubmit="return validateForm()">
                        <div class="row uniform">
                            <div class="itembox">
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userName" id="name" value="" placeholder="Name" />
                                <br><br>
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="lastName" id="lastName"value="" placeholder="Last Name" />
                                <br><br>
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userProfilePicture" value="" placeholder="Profile Picture Link" />
                                <br><br>
                                <input type="email" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userEmail" id="email" value="" placeholder="Email" />
                                <br><br>
                                <input type="password" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userPassword" id="password" value="" placeholder="Password" />
                            </div>
                            <div class="12u$ align-center">
                                <br>
                                <ul class="actions">
                                    <li><input type="submit" value="SignUp"/></li>
                                    <li><a class="button alt" href="login.php">Login</a>
                                </ul>
                                <br>
                            </div>
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