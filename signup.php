<?php
    require "header.php";
?>

    <main>
     <h1>Signup</h1>
        <?php
        if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyfields"){
                echo '<p>Fill in all fields</p>';          
        }
        elseif ($_GET['error'] == "invalidmail&uid"){
            echo '<p>Invalid username and email.</p>';    
        }
        
         elseif ($_GET['error'] == "usertaken&mail"){
            echo '<p>Email is already taken.</p>';   
        }  
        
         elseif ($_GET['error'] == "passwordcheck&uid"){
            echo '<p>Your passwords do not match.</p>';
        }  
        
         elseif ($_GET['error'] == "invalidmailuid"){
             echo '<p>Invalid email.</p>';
            
        }  
        
         elseif ($_GET['error'] == "invaliduid&mail"){
             echo '<p>Invalid username.</p>';
            
        }      
            
        }
        
        elseif ($_GET["signup"] == "success") {
            echo '<p>Signup Successful!</p>';
            
        }
        ?>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit">Signup</button>
                                    
    </form>
        
    </main>
        
<?php 

require "footer.php";

?>