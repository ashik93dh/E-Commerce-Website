<html>
<title> MyStore-Register</title>
    <?php include 'includes/head.php';
    if(isset($_SESSION['id'])){
    header("Location:http://localhost/MyStore/index.php");
}
    
    ?>
<link href="forms.css" rel="stylesheet" type="text/css"/>
    <body>
        <?php include 'includes/header.php'?>
        
         <?php include 'includes/navbar.php'?>   
        <form class="form-register" method="post"  >

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Cell-phone</span>
                            <input type="text" name="number">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit">Register</button>
                    </div>

                </div>

               

            </div>

            

        </form>
        
        <?php include 'includes/footer.php'?>
        </body>
</html>
<?php
if (isset($_POST['submit'])){
    $username=$_POST['name'];
    $usermail=$_POST['email'];
    $usernum=$_POST['number'];
    $userpass= md5($_POST['password']);
   $query="insert into users(name,email,cell_no,password) values ('$username','$usermail','$usernum','$userpass')";
   $run= mysqli_query($link, $query);
   if($run){
       header('Location:index.php');
   }
   else{
       echo 'Error';
   }
}


?>