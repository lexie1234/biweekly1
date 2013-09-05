<?php session_start();
    // store session data
$_SESSION['username'] = "Bandile";
$_SESSION['pass'] = "Ndile";
?>

<html>
    <body>
        
        <form action="login.php" method="POST" >
            
            Enter Username: <input type="text" name="username" /><br />
            Enter Password: <input type="text" name="pass" /><br />
            
            <input type="submit" name="submit" value="Login"/>
            
        </form>
        
        <?php
            
            $username = $_POST['username'];
            $password = $_POST['pass'];
            $submit = $_POST['submit'];
            
            if($submit)
            {
                
            
            if(($username == $_SESSION['username']) && ($password == $_SESSION['pass']))
            {
                header("Location :secure.php");
            }
            }
 else {
                echo "Login Failed";
}
            
        ?>
    
    </body>
</html>
