<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>慕光之城</title>
	<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
	<link rel="stylesheet" type="text/css" href="css/reset.css">	
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">	
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/03album.css">
	<script src="js/jquery-3.1.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php include 'login.php';?>
	<div class="wrapper">
		<header class="head3">

			<?php include 'nav.php';?>
				<script>
					$(function(){
						$('.up li:nth-child(2) a').addClass('acting');
					});
				</script>
			<p class="page_title">相簿</p>

		</header>





	<div class="s3_top">
		<section class="s31">
			<h2>相簿查詢</h2>
			<div class="s31_1">
				<form action="#">
				    <div class="s31_1box">
				    	<label for="fname">相簿名稱</label>
				    	<input type="text" name="album_name">
				    </div>
		
				    <div class="s31_1box">
				    	<label for="lname">提供者</label>
				    	<input type="text" name="provider">
				    </div>
		
				    <div class="s31_1box">
				    	<label for="country">年</label>
				    	<select name="year">
				    		<option value="2016">2016</option>
				    		<option value="2015">2015</option>
				    		<option value="2014">2014</option>
				    		<option value="2013">2013</option>
				    		<option value="2012">2012</option>
				    		<option value="2011">2011</option>
				    		<option value="2010">2010</option>
				    		<option value="2009">2009</option>
				    		<option value="2008">2008</option>
				    		<option value="2007">2007</option>
				    		<option value="2006">2006</option>
				    		<option value="2005">2005</option>
				    	</select>
				    </div>
				  
				    <div class="s31_1box">
				    	<label for="country">月</label>
				    	<select name="month">
				    		<option value="1">1</option>
				    		<option value="2">2</option>
				    		<option value="3">3</option>
				    		<option value="4">4</option>
				    		<option value="5">5</option>
				    		<option value="6">6</option>
				    		<option value="7">7</option>
				    		<option value="8">8</option>
				    		<option value="9">9</option>
				    		<option value="10">10</option>
				    		<option value="11">11</option>
				    		<option value="12">12</option>
				    	</select>
				    </div>
		
				    <div class="s31_1box">
				    	<label for="country">縣市</label>
				    	<select name="city">
				    		<option value="台北市">台北市</option>
				    		<option value="新北市">新北市</option>
				    		<option value="桃園市">桃園市</option>
				    	</select>
				    </div>
		
				    <div class="s31_1box">
				    	<label for="country">地點</label>
				    	<input type="text" name="locate">
				    </div>
		
				    <input type="submit" class="blue_btn" value="查詢">
				</form>
			</div>
		</section>
		
		<section class="s32">
			<h2>相簿說明</h2>
			<div class="s32_content">
				<p>若 4 張以上的照片都是相同的提供者,拍攝日期和地點，則可以整合成一本相簿，其他單張零散的照片會歸納在系統為您創建的名為"單張照片"的相簿裡。</p>
				<p>除了系統的"單張照片"相簿之外，請勿在相簿中放入不同提供者、拍攝日期和地點的照片。</p>
				<a href="#" class="blue_btn">建立新相簿</a>
			</div>
		</section>
	</div>





		<section class="s33">
			<h2>查詢結果</h2>
			<div class="s33_1">
				<p>尚無查詢結果</p>
			</div>
		</section>





		<section class="s34">
			<h2>相簿總覽</h2>
<!-- 			<div class="s34_1">
				<ul>
					<li><a class="s34btn s34btn01">依時間排序</a></li>
					<li><a class="s34btn s34btn02">依地點排序</a></li>
					<li><a class="s34btn s34btn03">依提供者排序</a></li>
				</ul>
			</div> -->
			<div class="s34_2">
				<div class="s34_2box">
					<div class="album_name">
						<h3>新竹觀霧</h3>
					</div>
					<a href="#" class="imgbox"><img src="https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12038986_1114198751954079_2426156702801118768_o.jpg"></a>

				</div>
				<div class="s34_2box">
					<div class="album_name">
						<h3>高雄藤枝部落</h3>
					</div>
					<a href="#" class="imgbox"><img src="https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12034491_1114198888620732_6475287739809919252_o.jpg"></a>
				</div>
				<div class="s34_2box">
					<div class="album_name">
						<h3>二萬平阿里山</h3>
					</div>
					<a href="#" class="imgbox"><img src="https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12028661_1114205281953426_528850639178027132_o.jpg"></a>
				</div>
				<div class="s34_2box">
					<div class="album_name">
						<h3>阿里山青年活動中心</h3>
					</div>
					<a href="#" class="imgbox"><img src="https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12017670_1114391995268088_8260121806133470954_o.jpg"></a>
				</div>
				<div class="s34_2box">
					<div class="album_name">
						<h3>台北福州公園</h3>
					</div>
					<a href="#" class="imgbox"><img src="https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/11838701_1114394921934462_8034811869475435580_o.jpg"></a>
				</div>
				<div class="s34_2box">
					<div class="album_name">
						<h3>何季耕蛾類觀察記錄</h3>
					</div>
					<a href="#" class="imgbox"><img src="https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12032856_1114406318599989_5395671498528550326_o.jpg"></a>
				</div>
			</div>
			<p class="more_btn">更多<i class="fa fa-caret-down fa-x"></i></p>
		</section>






	 <?php include 'footer.php';?> 





	</div>
	<script>
		$(function(){
			$('.s34_1 .s34btn').removeClass('act').removeClass('yel').addClass('gry');
			$('.s34_1 .s34btn03').removeClass('gry').addClass('act');

			$('.s34_1 .s34btn').click(function(){
				$('.s34_1 .s34btn').removeClass('act').removeClass('yel').addClass('gry');
				$(this).removeClass('gry').addClass('act');
			});
			$('.s34_1 .s34btn').hover(function(){
				if( !$(this).hasClass('act') ){
					$(this).removeClass('gry');
					$(this).addClass('yel');
				}
			},function(){
				if( !$(this).hasClass('act') ){
					$(this).removeClass('yel');
					$(this).addClass('gry');
				}
			});

			$('.s34btn01').click(function(){
				$(".s34_2").load('album_search/providers.php');				
			});
			$('.s34btn02').click(function(){
				$(".s34_2").load('album_search/location.php');				
			});
			$('.s34btn03').click(function(){
				$(".s34_2").load('album_search/date.php');				
			});

		});
	</script>
</body>
</html>