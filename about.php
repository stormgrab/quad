<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<title></title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1">

				<link rel="stylesheet" href="css/bootstrap-flatly.css">
				<link rel="stylesheet" href="css/main.css">
				<link rel="stylesheet" href="css/owl.carousel.css">
				<link rel="stylesheet" href="css/owl.transitions.css">

				<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		</head>
		<body>
				<!--[if lt IE 7]>
						<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
				<![endif]-->

		<!-- Modal -->
		<div class="modal text-center fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Contact Details</h4>
					</div>
					<div class="modal-body row">
						<p class="col-sm-6">
							Address:<br>
							11 1st Main,<br>
							Brindavan Extension,<br>
							Arekere Layout - 75
						</p>
						<p class="col-sm-6">
							Phone:<br>
							98765-43210<br>
							98765-43210
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Navbar -->
		<div class="navbar-wrapper">
			<?php include 'includes/navbar.php'; ?>
		</div>


		<!-- Carousel -->
		<?php include 'includes/mainslider.php'; ?>



		<!-- Marketing messaging and featurettes
		================================================== -->
		<!-- Wrap the rest of the page in another container to center all the content. -->

		<hr class="featurette-divider">

		<div class="container marketing">
			<div class="jumbotron header-jumbotron">
		        <h1>Introducing QUAD</h1>
		        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
		    </div>
			<!-- Three columns of text below the carousel -->
			<div class="row">
				<div class="col-lg-12">
					<h1>Heading<br>
						<small>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</small>
					</h1>
				</div><!-- /.col-lg-4 -->
				
				<div class="col-lg-12 text-center">
					<img class="img-circle" data-src="holder.js/300x300" alt="Generic placeholder image">
				</div>
				
				<div class="col-lg-12">
					<h1>Heading<br>
						<small>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</small>
					</h1>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->

				<hr class="featurette-divider">

			<!-- FOOTER -->
			<footer>
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</footer>

		</div> <!-- /container -->        


		<!-- Scripts -->
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
				<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

				<script src="js/vendor/bootstrap.min.js"></script>

				<script src="js/main.js"></script>
				<script src="js/docs.js"></script>
				<script src="js/owl.carousel.min.js"></script>

				<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
				<script>
						(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
						function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
						e=o.createElement(i);r=o.getElementsByTagName(i)[0];
						e.src='//www.google-analytics.com/analytics.js';
						r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
						ga('create','UA-XXXXX-X');ga('send','pageview');
				</script>
		</body>
</html>
