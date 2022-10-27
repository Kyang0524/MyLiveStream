<?php include('LoginAndRegister.php')?>
<!DOCTYPE html>
<html>
<head>
        <title>LoginAndRegister</title>
        <link rel="stylesheet" href="LoginAndRegister.css">
</head>
<body>
<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">LiveStream</a>
      </div>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </div>
</nav>
<div class="container">
<div class="card">
<div class="inner-box" id="card">
<div class="card-front">
  <h2>Register</h2>
       <form action="Register.php" method="post">
         <?php include('errors.php');?>
         <input type="text" class="input-box" placeholder="UserName" id="username" name="username" >
         <input type="email" class="input-box" placeholder="Email" id="email" name="email" >
         <input type="password" class="input-box" placeholder="Password" id="password_1" name="password_1" >
         <input type="password" class="input-box" placeholder="Comfirm Password" id="password_2" name="password_2" >
         <button type="submit" class="submit-btn" name="reg_user">Submit</button>
         
       </form>
     <button type="button" class="btn" onclick="backpage()">I've an account</button>                              
  </div>
<div class="card-back">
 
       <h2>LOGIN</h2>
       <form action="Register.php" method="post">
         <?php include('errors.php');?>
         <input type="text" class="input-box" placeholder="UserName" name="username" required >
         <input type="password" class="input-box" placeholder="Password" name="password" required>
         <button type="submit" class="submit-btn" name="login_user">Submit</button>
         <input type="checkbox"><span>Remember Me</span>
       </form>
  <button type="button" class="btn" onclick="frontpage()">I'm New User</button>
  <a href="">Forgot Password</a>  
</div> 
</div>
</div>
</div>
</body>


<script type="text/javascript" src="LoginAndRegister.js"></script>
</html>