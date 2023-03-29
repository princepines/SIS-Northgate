<?php
   $loc = str_replace("login", "", __DIR__);
   /*
   $profile = $loc . 'profile.php';
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: $profile");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   */
?>

<html>
<?php 
    require $loc . 'head.php';
?>
<title>SIS Login</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">

</head>
 <body>
    <div class="container" class="md:flex flex-col-reverse">
        <div class="row">
            <div class="col">
            <form action="login.php" method="post">
                <!--NEW-->
                <div class="lg:mt-2 flex container justify-content-center font-extrabold md:text-sm">
                <h1 class="text-5xl">USER LOGIN</h1>
                </div>
                <label for="username" class="form-label" style="font-family: Kanit, sans-serif;"><h2>Student ID</h2></label>
                <input type="text" class="form-control" name="username" placeholder="0123456789012" autocomplete="off" required maxlength="12"><br>
                <label for="password" class="form-label" style="font-family: Kanit, sans-serif;"><h2>Password</h2></label>
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required><br>
                <input type="submit"  class="btn btn-primary btn-hover mb-3" name="submit" value="Login">
                <button type="button"  class="btn btn-link mb-3" onclick="">Forgot Password?</button><br><br>
                <h3 style="font-family: Kanit, sans-serif;"><b>New to this School?</b></h3>
                <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='register.php'">Enroll Here</button>
            </form>
            </div>
            <div class="col">
                <img src="welcome.png" alt="welcome" width="500" height="500">
            </div>
        </div>
    </div>
    </body>
</html>