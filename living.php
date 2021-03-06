<!DOCTYPE php>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Deakin Green Book">
    <meta name="author" content="Akshay Kumar">
    <meta name="keywords" content="">

    <title>
        Deakin Green Book
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
<style type="text/css">
	.img-responsive{
			width:250px;
			height:300px;
	}
	</style>
	<script>
	 var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp= new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","detail.xml",false);
		xmlhttp.send();     
		var xmlDoc=xmlhttp.responseXML;
		
		var living=xmlDoc.getElementsByTagName("living");//get nodes of <pf> element.
		function displayType(type){
		
		var content="";
		for(var j=0;j<living.length;j++)
		{
		if(type==living[j].getElementsByTagName("type")[0].childNodes[0].nodeValue)//if statement judges if the parameter equal to property.
			{	
//                    <h3 style="color:#66CDAA">Energy</h3>
					//	<ol >
					//		<li><h4>Turn off computers</h4></li>
					//		<li><h4>Turn off lights</h4></li>
					//		<li><h4>Use a clothes drying rack rather than an electric dryer</h4></li>
					//		<li><h4>Use LED light bulbs in your desk lamp</h4></li>
					//	</ol>

			//xml is <property>product catalog name</property>	
			//add relevant content.
			content+='<h3 style="color:#66CDAA">';
			content+=living[j].getElementsByTagName("type")[0].innerHTML;
			content+='</h3><ol><li><h4>';
			content+=living[j].getElementsByTagName("method1")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method2")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method3")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method4")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method5")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method6")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method7")[0].innerHTML;
			content+='</h4></li><li><h4>';
			content+=living[j].getElementsByTagName("method8")[0].innerHTML;
			content+='</h4></li>';
			}
		
			document.getElementById("result").innerHTML=content;
			
		}
		
		
		}
	</script>

</head>

<body>

      <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get 20% discount on Vegan Food in Deakin Uni</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.php">Register</a>
                    </li>
                    <li><a href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Deakin Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="Deakin Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/deakin.png" alt="Deakin logo" class="hidden-xs">
                    <img src="img/deakin1.png" alt="Deakin logo" class="visible-xs"><span class="sr-only">GreenBook - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>

					<li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">FOOD <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5>Eat Sustainably</h5>
                                            <ul>
                                                <li><a href="food.php">Eat Less Meat</a>
                                                </li>
                                                <li><a href="food.php">Eat Orgainc</a>
                                                </li>
                                                <li><a href="food.php">Eat Local</a>
                                                </li>
                                                <li><a href="food.php">Eat Seasonal</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5>Waste</h5>
                                            <ul>
                                                <li><a href="food.php">Reduce Waste</a>
                                                </li>
                                                <li><a href="food.php">Recycle</a>
                                                </li>
                                                <li><a href="food.php">Reuse</a>
                                                </li>
                                                <li><a href="food.php">Compost</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5>Where to eat on campus</h5>
                                            <ul>
                                                <li><a href="food.php">%local produce</a>
                                                </li>
                                                <li><a href="food.php">%Organic</a>
                                                </li>
                                                <li><a href="food.php">%Recyclable Waste</a>
                                                </li>
                                                <li><a href="food.php">% vegetarian and Vegan options</a>
                                                </li>
                                                <li><a href="https://food.deakin.edu.au/food-charter">Deakin Food Charter</a>
                                                </li>

                                            </ul>
                                        </div>
                                      <div class="col-sm-3">
                                            <h5>Where to eat off campus</h5>
                                            <ul>
                                                <li><a href="food.php">Farmers Market</a>
                                                </li>
                                                <li><a href="food.php">Organic and health food shops</a>
                                                </li>
                                                <li><a href="food.php">Restaurants – vegetarian, organic, waste conscious</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Waste <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5>Recycle at Deakin</h5>
                                            <ul>
                                                <li><a href="">A-Z Waste Disposal</a>  <!--to be linked to A-z waste disposal by other group -->
                                                </li>
                                            </ul>
                                        </div>


                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Transport <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <ul>
                                                <li><a href="transport.php">Public Transport</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">

                                            <ul>
                                                <li><a href="transport.php">Shuttle Bus - Geelong</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">

                                            <ul>
                                                <li><a href="transport.php">Park and Ride</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">

                                            <ul>
                                                <li><a href="transport.php">Car Pooling</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">

                                            <ul>
                                                <li><a href="transport.php">Flexi Car</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                              <h5>Active Transport</h5>
                                              <ul>
                                                  <li><a href="transport.php">Cycling</a>
                                                  </li>
                                                  <li><a href="transport.php">Walking/Running</a>
                                                  </li>
                                                  <li><a href="transport.php">End Of trip Facilities</a>
                                                  </li>
                                                  <li><a href="transport.php">Bike Cages</a>
                                                  </li>
                                              </ul>
                                        </div>
									</div>
								</div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Living <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5>Living on/off campus</h5>
                                            <ul>
                                                <li><a href="living.php">Energy</a>
                                                </li>
                                                <li><a href="living.php">Water</a>
                                                </li>
                                                <li><a href="living.php">Heating/Cooling</a>
                                                </li>
                                                <li><a href="living.php">Purchasing</a>
                                                </li>
                                                <li><a href="living.php">Waste</a>
                                                </li>
                                            </ul>
                                        </div>
									</div>
								</div>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Site <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="register.php">Register / login</a>
                                                </li>
                                                <li><a href="orders.php">Orders history</a>
                                                </li>
                                                <li><a href="order.php">Order history detail</a>
                                                </li>
                                                <li><a href="account.php">Deakin account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Merchandise and Coupons</h5>
                                            <ul>
                                                <li><a href="#">Shopping cart</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Information</h5>
                                            <ul>
                                                <li><a href="aboutus.php">About us</a>
                                                </li>
												<li><a href="terms.php">Terms and conditions</a>
                                                </li>
												<li><a href="faq.php">FAQ</a>
                                                </li>
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="#" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

						</span>
                    </div>
                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

	<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Living</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li class="active">
