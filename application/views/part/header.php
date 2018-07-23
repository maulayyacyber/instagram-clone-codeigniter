<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<!-- meta tag -->
	<link rel="icon" href="http://www.transparentpng.com/download/logo-instagram/YfpFOL-logo-instagram-free-transparent.png">
	<!-- style sheet -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<style>
		.navbar-custom{
			background-color: #fff;
			border-color: #ddd;
			height: 65px
		}
		.card {
		  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		}

		.card {
		  margin-top: 10px;
		  box-sizing: border-box;
		  border-radius: 2px;
		  background-clip: padding-box;
		}
		.card span.card-title {
		    color: #fff;
		    font-size: 24px;
		    font-weight: 300;
		    text-transform: uppercase;
		}

		.card .card-image {
		  position: relative;
		  overflow: hidden;
		}
		.card .card-image img {
		  border-radius: 2px 2px 0 0;
		  background-clip: padding-box;
		  position: relative;
		  z-index: -1;
		}
		.card .card-image span.card-title {
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  padding: 16px;
		}
		.card .card-content {
			background-color: #fff;
		  padding: 16px;
		  border-radius: 0 0 2px 2px;
		  background-clip: padding-box;
		  box-sizing: border-box;
		}
		.card .card-content p {
		  margin: 0;
		  color: inherit;
		}
		.card .card-content span.card-title {
		  line-height: 48px;
		}
		.card .card-action {
			background-color: #fff;
		  border-top: 1px solid rgba(160, 160, 160, 0.2);
		  padding: 16px;
		}
		.card .card-action a {
		  color: #262626;
		  margin-right: 16px;
		  transition: color 0.3s ease;
		  text-transform: uppercase;
		}
		.card .card-action a:hover {
		  color: #ef0d0d;
		  text-decoration: none;
		}
		.chip {
		    display: inline-block;
		    padding: 0 25px;
		    height: 50px;
		    font-size: 16px;
		    line-height: 50px;
		    border-radius: 25px;
		}

		.chip img {
		    float: left;
		    margin: 0 10px 0 -25px;
		    height: 50px;
		    width: 50px;
		    border-radius: 50%;
		}
	</style>
</head>
<body style="background-color: #fafafa">

   <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">
          	<img src="<?php echo base_url() ?>resources/images/logo.png" style="width: 200px">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right" style="margin-top: 15px;">
          <a href="<?php echo base_url() ?>login/" class="btn btn-default" style="border-radius: 25px"><i class="fa fa-sign-in"></i> Masuk</a>
          <a href="<?php echo base_url() ?>register/" class="btn btn-success" style="border-radius: 25px"><i class="fa fa-user-plus"></i> Daftar</a>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>	
