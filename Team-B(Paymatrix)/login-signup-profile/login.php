<?php
    require('config.php');
    $result=true;
    session_start();
                // $_SESSION['bol']="true";
                if(mysqli_connect_error())
                {
                    echo "Failed to connect to the server".mysqli_connect_error();
                }
                else
                {
                    // if($_SESSION['bol'] == 'true')
                    // {
                            if(isset( $_POST['email']) && isset($_POST['password']))
                            {
                                $name=htmlentities($_POST['email']);
                                $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $query = "SELECT name,email FROM signup_data where email='".$name."'";
                                $result = mysqli_query($con, $query);
                                if(mysqli_num_rows($result) > 0)
                                {
                                    $_SESSION['email']=$_POST['email'];
                                    $_SESSION['password']=$_POST['password'];
                                    header("Location:http://localhost/team-B(paymatrix)/practice/practice.html");
                                }
                                else
                                {
                                    $result=false;
                                }
                            }
                    // }
                }
    mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hackerrank</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling.css?<?=filemtime("styling.css")?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .input
            {
                margin:0px auto!important;
            }
        </style>
    </head>
    <body id="content-body">
         <main id="main-content">  
             <img id="img" src="images/hackerranklogo.svg" alt="Couldn't load the image"/>
             <br>
                <br>
                <br>
             <div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <h3 class="heading">Log In</h3>
                <input class="input" type="email" placeholder="username" name="email" required/>
                <br>
                <input  class="input" type="password" placeholder="Your Password" name="password" required/>
                <br>
                <input type="submit" class="button " value="Log In"/>
                <p>or connect with </p>
                <div>
                <a href="https://www.facebook.com/"><img class="logo" src="images/facebooklogo.png"alt="Couldn't load the image"/></a>
                <a href="https://www.google.com/"><img  class="logo"src="images/googlelogo.jpg" alt="Couldn't load the image"/></a>
                <a href="https://in.linkedin.com/"><img class="logo" src="images/linkedinlogo.png" alt="Couldn't load the image"/></a>
                <a href="https://github.com/"><img class="logo" src="images/githublogo.png" alt="Couldn't load the image"/></a>
                </div>
                <?php  if((isset( $_POST['email']) && isset($_POST['password'])) && $result === false):?>
                    <h5>Invalid Credentials<h5>
                <?php $result=true; endif;?>
            </form>
            </div> 
        </main>
    </body>
</html>