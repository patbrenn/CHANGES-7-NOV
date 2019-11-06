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

	text-align: left; /* this overrides the text-align: center on the body element. */
	background-color:#000000;
	
}
.oneColFixCtr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background-image: url("./images/gradient.jpg");
}
</style>
</head>
<body class="oneColFixCtr" style="background-color: #000000; " >
<div id="mainContent">
<!-- mainCcnt -->
<div id="container2">
  <!-- c2-->
  <header>
    <nav>
      <ul class="main-nav">
        <li> <a style="font-size: x-small; color: yellow;  position: relative; left: -25px; " href="login.php" >Vendor Login</a> </li>
        <li> <a href="entrees_.php">ENTREES</a> </li>
        <li> <a href="mains_.php">MAINS</a> </li>
        <li> <a href="desserts_.php">DESSERTS</a> </li>
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
	      <input type="hidden" name="return" value="http://walkaboutmultimedia.com/ass3/home_.php">
	      <input type="hidden" name="cancel_return" value="http://walkaboutmultimedia.com/ass3/home_.php">
	      <input type="hidden" name="shopping_url" value="http://walkaboutmultimedia.com/ass3/home_.php">
	      </form>
	    </div>
    
  </header>
  <section class="mains-meals" style="background-color:#006633">
    <div class="row" >
      <h4 style="position: relative; left: 150px; top: -20px; color: #FFFF99;">Place your order now</h4>
      <p class="intro-para" style="color:#FFFFFF;">Hello! We are Primafood, your new food delivery service.<br>
        We know you're always busy. So if there's no time for cooking, we can take care of that.</p>
      <h4 style="position: relative; left: 150px; top: 20px; color: #FFFF99; margin-bottom: 0px; padding-bottom: 0px;">HERE ARE SOME SAMPLES FROM OUR EXTENSIVE MENU:</h4>
    </div>
    <!-- row -->
  </section>
  <!--    <div class="Container"> -->
  <div class="starter-meal-pic" > <img class="starter-photo2" src="./images/13.jpg" alt="Biryani"> </div>
  <!-- smp -->
  <div class="starter-meal-pic"> <img class="starter-photo2" src="./images/14.jpg" alt="Bibimbap"> </div>
  <!-- smp -->
  <div class="starter-meal-pic"> <img class="starter-photo2" src="./images/15.jpg" alt=" Pie"> </div>
  <!-- smp -->
  <div class="starter-meal-pic"> <img class="starter-photo2" src="./images/17.jpg " alt=" Banh xeo"> </div>
  <!-- smp -->
  <!--</div>-->  <!-- cont -->
</div><!-- mainCcnt -->
</body>
</html>
