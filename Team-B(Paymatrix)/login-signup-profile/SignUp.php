<?php
    require('config.php');
    $bool=false;
    if(mysqli_connect_error())
    {
        echo "Failed to connect to the server".mysqli_connect_error();
    }
    else
    {
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
        {
            $name=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            if(strlen($_POST['password'])>8 && (strpos($_POST['password'],"@") || strpos($_POST['password'],"!") || strpos($_POST['password'],"#")))
            {
                $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
                $query="INSERT INTO signup_data(name,email,password)"."VALUES('$name','$email','$password')";
                if(mysqli_query($con, $query))
                {
                $bool=true; 
                }
            }
           else
           {
                echo "password must be of length 8 charaters should contain atleast one special character";
           }
        }   
    }
    mysqli_close($con);
?>  
<!DOCTYPE html>
<html>
    <head>
        <title>Hackerrank</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styling.css?<?=filemtime("styling.css")?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body id="content-body">
         <main id="main-content">  
             <img id="img" src="images/hackerranklogo.svg" alt="Couldn't load the image"/>
             <div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <h3 class="heading">Sign up</h3>
                <input class="input" type="text" placeholder="First & Last name" name="name" required/>
                
                <input class="input" type="email" placeholder="Email" name="email" required/>
                
                <input  class="input" type="password" placeholder="Your Password" name="password" required/>
                
                <input type="submit" class="button " value="Create An Account"/>
                <p>or connect with </p>
                <div>
                <a href="https://www.facebook.com/"><img class="logo" src="images/facebooklogo.png"alt="Couldn't load the image"/></a>
                <a href="https://www.google.com/"><img  class="logo"src="images/googlelogo.jpg" alt="Couldn't load the image"/></a>
                <a href="https://in.linkedin.com/"><img class="logo" src="images/linkedinlogo.png" alt="Couldn't load the image"/></a>
                <a href="https://github.com/"><img class="logo" src="images/githublogo.png" alt="Couldn't load the image"/></a>
                </div>
                <?php if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && $bool):?>
                <p>Data Inserted Successfully</p>
                <?php if(mail($_POST['email'],"Hello"." ".$_POST['name'],"Welcome to the coding you registered successfully,this web application  provide a platform to develop your knowlege and techinical skills in coding we wish you all the best","From: codingicfai@example.com" . "\r\n" .
                "CC: somebodyelse@example.com"))
                echo "email has been sent";
                else
                echo "email has not sent";?>
                <?php elseif(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && ($bool === false) && (strlen($_POST['password'])>8 && (strpos($_POST['password'],"@") || strpos($_POST['password'],"!") || strpos($_POST['password'],"#")))):?>
                <p>Data is already taken</p>
                <?php endif; ?>
            </form>
            </div> 
        </main>
    </body>
</html>