<!--changed by Wang Fengin------add onclick trigger to display cataloged products---------------------------------------------------->
                                    <a href="living.php">Living on/off campus <span class="badge pull-right">5</span></a>
                                    <ul>
                                        <li><a href="#" onclick=" displayType('Energy')" >Energy </a>
                                        </li>
                                        <li><a href="#" onclick=" displayType('Water')">Water</a>
                                        </li>												
                                        <li><a href="#" onclick=" displayType('Heating/cooling')">Heating/Cooling</a>
                                        </li>
										<li><a href="#" onclick=" displayType('Purchasing')">Purchasing</a>
                                        </li>
										<li><a href="#" onclick=" displayType('Waste')">Waste</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
				</div>
						<div  class="col-md-9">
							<div class="box">
								<h1>Living</h1>
								<p>Learning how to live in Australia will be a new experience for newcomers. At Deakin Green Book, we will give people a rough look at how local people live here.</p>
								<div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>5</strong> items
                            </div>

                        </div>
                    </div>
                    <div id="result" class="row products">

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                    <div>
                                        <div>
                                            <a href="javascript:goDetail(0)">
                                                <img src="img/Energy.png" alt="Energy" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                <div class="text">
                                    <h3><a href="javascript:goDetail(0)">Energy</a></h3>
                                    <p class="buttons">
                                        <a href="javascript:goDetail(0)" class="btn btn-primary">View detail</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
									<div>
                                        <div>
                                            <a href="javascript:goDetail(1)">
                                                <img src="img/Water.jpg" alt="Water" class="img-responsive">
                                            </a>
                                        </div>
									</div>
                                <div class="text">
                                    <h3><a href="javascript:goDetail(1)">Water</a></h3>
                                    <p class="buttons">
                                        <a href="javascript:goDetail(1)" class="btn btn-primary">View detail</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                    <div>
                                        <div>
                                            <a href="javascript:goDetail(2)">
                                                <img src="img/Heating_Cooling.jpg" alt="Heating/cooling" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                <div class="text">
                                    <h3><a href="javascript:goDetail(2)">Heating/Cooling</a></h3>
                                    <p class="buttons">
                                        <a href="javascript:goDetail(2)" class="btn btn-primary">View detail</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                    
					<div class="col-md-4 col-sm-6">
                            <div class="product">
                                    <div>
                                        <div>
                                            <a href="javascript:goDetail(3)">
                                                <img src="img/Buy.png" alt="Purchasing" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                <div class="text">
                                    <h3><a href="javascript:goDetail(3)">Purchasing</a></h3>
                                    <p class="buttons">
                                        <a href="javascript:goDetail(3)" class="btn btn-primary">View detail</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                    </div>
                    <!-- /.col-md-4 -->
                  
					<div class="col-md-4 col-sm-6">
                            <div class="product">
                                    <div>
                                        <div>
                                            <a href="javascript:goDetail(4)">
                                                <img src="img/Waste.png" alt="Waste" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                <div class="text">
                                    <h3><a href="javascript:goDetail(4)">Waste</a></h3>
                                    <p class="buttons">
                                        <a href="javascript:goDetail(4)" class="btn btn-primary">View detail</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.product -->
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.products -->
					
						</div>
					
		
            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
		<div id="advantages">
            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-heart"></i>
                            </div>
                            <h3><a href="#">Sustainability Map</a></h3>
                            <p> Could/should we have our own sustainability map?</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box same-height clickable">
                            <div class="icon"><i class="fa fa-tags"></i>
                            </div>
                            <h3><a href="#">Getting Involved</a></h3>
                            <p>Community gardens, Deakin Sustainable Food Movement, Student for Sustainable Living- Reduce your Juice Game, Green Impact, Green Labs</p>
                         </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
								</div>
                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 1 month.</p>
                            </div>
                        </div>
                </div>
                    <!-- /.row -->
            </div>
            <!-- /.container -->
		</div>
		<!-- /#advantages -->

		<!-- *** ADVANTAGES END *** -->        


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Information</h4>

                        <ul>
                            <li><a href="aboutus.php">About us</a>
                            </li>
                            <li><a href="terms.php">Terms and conditions</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.php">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Food</h5>

                        <ul>
                            <li><a href="food.php">Eat Sustainably</a>
                            </li>
                            <li><a href="food.php">Waste</a>
                            </li>
							<li><a href="food.php">Eat on Campus</a>
                            </li>

                        </ul>

                        <h5>Transport</h5>
                        <ul>
                            <li><a href="transport.php">Public Transport</a>
                            </li>
                            <li><a href="transport.php">Active Transport</a>
                            </li>
                            <li><a href="transport.php">Flexi Car</a>
                            </li>

                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Deakin University</strong>
                            <br>Burwood Highway
                            <br>Burwood
                            <br>Victoria 3125
                            <br>
                            <strong>Australia</strong>
                        </p>

                        <a href="contact.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Deakin University</p>

                </div>

            </div>
      </div>
        <!-- *** COPYRIGHT END *** -->

    </div>
    <!-- /#all -->




    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>


</body>

</html>
