<?php include 'config/db.php'; 
require 'config/session.php';
	
	?>	

<?php 
    Session::start();
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from admin where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    $_SESSION['username'] = $username;
                    header("Location: Dashbord.php");
				}
				
				else{
					$message = "Your Login Name or Password is invalid.";
				  }
            }
       
       
    }  
?>


<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
     <link rel="stylesheet" href="assets/vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="icon" type="image/ico" href="../My portfolio/assets/img/favicon.png" />


    <!-- CSS -->
    <style>
        * {
    box-sizing: border-box;
    font-family: sans-serif;
}
.bg-black{
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);}

body {
    background:url(assets/img/background.jpg) no-repeat center center fixed;
    background-size: cover;
}

.login {
    width: 340px;
    height: 500px;
    border: 4px solid #CCC;
    background: black;
    background-size: cover;
    margin: 88px auto;
    border-radius: 14px;
}

.login .form {
    width: 100%;
    height: 100%;
    padding: 15px 20px;
    ;
}

.login .form h2 {
    color: #FFF;
    font-family: 'Alex Brush';
    text-align: center;
    font-weight: normal;
    font-size: 40px;
    margin-top: 40px;
    margin-bottom: 70px;
}

.login .form input {
    width: 100%;
    height: 40px;
    margin-top: 20px;
    background: rgba(255, 255, 255, .0);
    border: 2px solid rgba(255, 255, 255, .7);
    padding: 0 15px;
    color: #FFF;
    border-radius: 14px;
    font-size: 14px;
}

.login .form input:focus {
    border: 1px solid rgba(255, 255, 255, .8);
    outline: none;
}

 ::-webkit-input-placeholder {
    color: #DDD;
}




.login input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: rgba(255, 255, 255, .8);
    color: #000;
    font-size: 18px;
    border-radius: 20px;
}

.login input[type="submit"]:hover {
    cursor: pointer;
    background: #6cbfe4;
    color: white;
}

.login a {
    text-decoration: none;
    font-size: 12px;
    line-height: 24px;
    color: darkgrey;
}

.login .mar {
    margin-top: 28px
}

.login a:hover {
    color: #6cbfe4;
}
.errorMessage
{
	color:white;
}
    </style>
<!-- CSS -->

</head>
<body>

	<div class="login">
		<div class="form">
        <li><a href="login.php"><img id="logo" src="assets/img/logo.png" style="width: 250px;"> </a></li>
               
			<h2>Welcome</h2>
			<?php if (! empty($message)) { ?>
              <p class="errorMessage"><?php echo $message; ?></p>
                  <?php } ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]?> " METHOD="POST">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input name="submit" type="submit" value="Sign In" class="submit">
                </form>
		</div>
    </div>
    

</body>
</html>