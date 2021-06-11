<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo URL; ?>public/css/styleSignIn.css" rel="stylesheet">
  <title>Sign In</title>
</head>
<body>
  <form action="<?php echo URL; ?>connection/signin" method="POST" class="SignIn-form">
    <h1 class="text" id="title">Sign In</h1>
    <p class="text"> So glad to have you back! &#128522;</p>
    <p class = "text"> Please fill in this form to log back into your account. </p>

    <div class="SignInCredentials">
      <input type="text" name="username" id="usernameOrEmail" placeholder="Username or Email" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
    </div>
    <input type="submit" name="submit_user" value="Submit" id="SignInButton">

    <h3 class="text" id="OrSignInWithOtherSocials"> Or Sign In with other socials : </h3>
   
    <div class="SignInWithOtherSocials">
      <a href="<?php echo URL; ?>login/" >    
        <img src="<?php echo URL; ?>public/img/SignUpWithGitHub.png" id="SignInWithGitHub" alt="SignInWithGitHub">
      </a>
    </div>

    <div class="DoesntHaveAnAccount">
      <p class="text"> Don't have an account ?</p>
      <a class="text" id= "SignUp" href="<?php echo URL; ?>home/signup" style="color:rgb(219, 192, 166)">SIGN UP </a>
    </div>

  </form>
</body>
</html>