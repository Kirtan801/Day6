<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Decor</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
    include './themepart/menu.php';
    include './themepart/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="images/decor-logo.jpg" width="920" height="430" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Contact</a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    You can contact us on<br/><b>Helpline number:9898765634<br/>e-mail:decor-to-adore@gmail.com
			        </div>
                                <html>
    <body>
        <form method ="post">
            <h3>You can fill out this form for any queries and we will contact you.</h3>
            
            Name:<input type ="text" name="txt2"/><br/>
            Gender:<select name="txt3">
                <option>Male</option>
                <option>Female</option>
            </select><br/>
            e-mail:<input type="email" name="txt5"/><br/>
            Mobile Number:<input type="number" name="txt6"/><br/>
            Address:<input type="text" name="txt7"/><br/>
            Area:<input type="text" name="txt8"/><br/>
            Pin code:<input type="number" name="txt9"/><br/>

            
            <input type="submit"/>
            
        </form>
    </body>
</html>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
<?php
    include './themepart/sidebar.php';
?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
    include './themepart/footer.php';
?>
<!-- end #footer -->
</body>
</html>
<?php

$host ="localhost";
$username = "root";
$passwd = "";
$dbname = "db_theme";
$connection= mysqli_connect($host, $username, $passwd, $dbname);
if($_POST){
   
    $name = $_POST['txt2'];
    $email=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $area=$_POST['txt8'];
    $pincode=$_POST['txt9'];
    $q = mysqli_query($connection, "insert into tbl_theme(theme_name,theme_email,theme_mobile,theme_address,theme_area,theme_pincode) values('{$name}','{$email}','{$mobile}','{$address}','{$area}','{$pincode}')")or die("error".mysqli_error($connection));
    
    if($q){
        echo"<script>alert('Record added')</script>";
    }
}
    
    
?>
