<html lang="zn-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>Bootstrap 3</title>
	<link rel="stylesheet" href="/bootstrap/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bootstrap/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand logo" style="padding:0;"><img src="<?=base_url('img/bahamut.png')?>" width="50px" height="50px"></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right" style="margin-top:0;">
			<li class="active"><a href="<?=site_url('site/index')?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="<?=site_url('site/infor')?>"><span class="glyphicon glyphicon-list"></span> Info</a></li>
			<li><a href="<?=site_url('site/custom')?>"><span class="glyphicon glyphicon-fire"></span> custom</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> contus</a></li>
		</ul>
		</div>
		
	</div>
</nav>

<div class="jumbotron">
<div class="container">
<hgroup>
<h1>資訊</h1>
<h4>華人最大電玩社群</h4>
</hgroup>
</div>
</div>

<div id="infor">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="cintainer-fluid">
					<div class="row info-content">
						<div class="col-md-5 col-sm-5 col-xs-5">
							<img src="<?=base_url('img/23.jpg')?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<h4>123</h4>
							<p>456</p>
							<p>789</p>
						</div>
					</div>
					<div class="row info-content">
						<div class="col-md-5 col-sm-5 col-xs-5">
							<img src="<?=base_url('img/11111.jpg')?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<h4>123</h4>
							<p>456</p>
							<p>789</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 info-right hidden-xs hidden-sm">
			<blockquote>
				<h2>熱門資訊</h2>
			</blockquote>
				<div class="container-fluid">
					<div class="row">
						<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-5" style="margin:12px 0;padding:0px;">
							<img src="<?=base_url('img/11111.jpg')?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<h4>123</h4>
							<p>789</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-5" style="margin:12px 0;padding:0px;">
							<img src="<?=base_url('img/23.jpg')?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<h4>123</h4>
							<p>789</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-5" style="margin:12px 0;padding:0px;">
							<img src="<?=base_url('img/11111.jpg')?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-7 col-sm-7 col-xs-7">
							<h4>123</h4>
							<p>789</p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<footer id="footer">
	<div class="container">
		<p>http://www.gamer.com.tw/</p>
		<p>旺普網路資訊股份有限公司 ©All Rights Reserved.</p>
	</div>
</footer>


<script src="/cm/assets/js/jquery.min.js"></script>
<script src="/cm/assets/js/bootstrap.min.js"></script>
<script type="text/javascript">


</script>
	
</body>
</html>