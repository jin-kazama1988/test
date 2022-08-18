<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        
        <title>fullPage.js - A simple Demo</title>
        <meta name="author" content="Mohsin Rafiq Siddiqui" />
        <meta name="description" content="fullPage very simple demo." />
        <meta name="keywords" content="fullpage,jquery,demo,simple" />
        <meta name="Resource-type" content="Document" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" type="text/css" href="fullpage.css" />        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <script src="fullpage.js" type="text/javascript"></script>
        <style type="text/css">
        	body {

        	}
        	.fp-tableCell {
        		position: absolute;
    			top: 90px;
        	}
    		#tesla-header {
    			position: absolute;
    			top: 0;
    			left: 0;
    			z-index: 99;
    		}
    		#tesla-header .logo {
    			display: inline-block;
    			float: left;
    		}
    		#tesla-header .logo img {
    			padding: 20px;
			    height: 13px;
			    width: 100px;
    		}
    		#tesla-header #main-menu {
    			position: fixed;
    			top: 0;
    			left: 25%;
    		}
    		#tesla-header #support-menu {
    			position: fixed;
    			top: 0;
    			right: 5%;
    		}
    		#tesla-header ul {
    			float: left;
    			padding: 0;
    		}
    		#tesla-header ul li {
    			display: inline-block;
    		}
    		#tesla-header ul li a {
    			color: #000000;
    			text-decoration: none;
    			text-transform: uppercase;
    			font-family: 'Montserrat', sans-serif;
    			font-weight: 500;
    			font-size: 15px;
    			padding: 0 10px;
    			letter-spacing: -1px;
    		}
    		
    		.section {
    			background-repeat: no-repeat;
    			background-position: center center;
      			background-size: cover;
    		}
    		.section h1 {
    			text-align: center;
    			font-size: 40px;
    			font-family: 'Montserrat', sans-serif;
    			color: #393c41;
    			margin: 5px 0;
    		}
    		.section h3 {
    			text-align: center;
    			font-size: 20px;
    			font-family: 'Montserrat', sans-serif;
    			color: #5c5e62;
    			font-weight: 500;
    			margin: 5px 0;
    		}
    		.section h4 {
    			text-align: center;
    			font-size: 15px;
    			font-family: 'Montserrat', sans-serif;
    			color: #5c5e62;
    			font-weight: normal;
    			margin: 5px 0;
    		}
    		.section h4 a {
    			color: #5c5e62;
    		}

    		#section0 {
    			background-image: url('models/ModelS.jpg');
    		}
    		#section1 {
    			background-image: url('models/Model3.jpg');
    		}
    		#section2 {
    			background-image: url('models/ModelX.jpg');
    		}
    		#section3 {
    			background-image: url('models/ModelY.jpg');
    		}
    		#section4 {
    			background-image: url('models/SolarPanels.jpg');
    		}
    		#section5 {
    			background-image: url('models/SolarRoof.jpg');
    		}
    		#section6 {
    			background-image: url('models/Accessories.jpg');
    		}
    		.section .buttons {
    			position: absolute;
    			bottom: 150px; 
				left: 0; 
				right: 0; 
				margin-left: auto; 
				margin-right: auto;
				width: 560px;
    		}
    		.section .buttons a {
    			text-decoration: none;
			    text-transform: uppercase;
			    /*padding: 15px 60px;*/
			    border-radius: 25px;
			    opacity: 0.7;
			    font-family: 'Montserrat', sans-serif;
			    font-size: 13px;
		        width: 256px;
			    height: 40px;
			    display: inline-block;
			    text-align: center;
			    line-height: 38px;
    		}
    		.section .buttons a.black {    			
			    color: #FFFFFF ;
			    background-color: #000000;
			    margin-right: 10px;
    		}
    		.section .buttons a.white {
			    color: #171a20;
			    background-color: #FFFFFF;
			    margin-left: 10px;
    		}
    	</style>
        
    </head>
    <body>        

        <div id="tesla-header">
    		<div class="logo">
    			<img src="tesla-logo.png">
    		</div>
    		<div id="main-menu">
	    		<ul>
	    			<li><a href="#">Model S</a></li>
	    			<li><a href="#">Model 3</a></li>
	    			<li><a href="#">Model X</a></li>
	    			<li><a href="#">Model Y</a></li>
	    			<li><a href="#">Solar Roof</a></li>
	    			<li><a href="#">Solar Panels</a></li>
	    		</ul>
	    	</div>
	    	<div id="support-menu">
	    		<ul>
	    			<li><a href="#">Shop</a></li>
	    			<li><a href="#">Tesla Account</a></li>
	    		</ul>
	    	</div>
    	</div>
    	
    	<div id="fullpage">
    		<div class="section active" id="section0">
    			<h1>Model S</h1>
    			<h3>Starting at $69,420</h3>
    			<div class="buttons">
    				<a href="#" class="black">Custom Order</a>
    				<a href="#" class="white">Existing Inventory</a>
    			</div>
    		</div>
    		<div class="section" id="section1">
    			<h1>Model 3</h1>
    			<h4>Order Online for <a href="#">Touchless Delivery</a></h4>
    			<div class="buttons">
    				<a href="#" class="black">Custom Order</a>
    				<a href="#" class="white">Existing Inventory</a>
    			</div>
    		</div>
    		<div class="section" id="section2">
    			<h1>Model X</h1>
    			<h4>Order Online for <a href="#">Touchless Delivery</a></h4>
    			<div class="buttons">
    				<a href="#" class="black">Custom Order</a>
    				<a href="#" class="white">Existing Inventory</a>
    			</div>
    		</div>
    		<div class="section" id="section3">
    			<h1>Model Y</h1>
    			<h4>Order Online for <a href="#">Touchless Delivery</a></h4>
    			<div class="buttons">
    				<a href="#" class="black">Custom Order</a>
    				<a href="#" class="white">Existing Inventory</a>
    			</div>
    		</div>
    		<div class="section" id="section4">
    			<h1>Only $1.49/Watt for Solar on Existing Roofs</h1>
    			<h4>Lowest Cost in America - Money-back guarantee</h4>
    			<div class="buttons">
    				<a href="#" class="black">Order Now</a>
    				<a href="#" class="white">Learn More</a>
    			</div>
    		</div>
    		<div class="section" id="section5">
    			<h1>Solar for New Roofs</h1>
    			<h4>Solar Roof Costs Less Than a New Roof Plus Solar Panels</h4>
    			<div class="buttons">
    				<a href="#" class="black">Order Now</a>
    				<a href="#" class="white">Learn More</a>
    			</div>
    		</div>
    		<div class="section" id="section6">
    			<h1>Accessories</h1>
    			<div class="buttons">
    				<a href="#" class="black">Shop Now</a>
    			</div>
    		</div>
    	</div>

	
    	<script type="text/javascript">
    	
    	    var myFullpage = new fullpage('#fullpage', {
    		    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    			sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
    			//anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
    			autoScrolling: true
    		});
            
    		
    	</script>
    </body>
</html>