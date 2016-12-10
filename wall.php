<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>慕光之城</title>
	<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/animewall.css">		
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/02wall.css">
	<script src="js/jquery-3.1.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php include 'login.php';?>

	<div class="wrapper">
		<header class="head2">

			<?php include 'nav.php';?>
				<script>
					$(function(){
						$('.up li:nth-child(1) a').addClass('acting');
					});
				</script>
			<p class="page_title">動態牆</p>

		</header>
		
		
		
		
		
		<section class="s21">
			<h2>動態牆</h2>
			<div class="wall">

				<div class="wall_box">
					<div class="wall_box_user">
						<div>
							<div class="imgbox"><img src="img/mm01.jpg"></div>
							<a href="#" class="person_title">Tasman Liu</a>
							<p>8/12 10:31 高雄</p>
						</div>
						<p>2016.8.5 思源啞口</p>
					</div>					
					<a href="#" class="imgbox"><img src="img/s12_04.png"></a>
					<div class="wall_box_like">
						<a href="#" class="like"><i class="fa fa-heart-o fa-fw"></i>喜歡</a>
						<span><i class="fa fa-heart fa-fw"></i>你和其他 1 人都喜歡</span>
					</div>
					<div class="wall_box_reply">
						<div>
							<div class="imgbox"><img src="img/mm02.jpg"></div>
							<p class="person_reply">吳韋廷</p>
						</div>
						<p>Cirrhochrista sp.</p>
					</div>
				</div>

				<div class="wall_box">
					<div class="wall_box_user">
						<div>
							<div class="imgbox"><img src="img/mm06.jpg"></div>
							<a href="#" class="person_title">Tasman Liu</a>
							<p>8/12 10:31 高雄</p>
						</div>
						<p>2016.8.5 思源啞口</p>
					</div>
					<a href="#" class="imgbox"><img src="img/s12_05.jpg"></a>
					<div class="wall_box_like">
						<a href="#" class="like"><i class="fa fa-heart-o fa-fw"></i>喜歡</a>
						<span><i class="fa fa-heart fa-fw"></i>你和其他 6 人都喜歡</span>
					</div>
					<div class="wall_box_reply">
						<div>
							<div class="imgbox"><img src="img/mm02.jpg"></div>
							<p class="person_reply">吳韋廷</p>
						</div>
						<p>Analthes sp.</p>
					</div>
				</div>

				<div class="wall_box">
					<div class="wall_box_user">
						<div>
							<div class="imgbox"><img src="img/mm01.jpg"></div>
							<a href="#" class="person_title">Tasman Liu</a>
							<p>8/12 10:31 高雄</p>
						</div>
						<p>2016.8.5 思源啞口</p>
					</div>
					<a href="#" class="imgbox"><img src="img/s12_06.jpg"></a>
					<div class="wall_box_like">
						<a href="#" class="like"><i class="fa fa-heart-o fa-fw"></i>喜歡</a>
						<span><i class="fa fa-heart fa-fw"></i>你和其他 3 人都喜歡</span>
					</div>
					<div class="wall_box_reply">
						<div>
							<div class="imgbox"><img src="img/mm04.jpg"></div>
							<p class="person_reply">顧建業</p>
						</div>
						<p>2016.07.30 新竹觀霧, 森林遊樂區遊客中心</p>
					</div>
				</div>

				<div class="wall_box">
					<div class="wall_box_user">
						<div>
							<div class="imgbox"><img src="img/mm01.jpg"></div>
							<a href="#" class="person_title">Tasman Liu</a>
							<p>8/12 10:31 高雄</p>
						</div>
						<p>2016.8.5 思源啞口</p>
					</div>
					<a href="#" class="imgbox"><img src="img/s12_07.jpg"></a>
					<div class="wall_box_like">
						<a href="#" class="like"><i class="fa fa-heart-o fa-fw"></i>喜歡</a>
						<span><i class="fa fa-heart fa-fw"></i>你和其他 2 人都喜歡</span>
					</div>
					<div class="wall_box_reply">
						<div>
							<div class="imgbox"><img src="img/mm05.jpg"></div>
							<p class="person_reply">Hanyuu Lin</p>
						</div>
						<p>請問這也是在思源埡口拍的嗎?</p>
					</div>
				</div>

			</div>
			<p class="more_btn">更多<i class="fa fa-caret-down fa-x"></i></p>
		</section>
		






		<?php include 'footer.php';?>





	</div>    
</body>
</html>