<!DOCTYPE html>
<html>
<head>
<link href="./css/primafood_new.css" rel="stylesheet" type="text/css">
<link href="./css/normalize.css" rel="stylesheet" type="text/css">
<link href="./css/Grid .css" rel="stylesheet" type="text/css">
<link href="./font/Lato2OFLWeb/Lato/latofonts.css" rel="stylesheet" type="text/css">
<title>Primafood</title>
<style type="text/css">
.oneColFixCtr #container2 {
	width: 980px;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
	background-color:#000000;
}
.oneColFixCtr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background-image: url("./images/gradient.jpg");
}
</style>
</head>
<body class="oneColFixCtr" style="background-color: #000000;" >
<div id="mainContent">
  <!-- mainCcnt -->
  <div id="container2">
    <!-- c2-->
    <header>
      <nav>
        <ul class="main-nav">
          <li> <a href="home_.php">HOME</a> </li>
          <li> <a href="entrees_.php">ENTREES</a> </li>
          <li> <a href="mains_.php">MAINS</a> </li>
          <li> <a href="#">[DESSERTS]</a> </li>
          <li> <a href="beverages_.php">BEVERAGES</a> </li>
        </ul>
      </nav>
      <div class="hero-text-box">
        <h1 style="color: #FFFF99;">PRIMAFOOD</h1>
        <h3 style="color: #FFFF99;"> Delivering Melbourne-Wide,<br>
          from only $8.50*</h3>
      </div>
      <!-- hero t b -->
      
       <div id="vc">
	      <!--View Cart Button..............float it right-->
	      <!-- PayPal Logo -->
	      <!--<img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_secured_by_pp_2line.png"/>-->
	      
	      <!-- PayPal Logo -->
	      <form target="_self" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
	        <input type="hidden" name="cmd" value="_cart">
	        <input type="hidden" name="business" value="orders@primafood.com.au">
	        <input type="hidden" name="display" value="1">
	        <input style="margin-left:85px; margin-top:18px;" type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal  The safer, easier way to pay online!">
	        <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1" >
	      <input type="hidden" name="return" value="http://walkaboutmultimedia.com/ass3/desserts_.php">
	      <input type="hidden" name="cancel_return" value="http://walkaboutmultimedia.com/ass3/desserts_.php">
	      <input type="hidden" name="shopping_url" value="http://walkaboutmultimedia.com/ass3/desserts_.php">
	      </form>
	    </div>
            
      
    </header>
  <section class="mains-meals" style="background-color:#006633; padding: 10px; ">
    <div class="row" >
      <h3 style="position: relative; left: 0px; top: 5px; color: #FFFF99;">Desserts</h3>
<!--      <p class="intro-para" style="color:#FFFFFF;">Hello! We are Primafood, your new food delivery service.<br>-->
<!--        We know you're always busy. So if there's no time for cooking, we can take care of that.</p>-->
<!--      <h4 style="position: relative; left: 150px; top: 20px; color: #FFFF99; margin-bottom: 0px; padding-bottom: 0px;">HERE ARE SOME SAMPLES FROM OUR EXTENSIVE MENU:</h4>-->
    </div>
    <!-- row -->
  </section>
  
<?php       
$conn = mysqli_connect("localhost","prefects_rah", "rahrahrasputin1A!");
//$conn = mysqli_connect("localhost", "root", "");
//$conn = mysql_connect("localhost", "agape", "");
//$conn = mysql_connect("localhost", "agape", "passwordmnbvcxz");
	
if(!$conn) {
	$error = 'Unable to connect to the database server.';
	include 'error.php';
	exit();
}

if(!mysqli_set_charset($conn,'utf8')) {
	$error = 'Unable to set database connection encoding.';
	include 'error.php';
	exit();
}

if(!mysqli_select_db($conn,"prefects_primafood")) {

//if(!mysql_select_db("agapeencounter_org_calendar_of_events")) {
	$error = 'Unable to locate the database.';
	include 'error.php';
	exit();
}   

