<html>
<?php 
    $loc = str_replace("login", "", __DIR__);
    require $loc . 'head.php';
?>
 <body>
        <div id="login">
            <form action="login.php" method="post">
                <label for="username" class="form-label"><b>Username</b></label>
                <input type="text" class="form-control" name="username" placeholder="Username" required><br>
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Password" required><br>
                <input type="submit"  class="btn btn-primary mb-3" name="submit" value="Login"><br>
                <button type="button"  class="btn btn-primary mb-3" onclick="window.location.href='register.php'">Enroll Here</button>
            </form>
        </div>
    </body>
</html>