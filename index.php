<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="container" id="signup" style="display:none;">
  <h1 class="form-title">Register</h1>
  <form method="post" action="register.php">
    <div class="input-group">
       <i class="fas fa-user"></i>
       <input type="text" name="fName" id="fName" placeholder="First Name" required>
       <label for="fname">First Name</label>
    </div>
    <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">Last Name</label>
    </div>
    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>
    <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
    </div>
    <input type="submit" class="btn" value="Sign Up" name="signUp">
  </form>
  <p class="or">
    ----------or--------
  </p>
  <div class="icons">
    <a href="https://accounts.google.com/signup/v2/webcreateaccount?hl=en&flowName=GlifWebSignIn&flowEntry=SignUp" class="fab fa-google"></a>
    <a href="https://www.facebook.com/r.php" class="fab fa-facebook"></a>
  </div>
  <div class="links">
    <p>Already Have Account ?</p>
    <button id="signInButton">Sign In</button>
  </div>
</div>

<div class="container" id="signIn">
  <h1 class="form-title">Sign In</h1>
  <form method="post" action="login.php">
    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="emailSignIn" placeholder="Email" required>
        <label for="emailSignIn">Email</label>
    </div>
    <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="passwordSignIn" placeholder="Password" required>
        <label for="passwordSignIn">Password</label>
    </div>
    <p class="recover">
      <a href="#">Recover Password</a>
    </p>
    <input type="submit" class="btn" value="Sign In" name="signIn">
  </form>
  <p class="or">
    ----------or--------
  </p>
  <div class="icons">
    <a href="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.com/&ec=GAZAmgQ" class="fab fa-google"></a>
    <a href="https://www.facebook.com/login/" class="fab fa-facebook"></a>
  </div>
  <div class="links">
    <p>Don't have account yet?</p>
    <button id="signUpButton">Sign Up</button>
  </div>
</div>

<script src="script.js"></script>
<script>
  // JavaScript for toggling between sign-up and sign-in containers
  const signUpButton = document.getElementById('signUpButton');
  const signInButton = document.getElementById('signInButton');
  const container = document.querySelector('.container');

  signUpButton.addEventListener('click', () => {
    container.style.display = 'none';
    document.getElementById('signup').style.display = 'block';
  });

  signInButton.addEventListener('click', () => {
    container.style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
  });

  // Check if redirected from Google or Facebook signup
  const urlParams = new URLSearchParams(window.location.search);
  const fromGoogleSignup = urlParams.get('from') === 'google';
  const fromFacebookSignup = urlParams.get('from') === 'facebook';

  if (fromGoogleSignup || fromFacebookSignup) {
    container.style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
  }
</script>

</body>
</html>
