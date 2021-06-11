<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo URL; ?>public/css/styleSignUp.css" rel="stylesheet">
  <title>Sign Up</title>
</head>

<body>

  <form action="<?php echo URL; ?>register/signup" method="POST" class="SignUp-form">

    <h1 class= "text" id="title"> WELCOME </h1>
    <p class="text"> Please fill in this form to create an account. </p>

    <div class="SignUpCredentials">
    
      <input type="text" name="name" id="username" placeholder="Name" required>  
      <input type="text" name="username" id="username" placeholder="Username" required>
      <input type="email" name="email" id="email" placeholder="Email" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" required>
      
    </div>

    <p class="text" id="TermsAndPrivacy">
      By creating an account you agree to our <a href="#" style="color:rgb(219, 192, 166)">Terms & Privacy</a>.
    </p>
    <input type="submit" name="submit_add_user" value="Submit" id="CreateAccountButton">

    <h3 class="text" id="OrSignUpWithOtherSocials"> Or Sign Up with other socials : </h3>

    <div class="SignUpWithOtherSocials">
    <a href="<?php echo URL; ?>login/" >  
      <img src="<?php echo URL; ?>public/img/SignUpWithGitHub.png" id="SignUpWithGitHub" alt="SignUpWithGitHub">
      </a>
    </div>

    <div class="AlreadyHasAnAccount">
      <p class="text"> Already have an account ?</p>
      <a class="text" id= "SignIn" href="<?php echo URL; ?>home/signin" style="color:rgb(219, 192, 166)">SIGN IN </a>
    </div>

  </form>
</body>
</html>