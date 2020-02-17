<?php
session_start();
?>

<!DOCTYPE html>

<html>

        <head>
        
        </head>

    <body>
    
    <header>
        
    <nav>

        <a href="#">
                 
        
        </a>
        
            <ul>
        
                <li><a href = "index.php">Home</a></li>
                <li><a href = "#">Portfolio</a></li>
                <li><a href = "#">About Me</a></li>
                <li><a href = "#">Contact</a></li>
                
            </ul>
    </nav>
        
            <div>
            <?php
                if (isset($_SESSION['userId'])){
                
                echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>                        
                </form>';            
                }
                
                else {
                echo '<a href="signup.php">Signup</a> <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>                        
                </form>'; 
                }   
            ?>
                
                
                
                
                
                
                
                    
                
                
                
            </div> <!--Login Form--->
        
     
        
    
    </header>
    
    </body>
    


</html>