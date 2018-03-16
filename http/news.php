<?php require("navbar.php");
include("db_sjet.php");?>
<head>
<style type="text/css">
	.list-type2{
width:400px;
margin:0 auto;
list-style-type: none;
}

.list-type2 ol{
counter-reset: li;
list-style: none;
*list-style: decimal;
font-size: 15px;
font-family: 'Raleway', sans-serif;
padding: 0;
margin-bottom: 4em;
}

.list-type2 ol ol{
margin: 0 0 0 2em;
}

.list-type2 a{
position: relative;
display: block;
padding: .4em .4em .4em 2em;
*padding: .4em;
margin: .5em 0;
background: #00004d;
color: white;
text-decoration: none;
transition: all .2s ease-in-out;
}

.list-type2 a:hover{
background: #d6d4d4;
color: black;
text-decoration:none;
transform: scale(1.1);
}

.list-type2 a:before{
content: counter(li);
counter-increment: li;
position: absolute;
left: -1.3em;
top: 50%;
margin-top: -1.3em;
background:#00cc66;
height: 2em;
width: 2em;
line-height: 2em;
border: .3em solid #fff;
text-align: center;
font-weight: bold;
color:#FFF;
}
</style>
</head>
<div class="row text-center">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
		<h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line" style="margin-top: 70px;"> NEWS/ANNOUNCEMENTS </h1>
	</div>
</div>

<div class="list-type2">          
<ol>
         
<?php    
			$sql="SELECT * from NEWS" ;
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result)){
	echo "<li><span class='style8'> <a href= '$row[news_doc_path]'>  $row[description] </a></a></span> </li>";
				}
		}
?>
</ol>
</div>
