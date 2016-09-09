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
			<a href="#" class="navbar-brand logo" style="padding:0;"><img src="img/bahamut.png" width="50px" height="50px"></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right" style="margin-top:0;">
			<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="site/infor"><span class="glyphicon glyphicon-list"></span> Info</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-fire"></span> custom</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> contus</a></li>
		</ul>
		</div>
		
	</div>
</nav>

<div id="myCarousel" style="margin-top:50px" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" style="margin:0 auto;">
		<div class="item active"><img src="img/11111.jpg"></div>
		<div class="item"><img src="img/11111.jpg"></div>
		<div class="item"><img src="img/11111.jpg"></div>
	</div>

<a href="#myCarousel" data-slide="prev" class="carousel-control left">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a href="#myCarousel" data-slide="next" class="carousel-control
right">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>


<div class="tab1">
	<div class="container">
		<h2 class="tab-h2">「為什麼選擇巴哈姆特」</h2>
		<p class="tab-p">強大的社群,讓您身歷其中</p>
		<div class="row">
			<div class="col-md-6 col">
				<div class="media">
					<div class="media-left">
						<a href=""><img src="img/bahamut.png" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">為什麼選巴哈</h4>
						<p class="text-muted"></p>
						<p>華人最大電玩社群網站</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col">
				<div class="media">
					<div class="media-left">
						<a href=""><img src="img/bahamut.png" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">為什麼選巴哈</h4>
						<p class="text-muted"></p>
						<p>人多</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col">
				<div class="media">
					<div class="media-left">
						<a href=""><img src="img/bahamut.png" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">為什麼選巴哈</h4>
						<p class="text-muted"></p>
						<p>人超多</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col">
				<div class="media">
					<div class="media-left">
						<a href=""><img src="img/bahamut.png" alt=""></a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">為什麼選巴哈</h4>
						<p class="text-muted"></p>
						<p>多到滿出來</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="tab2">
	<div class="container">
		<div class="row">
			<div class="text col-md-6-col-sm-6 tab2-text">
				<h3>最大的電玩社群</h3>
				<p>讓你交流無障礙</p>
			</div>
			<div class="col-md-6-col-sm-6 tab2-img">
				<img src="img/bahamut1.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="tab3">
	<div class="container">
		<div class="row">
			<div class="col-md-6-col-sm-6">
				<img src="img/bahamut1.png" alt="">
			</div>
			<div class="text col-md-6-col-sm-6">
				<h3>最大的電玩社群</h3>
				<p>讓你交流無障礙</p>
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

$('#myCarousel').carousel({
//设置自动播放/2 秒
interval : 3000,
});

// $('.carousel-control').css('line-height',$('.carousel-inner img').height() +'px');
// $(window).resize(function(){
// 	var $height = $('.carousel-inner img').eq(0).height()||
// 				  $('.carousel-inner img').eq(1).height()||
// 				  $('.carousel-inner img').eq(2).height();
// $('.carousel-control').css('line-height',$height +'px');
// });

</script>
	
</body>
</html>