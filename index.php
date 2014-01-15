<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Search Horizon Beta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="multiple platform search tool plugin backup social network application">
  <meta name="author" content="Leon Lin">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">

	<!-- flexslider css -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/list.css" type="text/css" media="screen" />
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon2.ico">
   
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- xmas snow -->
	<script type="text/javascript" src="js/jquery.snow.min.1.0.js"></script>
	<script src="js/spin.js"></script>
	<script src="js/search.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<?php
		if(isset($_GET['keyword']))
		{
			echo "<script type=\"text/javascript\">data_fetch(\"".$_GET['keyword']."\");</script>";
		}
		else
			echo "<script type=\"text/javascript\">data_fetch(\"\");</script>";
	?>
	<style class="konami">

	</style>
</head>

<body>
<div id="fb-root"></div>
<script type="text/javascript" src="js/secret.js"></script>
<div class="container">
	<div class="row clearfix row_header">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<div class="page-header">
				<h1>Search Horizon Beta</h1>
				<img src="img/app_goal.png" alt="Make search more efficient!!"  class="img-responsive">
			</div>
		</div>
		<div class="col-md-2 column">
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-lg-12 column">
			<div class="input-group">
			  <input type="text" class="form-control keyword" placeholder="type some keywords or names">
			  <span class="input-group-btn">
			    <button class="btn btn-default search" type="button"><i class="fa fa-search"></i></button>
			  </span>
			</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	<div class="row clearfix second_menu">
		<div class="col-md-12 column">
			<div class="progress">
			  <div class="progress-bar progress-bar-warning" style="width: 25%">
			    <span class="sr-only">Plurk</span>
			  </div>
			  <div class="progress-bar progress-bar-info" style="width: 25%">
			    <span class="sr-only">Twitter</span>
			  </div>
			  <div class="progress-bar" style="width: 25%">
			    <span class="sr-only">Facebook</span>
			  </div>
			  	<div class="progress-bar progress-bar-danger" style="width: 25%">
			    <span class="sr-only">Google+</span>
			  </div>
			</div>
		</div>
	</div>
		<div class="row clearfix">
		<div class="col-md-3 column plurk" style="text-align:left; vertical-align:center">
			<i data-target="#panel-plurk"><img alt="256x256" width="240px" height="240px" style="margin-top:10px;" src="img/plurk3.png" /></i>
			<!-- <i class="fa fa-camera-retro fa-5x"></i> -->
		</div>
		<div class="col-md-3 column twitter">
			<!-- <img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" /> -->
			<i data-target="#panel-twitter" class="fa fa-twitter-square fa-5x"></i>
		</div>
		<div class="col-md-3 column facebook">
			<!-- <img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" /> -->
			<i data-target="#panel-facebook" class="fa fa-facebook-square fa-5x"></i>
		</div>
		<div class="col-md-3 column googleplus">
			<!-- <img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" /> -->
			<i data-target="#panel-googleplus" class="fa fa-google-plus-square fa-5x"></i>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		</div>
	</div>
	<div class="wait" style="position:relative;left:50%; height:10%; display:block;"></div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		   <div class="col-md-12">
		   		<div class="upgrade">
			    	<i class="fa fa-bookmark"></i>
				    <span>Level Up</span><i class="fa fa-level-up"></i>
				    <p>upgrade with <i class="fa fa-facebook-square"></i></p>
				</div>
		   </div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="tabbable" id="tabs-663924">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-advanced" data-toggle="tab">DashBoard</a>
					</li>
					<li>
						<a href="#panel-plurk" data-toggle="tab">Plurk</a>
					</li>
					<li>
						<a href="#panel-twitter" data-toggle="tab">Twitter</a>
					</li>
					<li>
						<a href="#panel-facebook" data-toggle="tab">Facebook</a>
					</li>
					<li>
						<a href="#panel-googleplus" data-toggle="tab">Google+</a>
					</li>
					<li>
						<a href="#panel-configuration" data-toggle="tab"><i class="fa fa-cogs"></i>Configs</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-advanced">
					</div>
					<div class="tab-pane" id="panel-plurk">
					</div>
					<div class="tab-pane" id="panel-twitter">
					</div>
					<div class="tab-pane" id="panel-facebook">
					</div>
					<div class="tab-pane" id="panel-googleplus">
					</div>
					<div class="tab-pane" id="panel-configuration">
					</div>
				 <script src="js/detectBrowser.js"></script>
					 <script src="js/configs.js"></script>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="alert alert-dismissable alert-info">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	      <h4>Secret Tip:</h4>
	      <p>type with arrow key:<br>
	      	↑ ↓ ← → B A</p>
	    </div>
	</footer>
