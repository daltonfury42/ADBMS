<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 if ($_SESSION["CHECK"]!=1){
   header("Location:index.php");
  } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Section</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body >
            <div class="navbar-collapse navbar-inverse collapse" id="menu">
                <ul class="nav navbar-nav navbar-left">
                    <li class="nav-hover"><a href="logout.php">LOGOUT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
            <li class="nav-hover"><a  style="text-decoration:none; font-weight:bold" href="descrip.php">HOME PAGE DESCRIPTION</a>
    
            <li class="nav-hover"><a href="application_status.php">APPLICATION STATUS</a></li>
                            
                    <li class="nav-hover"><div class="dropdown">

            <button class="dropbtn">TRUSTEES</button>
            <div class="dropdown-content">
              <a href="trusteeupdate.php">Add Trustees</a>
              <a href="trusteedelete.php">Modify Trustees</a>
            </div>
          </div></li>

          <li class="nav-hover"><div class="dropdown">
            <button class="dropbtn">SCHOLARSHIPS </button>
            <div class="dropdown-content">
              <a href="add_scholarship.php">Add Scholarships</a>
              <a href="delete_scholarship.php">Modify Scholarships</a>
            </div>
          </div></li>

  <li class="nav-hover"><div class="dropdown">
            <button class="dropbtn">SCHOLARSHIP AWARDEEES</button>
            <div class="dropdown-content">
              <a href="awarded_trustee.php">Add Awardee</a>
              <a href="awarded_view.php">Modify Awardee</a>
            </div>
          </div></li>

           <li class="nav-hover"><div class="dropdown">
            <button class="dropbtn">DONATORS</button>
            <div class="dropdown-content">
              <a href="donators_trustee.php">Add Donator</a>
              <a href="donators_view.php">Modify Donator</a>
              <a href="pendingdonors.php">Donor Applications</a>
            </div>
          </div></li>


           <li class="nav-hover"><div class="dropdown">
            <button class="dropbtn">FAQ</button>
            <div class="dropdown-content">
              <a href="add_faq.php">Add FAQ</a>
              <a href="delete_faq.php">Modify FAQ</a>
            </div>
          </div></li>
      
                      <li class="nav-hover"><a href="admin_home.php">UPDATE NEWS</a></li>
                </ul>
            </div> 
</body>
</html>
<!--
    </div>
<div id="container980">
   Use"containerfull" for 100% width. For fixed width, use "container980", "container760" or "container600" (the number is the layout width in pixels). 
  <div id="header" style="padding:30px 10px;">
<a style="color:#FFFFFF; float:right;padding-right:30px;" href="logout.php" >Logout</a>
    <div class="form" style="padding-top:13px; "><img src="nitc_logo.png" style=" height:62px;"> </div>
    <h1 style="size:12px; color:#FFFFFF;">Silver Jubilee Endowment Trust</h1>
    <h2 style="color:#FFFFFF; text-decoration:none;">National Institute of Technology Calicut</h2>
  </div>
  <ul class="topmenu" style="padding-top:10px;">
    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="admin_home.php">Update News</a> </li>
    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="descrip.php">Home page Description</a>
    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="#">Trustees</a>
        <ul>
          <li><a  style="text-decoration:none; font-weight:bold" href="trusteesupdate.php">Add Trustees </a></li>
          <li><a  style="text-decoration:none; font-weight:bold" href="trusteedelete.php">Modify Trustees</a></li>
     </ul>
    </li>
    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="#">Scholarship</a>
        <ul>
          <li><a  style="text-decoration:none; font-weight:bold" href="add_scholarship.php">Add Scholarship </a></li>
          <li><a  style="text-decoration:none; font-weight:bold" href="delete_scholarship.php">Modify Scholarship</a></li>
     </ul>
    </li>

    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="#">Scholarship Awardees</a>
        <ul>
            <li><a  style="text-decoration:none; font-weight:bold" href="awarded_trustee.php">Add Scholarship Awardees </a></li>
          <li><a  style="text-decoration:none; font-weight:bold" href="awarded_view.php">Modify Scholarship Awardees</a></li>
        </ul>
    </li>
    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="#">Donators</a>
        <ul>
          <li><a  style="text-decoration:none; font-weight:bold" href="donators_trustee.php">Add Donators </a></li>
    <li><a  style="text-decoration:none; font-weight:bold" href="donators_view.php">Modify donators</a></li>
  </ul>
    </li>
    <li class="submenu"><a  style="text-decoration:none; font-weight:bold" href="#">FAQs</a>
        <ul>
          <li><a  style="text-decoration:none; font-weight:bold" href="add_faq.php">Add FAQ </a></li>
          <li><a  style="text-decoration:none; font-weight:bold" href="delete_faq.php">Delete FAQ</a></li>
  </ul>
    </li>

   </ul>


-->
