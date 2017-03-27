<div class="header">
            <ul>
                <li><a href="#"> <i>MyStore</i></a></li>
                <li><a href="index.php">Home</a></li>
                <?php
                if(isset($_SESSION['id'])){
                    echo 'Logged as:'.$_SESSION['name'];
                    echo "<li><a href='logout.php'>Log Out</a></li>";
                    echo "<li><a href='in_cart.php'>Cart</a></li>";
                }
                else if(isset($_SESSION['admin_id'])){
                    
                    echo 'Logged as:Admin. Name:'.$_SESSION['admin_name'];
                    echo "<li><a href='cms\index.php'>Admin Page</a></li>";
                    echo "<li><a href='cms\panel_logout.php'>Log Out</a></li>";
                }
                
                else{
                     
                    echo "<li><a href='sign_up.php'>Register</a></li>";
                     echo "<li><a href='login_user.php'>Log In</a></li>";
                      echo "<li><a href='login_admin.php'>Admin Panel</a></li>";
                      
                }
                
                
                
                
                ?>
             
            </ul>
            
        </div>