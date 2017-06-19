	<!DOCTYPE html>

	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Berryfields - Your next home!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		

		<!--link rel="stylesheet/less" href="src/less/bootstrap.less" type="text/css" /-->
		<!--link rel="stylesheet/less" href="src/less/responsive.less" type="text/css" /-->
		<!--script src="js/less-1.3.3.min.js"></script-->
		<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
		
		<link href="global/css/bootstrap.min.css" rel="stylesheet">
		<link href="global/css/docs.css" rel="stylesheet">
		<link href="src/css/style.css" rel="stylesheet">
	
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="src/img/favicon.ico">
		



	</head>
	<body>
	
	<!-- Google Tag Manager -->
	
<script>
  /*
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28355442-2', 'auto');
  ga('send', 'pageview');
*/
</script>
<!-- End Google Tag Manager -->

		<!--- Header Image -->
		<div class="container-fluid">
			<div class="row clearfix" id="topper">
				<img alt="Pana" src="/src/img/Chimney-Processed.jpg">
			</div>
		</div>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<h1 class="text-center">
						Berryfields <br>
					</h1>
					<h2 class="text-center">  Dream Sustainable Lifestyle Property </h2>
				</div>
			</div>
		</div>
		
	<div class="col-md-12">
	<div class="row">
			<!--- The main article about the house -->
		<div class="col-md-7 column">
			<p>This lifestyle property provides the perfect balance between country living and city life. Tranquil and quiet but only 12 minutes to the city.<br>
			</p> 	
			<ul>
			<li>Stunning 360° views</li>
			<li>All day sun with well sheltered areas</li>
			<li>Over 3 acres of land, featuring a permaculture garden design</li>
			<li>Living area heated by woodburner with integrated water heating</li>
			<li>Second lounge with open fire</li>
			<li>Insulated under floor and ceiling</li>
			<li>4 large bedrooms</li>
			<li>Sunroom/study</li>
			<li>Large laundry with walk-in linen room</li>
			<li>Double garage with internal access</li>
			<li>Bathroom with bath and separate shower</li>
			<li>Situated 2 kilometres south west of Sawyers Bay in a rural setting, 10 kilometres north of the Octagon</li>
			<li>The dwelling is very well orientated with the living areas having a northerly aspect</li>
			<li>Handy to trendy Port Chalmers' galleries and shops </li>
			</ul>

		</div>
		    <!-- permaculture sidebar-->
<div class="col-md-5">
			<h3>Permaculture</h3>
			<p> This property is based on permaculture principles and includes a integrated forest garden of fruit trees, berry bushes, and vegetables designed by Jason Ross. A herb spiral, raised veggie beds, glasshouse, and composting area. It also includes a worm farm, chicken coop, tool shed and a large barn. We are currently grazing 4 sheep, 4 chickens and a horse
			</p>
			</div>
				    <!-- /permaculture sidebar-->

		<!-- History sidebar-->

		<div class="col-md-5">
			<h3>History</h3>
			<p>Originally farmed by the Goddard family which grew vegetables and strawberries on this very fertile land.  
			</p>
			<p>This much loved property has been our home for the past 21 years and has provided a wonderful environment to bring up our 4 boys.
			</p>			
		</div>
		 <!-- /History sidebar-->

				</div>		
				</div>