</div>

  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>

<div class="konami developer-pane" data-effeckt-page="developer-page">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="jumbotron">
				<h1>
					Search Horizon Team Member
				</h1>
				<p>
					Four junior undergraduates majoring in 
					department of Computer Science - University of Taipei 
				</p>
				<p>
					<a class="btn btn-primary btn-large konami" href="#">Return</a>
				</p>
			</div>
			<div class="row clearfix">
				<div class="col-md-3 column">
					<img alt="140x140" src="img/10016001.jpg" class="img-rounded" />
				</div>
				<div class="col-md-3 column">
					<img alt="140x140" src="img/10016022.jpg" class="img-rounded" />
				</div>
				<div class="col-md-3 column">
					<img alt="140x140" src="img/10016024.jpg" class="img-rounded" />
				</div>
				<div class="col-md-3 column">
					<img alt="140x140" src="img/10016026.jpg" class="img-rounded" />
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-4 column">
					<a class="thumbnail" title="presentation checkpoint 1" href="https://dl.dropboxusercontent.com/u/36926980/presentation2/index.html" target="_blank">Presentation 1
					<br><br><img class="img-responsive" src="img/pre1.png"></a>
				</div>
				<div class="col-md-4 column">
					<a class="thumbnail" title="presentation checkpoint 3" href="SearHorizon.htm" target="_blank">Presentation 3
					<br><br><img class="img-responsive" src="img/pre3.png"></a>
				</div>
				<div class="col-md-4 column">
					<a class="thumbnail" title="Celebration" href="https://dl.dropboxusercontent.com/u/36926980/celebration/index.html" target="_blank">Celebration
					<br><br><img class="img-responsive" src="img/la3.jpg"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-8 column">
				<div class="jumbotron">
					<h1>
						Google Extension Alpha
					</h1>
					<p>
						Stable version<br>
						1. download and extract file<br>
						2. in chrome to url: chrome://extensions<br>
						3. choose developer mode in checkbox<br>
						4. import unpackage extensions & choose file directory
					</p>
					<p>
						<a class="btn btn-primary btn-large extension-download" href="https://dl.dropboxusercontent.com/u/36926980/presentation2/contextMenuOnChrome.crx" target="_blank">download</a>
					</p>
				</div>
		</div>
			<div class="row clearfix">
			<div class="col-md-6 column">
				<div class="alert alert-dismissable alert-info">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h2>
					2013/12/7
				</h2>
				<p>
					Add search query & site<br>
					Use php extension "curl" to fetch data on other websites<br>
					Use php DOM document to transform data to information
				</p>
				</div>
			
						<div class="alert alert-dismissable alert-success">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h2>2013/12/9</h2>
							<p>	
								Fixed url doesn't match bugs<br>
								Modified bootstrap.min.css to add google font<br>
								Decorated main page ( add font-awesome.css, kuler, favicon,<br>
								css-maker)
							</p>
						</div>
					<div class="alert alert-dismissable alert-warning">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<h2>2013/12/10</h2>
										<p>	
											Introduction decoration ( infograph, bootstrap component)
										</p>
					</div>
					<div class="alert alert-dismissable alert-danger">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<h2>2013/12/22</h2>
										<p>	
											Chrome plugin Alpha version<br>
											Sign with Facebook <br>
											Customizing bootstrap (optimazing)<br>
											Add some jquery extensions<br>
											<br>
											Customized & advanced search (programming...)<br>
											Data Visualization with Three.js & HTML5 support<br>
											Social network backup support /* issue */
										</p>
					</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
