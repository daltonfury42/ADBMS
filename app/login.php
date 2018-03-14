<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google   Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >

<div id="login-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >ADMIN LOGIN </h1>
                     
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2">
                    <form method="post" action="">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" required="required"  placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" required="required"  placeholder="Password" />
                        </div>
                        
                        
                        <div class="form-group">
                            <button type="submit" name="login_submit" class="btn btn-info btn-block btn-lg">LOGIN</button>
                        </div>

                    </form>
                </div>

<?php
include("db_sjet.php");
if(isset($_POST['login_submit']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM ADMIN WHERE admin_id='".$user."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $DBpass = $row['password'];
    //if($DBpass==$pass)
    if($DBpass==$pass)
    {
        header("Location: login1.php");
        exit();
    }
        else
    {
            echo("<script type='text/javascript'> alert('Invalid username  or password '); </script>");      
    }
   // echo "string".md5($pass);
}
   
?>

</body>

</html>

                   