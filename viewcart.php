<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['id'];
if(isset($btn))
{
$amount=0;
	$mq2=mysql_query("select max(orderid) from addcart");
$mr2=mysql_fetch_array($mq2);
$order=$mr2['max(orderid)']+1;
	for($i=0;$i<count($gid);$i++)
	{
	$amt=$price[$i]*$qty[$i];
	$amount+=$amt;
	mysql_query("update addcart set price=$price[$i],quantity=$qty[$i],amount=$amt,status=1,orderid=$order where id=$gid[$i]");
	}

header("location:payment.php?id=".$order);
}
if($_REQUEST['act']=="del")
{
$did=$_REQUEST['did'];
mysql_query("delete from addcart where id=$did");

}
?>

<!DOCTYPE html>
<html>
<head>
<title>ARTISAN AVENUE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<style type="text/css">
<!--
.style2 {font-weight: bold; color: #000000;}
-->
</style>
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index.html">E-STORE!</a>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Customers</a></li> 
								
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
	<style>
.active{
background-color:#00CC00;
}
</style>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span></span> ARTISAN AVENUE</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="userhome.php">View Product</a><i></i></li>
					<li><a class="active" href="viewcart.php">View Cart<!-- --></a><i></i></li>
					<li><a href="purchase.php">View Status</a><i></i></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="JJE-Commerce@mail.com">artisanavenue@mail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Sign In & Sign Up</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="userhome.php">Collections</a></li>
						<li><a href="userhome.php">Pots</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hand Made<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="userhome.php">Pots</a></li>
										<li><a href="userhome.php">Sculptures</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="userhome.php">Wood Carvings</a></li>
						<li><a href="userhome.php">Antiques</a></li>
						<li class="dropdown">
							
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
								
									
									</ul>
								</div>                  
							</div>	
						</li>
						
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login --><br>
<br>

					<h1 class="style12"></h1>
    <p align="center" class="style30">&nbsp;</p>
    <form name="form1" method="post" action="">
	<table width="801" border="1" align="center" cellpadding="5">
      <tr>
 
          <td width="14%"><div align="center" class="style6"><strong>Product name</strong> </div></td>
          <td width="17%"><div align="center" class="style6"><strong>Price</strong> </div></td>
          <td width="11%"><div align="center" class="style6"><strong>Description</strong> </div></td>
		            <td width="11%"><div align="center" class="style6"><strong>product</strong> </div></td>

      </tr>
      <?php
	$q1=mysql_query("select * from addcart where uid='$uid' && status=0");
  $num=mysql_num_rows($q1);
  if($num>0)
  {  
	while($r1=mysql_fetch_array($q1))
	{
	$q3=mysql_query("select * from product1 where id=".$r1['pid']."");
	$r3=mysql_fetch_array($q3);

	?>
      <tr>
      
        <td align="left"><?php echo $r3['pname']; ?></td>
        <td align="left"><?php echo $r3['price']; ?></td>
		   <td align="left"><?php echo $r3['desc']; ?></td>
		  <td align="left"><img src="images/<?php echo $r3['img']; ?>" width="80" height="80" /></td>
        <td align="left"><input type="text" name="qty[]" />
            <input type="hidden" name="gid[]" value="<?php echo $r1['id']; ?>" />
            <input type="hidden" name="pid[]" value="<?php echo $r1['pid']; ?>" />
            <input type="hidden" name="price[]" value="<?php echo $r3['price']; ?>" />
        </td>
		<td align="left"><a href="viewcart.php?act=del&did=<?php echo $r1['id'];?>">Remove</a></td>
      </tr>
      <?php
	}
	?>
	<p align="center">
 <tr>
 <td colspan="6" align="center"><input type="submit" name="btn" value="Order" /></td>
 </tr>
  </p> <?php
  }
  else
  {
  echo "Order is Empty!";
  }
  ?>
  </table>
  </form>
   	<br>
<br>
<br>

<!-- //login -->
			</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>&nbsp;</h3>
				<ul class="w3_footer_grid_list">
					
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">privacy policy</a></li>
					<li><a href="#">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="#">Pots</a></li>
					<li><a href="#">Sculptures</a></li>
					<li><a href="#">Antiques</a></li>
					<li><a href="#">Wood Carvings</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
				  <div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2019 E-Store| Design by Admin</p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
