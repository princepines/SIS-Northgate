<html>
<?php 
    $loc = str_replace("login", "", __DIR__);
    require $loc . 'head.php';
?>
 <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <form action="login.php" method="post">
                <label for="username" class="form-label" style="font-family: Kanit, sans-serif;"><h2>Student ID</h2></label>
                <input type="text" class="form-control" name="username" placeholder="0123456789012" autocomplete="off" required><br>
                <label for="password" class="form-label" style="font-family: Kanit, sans-serif;"><h2>Password</h2></label>
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required><br>
                <input type="submit"  class="btn btn-primary mb-3" name="submit" value="Login">
                <button type="button"  class="btn btn-link mb-3" onclick="">Forgot Password?</button><br><br>
                <h3 style="font-family: Kanit, sans-serif;"><b>New to this School?</b></h3>
                <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='register.php'">Enroll Here</button>
            </form>
            </div>
            <div class="col">
                <img src="<?php echo $loc . "welcome.png"; ?>" alt="welcome" width="500" height="500">
            </div>
        </div>
    </div>
    </body>
</html>