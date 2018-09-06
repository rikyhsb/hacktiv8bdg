<!DOCTYPE html>
<html>
<head>
	<title>Hacktiv8 Frontend Basic Batch 1 Bandung : Final Project </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script type="text/javascript">
    	document.addEventListener("DOMContentLoaded", function(){
			$('.preloader-background').delay(1700).fadeOut('slow');
			$('.preloader-wrapper')
				.delay(1700)
				.fadeOut();
		});
    </script>
    <style type="text/css">
    	body {
    		background-color: #999;
    	}
    	.card .card-title {
    		font-size: 22px;
    	}

    	.preloader-background {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #999;
			
			position: fixed;
			z-index: 100;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;	
		}
    </style>
</head>
<body>
	<div class="preloader-background">
		<div class="preloader-wrapper big active">
			<div class="spinner-layer spinner-blue">
			    <div class="circle-clipper left">
		      		<div class="circle"></div>
			    </div>
			    <div class="gap-patch">
			      <div class="circle"></div>
			    </div>
			    <div class="circle-clipper right">
			      <div class="circle"></div>
			    </div>
			</div>

      		<div class="spinner-layer spinner-red">
      			<div class="circle-clipper left">
		          <div class="circle"></div>
		        </div>
		        <div class="gap-patch">
		          <div class="circle"></div>
		        </div>
		        <div class="circle-clipper right">
		          <div class="circle"></div>
		        </div>
		    </div>

		    <div class="spinner-layer spinner-yellow">
		    	<div class="circle-clipper left">
		          <div class="circle"></div>
		        </div>
		        <div class="gap-patch">
		          <div class="circle"></div>
		        </div>
		        <div class="circle-clipper right">
		          <div class="circle"></div>
		        </div>
		    </div>

	      	<div class="spinner-layer spinner-green">
	        	<div class="circle-clipper left">
	          		<div class="circle"></div>
	        	</div>
	        	<div class="gap-patch">
	          		<div class="circle"></div>
	        	</div>
	        	<div class="circle-clipper right">
	          		<div class="circle"></div>
	        	</div>
	      	</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12"></div>
		</div> 
		<div class="row">
			<div class="col s3">
				<div class="card sticky-action">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/cecep.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Cecep Triyandi</span>
				    </div>
				    <div class="card-reveal">
						<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
						<p>
							About : <br> Enterpreuner
							Final Project : <br> Photography Enthusiast
							<div class="clearfix"></div>
						</p>
				    </div>
				    <div class="card-action">
			          <a class="waves-effect waves-light btn-floating btn orange" href="https://ctriyandiputra.netlify.com/" target="_blank"><i class="material-icons right">link</i></a>
			        </div>
			 	</div>
			</div>
			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/luthfi.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Luthfi Azizi</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>
			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/hanna.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Liqahanna Aviena Putri</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>

			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/andriyana.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Andriyana</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>

			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/regi.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Regi Rivaldi</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>

			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/geeraldo.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Geraldo Jose</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>

			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/prima.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Claudia Cahya Primadani</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>

			<div class="col s3">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="img/krisna.jpg">
				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Krishna Diswatra</span>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
				      <p>Here is some more information about this product that is only revealed once clicked on.</p>
				    </div>
			 	</div>
			</div>
			
<!-- 			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card"> 
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/luthfi.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Aksata - Web Company Profile</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card">
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/hanna.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Product title</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card">
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/andriyana.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Product title</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card">
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/regi.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Product title</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card">
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/geeraldo.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Product title</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card">
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/prima.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Uncore - Software House Web Profile</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item col-xs-3 col-lg-3">
				<div class="thumbnail card">
					<div class="img-event">
						<img class="group list-group-image img-fluid" src="img/krisna.jpg" alt="" />
					</div>
					<div class="caption card-body">
						<h4 class="group card-title inner list-group-item-heading">
						Product title</h4>
						<p class="group inner list-group-item-text">
							Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="lead">
								$21.000</p>
							</div>
							<div class="col-xs-12 col-md-6">
								<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>