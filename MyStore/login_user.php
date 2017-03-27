<html>
<title>MyStore-Log In</title>
    <?php include 'includes/head.php';
    if(isset($_SESSION['id'])){
    header("Location:http://localhost/MyStore/index.php");
}
    ?>
<link href="forms.css" rel="stylesheet" type="text/css"/>
    <body>
        <?php include 'includes/header.php'?>
        
         <?php include 'includes/navbar.php'?>   
        <form class="form-register" method="post" action="login_user.php" >

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log into account</h1>
                    </div>

                    

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>
                    

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                  

                    <div class="form-row">
                        <button type="submit" name="submit">Log In</button>
                    </div>

                </div>

               

            </div>

            

        </form>
        
        <?php include 'includes/footer.php'?>
        </body>
</html>
<?php

if(isset($_POST['submit'])){


$umail=$_POST['email'];
$upass=md5($_POST['password']);
$sql="SELECT * FROM users WHERE email = '".$umail."' AND password = '".$upass."'";
		$login=mysqli_query($link, $sql);
		$count=mysqli_num_rows($login);
		if($count==1){
			$row=mysqli_fetch_assoc($login);
			$_SESSION['id'] = $row['id'];
			$_SESSION['name']= $row['name'];
		
		header("Location: index.php");
		}else{
			echo 'Invalid email or password';
		}
	}










?>