<br>

	<div class="container-fluid">
    <div class="row">
    <!-- main slider carousel -->

        <div class="col-md-12" id="slider">
            
                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
												<?php $mainPhotos = glob("src/img/carousel/big/*.jpg");
														$countPhotos = 0;

														
														foreach ($mainPhotos as $pic) {
															echo "<div class='";
																if($countPhotos==0){
																	echo "active ";
																}
																//add the 0 so the carousel can read the first two digits
																if($countPhotos<10){
																	echo "item' data-slide-number='0".$countPhotos."'>";
																}else{
																	echo "item' data-slide-number='".$countPhotos."'>";
																}
																echo "<img src='".$pic."' class='img-responsive' alt='".basename($pic,'.jpg')."'></div>";
																$countPhotos++;
														}
														?>	
												</div>
			

												
                            
                        <!-- main slider carousel nav controls --> 
												<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                    </div>
                </div>

        </div>
		
				<br>
				
				 	<!-- thumb navigation carousel -->
    <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">
        
            <!-- thumb navigation carousel items -->
          <ul class="list-inline">
					<?php $navPhotos = glob("src/img/carousel/thumb/*.jpg");
						$countThumbs = 0;
						foreach ($navPhotos as $thumb) {
							echo  "<li> <a id='carousel-selector-".$countThumbs."' ";
								if($countThumbs==0){
									echo "class='selected'";
									}
									echo ">";
									echo "<img src=".$thumb." class='img-responsive' alt='".basename($thumb,'.jpg')."'></a></li>";
									$countThumbs++;
							}
			?>

            </ul>
        
			</div>

	</div>

	</div>
	    <!--/main slider carousel-->
			
		<div class="container">
			<div class="row clearfix" id="blueprint">
				<div class="row clearfix">
					<div class="col-md-9">
					<img alt="Pana" src="/src/img/blueprint.gif">
					</div>
					<div class="col-md-3"  id="blueprintBlurb">
						<div class="text-container col-centered">
							<p>This large family home has 4+ bedrooms, conservatory, separate toilet, double garage, wood burner, open fire and large linen room.
						</div>
					</div>
				</div>
			</div>
		</div>



<div class="container" id="contactForm">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Contact</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row-fluid contact">
    <div class="span4">
      <ul class="bordered-list">
      	<li class="img-person">Sandra </li>
        <li class="img-location">16 Strawberry Lane, Sawyers Bay, Dunedin</li>
        <li class="img-phone"><b></b> 027 57 12345 </li>
        <li class="img-email"><b></b> southernwoman2@hotmail.com</li>
      </ul>
    </div>
    <div class="span6">
      <div class="wpcf7" id="wpcf7-f75-t1-o1">
        <form action="/mail.php" method="post" class="wpcf7-form" id="cform" name="cform">
          <div id="output" class="alert"> </div>
          <div class="form-meta clearfix">
            <div class="formcol">
              <label for="fname"> First Name</label>
              <input type="text" name="fname" value="" id="fname" size="40" />
              <label for="lname"> Last Name</label>
              <input type="text" name="lname" value="" id="lname" size="40" />
            </div>
            <div class="formcol">
              <label for="email"> Email Address</label>
              <input type="text" name="email" id="email" value="" size="40" />
              <label for="subject"> Subject</label>
              <input type="text" name="subject" id="subject" value="" size="40" />
            </div>
          </div>
          <label for="message"> Message</label>
          <textarea name="message" id="message" cols="40" rows="10"></textarea>
          <input type="submit" id="send-message" value="Send" class="btn btn-success" />
        </form>
      </div>
    </div>	
  </div>
</div>

	<script src="global/js/jquery.js"></script> 
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> 
	<script src="global/js/google-code-prettify/prettify.js"></script> 
	
	<script src="global/js/contact.js" type="text/javascript"></script> 
	
	<script type="text/javascript" src="/global/js/jquery.min.js"></script>
	<script type="text/javascript" src="/global/js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="/src/js/jquery.mobile.custom.min.js"></script> -->
	<script type="text/javascript" src="/global/js/scripts.js"></script>
	
	
	<script type="text/javascript">
	 	
		// handles the carousel thumbnails
		$('[id^=carousel-selector-]').click( function(){
			var id_selector = $(this).attr("id");
			var id = id_selector.replace(/\D+/, '');
			id = parseInt(id);
			$('#myCarousel').carousel(id);
			$('[id^=carousel-selector-]').removeClass('selected');
			$(this).addClass('selected');
		});

// when the carousel slides, auto update
		$('#myCarousel').on('slid.bs.carousel', function(e) {
			var id = $('.item.active').data('slide-number');
			id = parseInt(id);
			$('[id^=carousel-selector-]').removeClass('selected');
			$('[id=carousel-selector-'+id+']').addClass('selected');
		});
					
            $('#myCarousel').carousel({
							interval: 4000
						});

        </script>


	</body>
</html>
