
<head>
<link rel="stylesheet" href="style.css" />
<style type="text/css">
    
#alertDivIn{
  display:none;
}
#alertDivUp{
  display: none;
}
.centered{
           margin:auto;
        }
</style> 
<head>

<div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="alert alert-danger" type="alert" id="alertDivIn"></div>
          <div>
              <input type="hidden" name="loginActive" id="loginActive" value="1">
          </div>
          <div class="input-field">
            <i class="centered fas fa-user"></i>
            <input type="text" placeholder="Username" id="usernameIn" name="usernameIn" />
          </div>
          <div class="input-field">
            <i class="centered fas fa-lock"></i>
            <input type="password" placeholder="Password" id="passwordIn" name="passwordIn"/>
          </div>
          <button type="button" id="signingIn" class="btn solid" name="signingIn">Login</button>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="alert alert-danger" type="alert" id="alertDivUp"></div>
          <div class="input-field">
            <i class="centered fas fa-user"></i>
            <input type="text" id="usernameUp" name="usernameUp" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="centered fas fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="centered fas fa-lock"></i>
            <input type="password" placeholder="Password" id="passwordUp" name="passwordUp" formmethod="post" />
          </div>
          <button type="button" id="signingUp" class="btn" name="signingUp"> Sign Up </button>

          <!-- <button type="button" id="signingUp" name="signingUp" class="btn" onfocus="window.open('./details.php','_self')" > Sign Up </button> -->
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            If you dont have an account then just sign up to make connections and do some great work
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
           If you already have an account then just sign in to meet your connections
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>