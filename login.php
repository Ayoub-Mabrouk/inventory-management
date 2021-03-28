

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/login.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap%27);
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap%27);
  </style>
</head>

<body>
 <form id="login-form" action="php/login_process.php" method="POST">
    <div class="login">
      <div class="container">
        <div class="cont">
          <h2 id="STORE">STORE MANAGEMENT</h2>
          <div class="E-input">
            <p class="title-nm">Email :</p>
            <input type="text" class="email input" name="email" placeholder="Your Email" >
            <p class="message" id="user-is-invalid">invalid username</p>
          </div>
          <div class="E-input">
            <p class="title-nm">Password :</p>
            <input type="password" class="password input" name="password" placeholder="Your Password" >
            <p class="message" id="password-is-invalid">invalid password</p>
          </div>
          <div id="submit-button-box"><button name="submit" type="submit" id="submit-button">Login</button> </div>
        </div>
      </div>
    </div>
  </form>

<script src="js/login.js" ></script>
</body>

</html>