$sql= "SELECT name, description,  price, menuitem_id, vendor_id, category FROM menuitems  WHERE vendor_id = 10 AND category = 'Dessert' ORDER BY category DESC, name DESC";
	
			// echo $sql;

	$result = mysqli_query($conn,$sql);
	
	if($result==FALSE) {
		$error = 'Error selecting data: ' . mysqli_error();
		include 'error.php';
		exit;
	}

	$numrows = mysqli_num_rows($result);
	$numcols = mysqli_num_fields($result);
	
	//echo $numrows;
	//echo $numcols;
	
	
      ?>
      
      
      <?php


      if ($numrows>0) {
			
			$menuitem_id="";
		
			//name0 descr1 price2........... menuid3 vendid4 action image
			while ($data = mysqli_fetch_array($result)) {
				
				echo "<div class=\"starter-meal-pic\" style=\"border: 2px silver outset;  \">";
				for ($i=0; $i < $numcols; $i++) {
      				


        			if($i==0) { //nm
	        			echo "<h3 style=\"padding: 5px; height: 110px;  overflow: auto; \" >";
      					echo $data[$i] . "</h3>";
      					$name = $data[$i];
      				}
        
      				if($i==1) { //descr
      					echo "<p style=\"padding: 5px;  height: 130px; overflow: auto;  \">";
        				echo $data[$i];
        				echo "</p>";
      				}
      			
      				if($i==2) { //proce
      					echo "<p style=\"padding: 5px;  height: 30px;\">";
      					echo "$" . $data[$i];
        				echo "</p>";
        				$price = $data[$i];
      				}
      			
     		  		if($i==3) {
			  			$menuitem_id = $data[$i];
			  			//echo $menuitem_id;
			  		}
			  	}
			  	
			  	
			  	//----------pp stuff-----------------------
			  	?>
			  	
			  	
			  	<form target="_self" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="padding: 5px; ">
	      		<input type="hidden" name="cmd" value="_cart">
	      		<input type="hidden" name="business" value="orders@primafood.com.au">
	      		<input type="hidden" name="lc" value="AU">
	      		
	      		
	      		<input type="hidden" name="item_name" value="<?php echo $name ;?>">
	      		<input type="hidden" name="item_number" value="<?php echo $menuitem_id;?>">
	      		<input type="hidden" name="amount" value="<?php echo $price;?>">
	      		
	      		<input type="hidden" name="currency_code" value="AUD">
	      		<input type="hidden" name="button_subtype" value="products">
	      		<input type="hidden" name="no_note" value="1">
	      		<input type="hidden" name="no_shipping" value="2">
	      		<input type="hidden" name="rm" value="1">
	      		<input type="hidden" name="return" value="http://walkaboutmultimedia.com/ass3/desserts_.php">
	      		<input type="hidden" name="cancel_return" value="http://walkaboutmultimedia.com/ass3/desserts_.php">
	      		<input type="hidden" name="shopping_url" value="http://walkaboutmultimedia.com/ass3/desserts_.php">
	      		<input type="hidden" name="add" value="1">
	      		<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
<!--	      		<label  for="quantity">Quantity:</label>-->
<!--	      		<input type="text" name="quantity" size="5" value="1">-->
	      		<input  type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_cart_LG.gif" border="0" name="submit" > 
<!--	      		<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">-->
				 </form>
			  	<br>
				<?php   	
			  	
			    //-------------new query get image filename    ----		
				$sql2 = "SELECT  filename FROM images WHERE images.menuitem_id = '$menuitem_id' ";

				$result2 = mysqli_query($conn, $sql2);

				//if (!$result2) {
					//echo "Unable to execute a query (2) ";
					//echo "Error " . mysqli_errno() . " - " . mysql_error();
					//exit;
				//}

				$numrows2 = mysqli_num_rows($result2);
				
				//echo $numrows2 . "xxx";
				
				while ($data2 = mysqli_fetch_array($result2)) {
					$image_name = $data2[0]; //echo $numrows2;
				}
				
				//echo $image_name;

				//echo $numrows2 . "xtttxx";
				
				if($numrows2 > 0) {
			  		echo "<img class=\"starter-photo2\" src=\"";
			  		echo $image_name;
			  		echo  "\"     style=\" height: 175px;  \"    >";
				}
				//else echo "not > 0";
         		
				echo "</div>";
			}
			
			//echo "</table>";
		}
		else {
			echo "<p>No items in database.</p>";
		}

		?> 
		
    
</div><!-- cont -->
</div><!-- mainCcnt -->
</body>
</html>
