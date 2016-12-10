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
	<link rel="stylesheet" type="text/css" href="css/05zukan.css">
	<script src="js/jquery-3.1.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php include 'login.php';?>
	<div class="wrapper">
		<header class="head5">

			<?php include 'nav.php';?>
				<script>
					$(function(){
						$('.up li:nth-child(4) a').addClass('acting');
					});
				</script>
			<p class="page_title">圖鑑</p>

		</header>





		<section class="s51">
			<h2>蛾類鑑定指引</h2>
			<div class="s51_1">
				<div class="s51_1box">
					<p>
						台灣蛾類的種類約有四千多種，鑑定到學名是相當學術而專業的工作，因為蛾類有許多近似種，長相相似，無法單憑照片就可以判別，需要進一步的解剖，因此這裡提供常見的，色彩鮮明並且沒有近似種的蛾類給蛾友們做初步的參考。
					</p>
					<p>
						本圖鑑以蛾類外型做分類，幫助使用者篩選出可能的科名，點選後，再依照蛾類圖片尋找。
					</p>
					<p>歡迎各位蛾友提供照片或資訊，或是回報圖鑑內的錯誤內容，以求讓圖鑑可以逐漸擴充至完善。</p>
					<div class="btn_wrapper">
						<a href="#" class="yellow_btn">回報錯誤</a>
						<a href="#" class="blue_btn">提供資訊</a>
					</div>
				</div>

				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_08.png"></div>
					<p class="title">摺疊型</p>
					<a href="#" id="zukan01">斑蛾科 Zygaenidae</a>
					<a href="#" id="zukan02">燈蛾科 燈蛾亞科 苔蛾族 Lithosiini</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_02.png"></div>
					<p class="title">箭頭型</p>
					<a href="#" id="zukan03">天蛾科 Sphingidae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_03.png"></div>
					<p class="title">平展型</p>
					<a href="#">尺蛾科 Geometridae</a>
					<a href="#">裳蛾科 裳蛾亞科 Catocalinae</a>
					<a href="#">燕蛾科 燕蛾亞科 Uraniinae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_04.png"></div>
					<p class="title">T字型</p>
					<a href="">蠶蛾科 Bombycidae</a>
					<a href="">燕蛾科 雙尾蛾亞科 Epipleminae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_05.png"></div>
					<p class="title">尾突型、天蠶蛾型</p>
					<a href="#">天蠶蛾科 Saturniidae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_06.png"></div>
					<p class="title">蝶型</p>
					<a href="#">錨紋蛾科 Callidulidae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_07.png"></div>
					<p class="title">屋脊型</p>
					<a href="#">夜蛾總科 Noctuoidea</a>
					<a href="#">裳蛾科 Erebidae</a>
					<a href="#">擬燈蛾亞科 Aganainae</a>
					<a href="#">燈蛾亞科 Arctiinae</a>
					<a href="#">毒蛾亞科 Lymantriinae</a>
					<a href="#">裳蛾亞科 Catocaliane</a>
					<a href="#">壺夜蛾亞科 Calpinae</a>
					<a href="#">鉤蛾科 波紋蛾亞科 Thyatirinae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_01.png"></div>
					<p class="title">平展帶鉤型</p>
					<a id="test" href="#">鉤蛾科鉤蛾亞科 Drepaninae</a>
					<a href="#">尺蛾科枝尺蛾亞科 Ennominae</a>
					<a href="#">尺蛾科 青尺蛾亞科 Geometrinae</a>
					<a href="#">尺蛾科 姬尺蛾亞科 Sterrhinae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_09.png"></div>
					<p class="title">轟炸機型</p>
					<a href="#">螟蛾總科</a>
					<a href="#">螟蛾科 Pyralidae</a>
					<a href="#">草螟科 Crambidae</a>
					<a href="#">尺蛾科 波尺蛾亞科 Larentiinae</a>
				</div>
				<div class="s51_1box">
					<div class="imgbox"><img src="img/s51_10.png"></div>
					<p class="title">前掠型</p>
					<a href="#">枯葉蛾科 Lasiocampidae</a>
					<a href="#">舟蛾科 Notodontidae</a>
					<a href="#">天蛾科 Sphingidae</a>
				</div>
			</div>

		</section>





		<section class="s52">
			<h2>查詢結果</h2>
			<div class="s52_1">
				<p class="before_search">尚無查詢結果</p>
			</div>
			<p class='more_btn'>更多<i class='fa fa-caret-down fa-x'></i></p>
		</section>





	<?php include 'footer.php';?>





	</div>

<script type="text/javascript">

	$(document).ready(function(){

		$("#zukan01").click(function(){
	    	$(".s52_1").load('zukan/zukan_photo01.php');
	    	$('html, body').animate({
    			scrollTop: $(".s52").offset().top
				}, 1000);
	  	});
		$("#zukan02").click(function(){
	    	$(".s52_1").load('zukan/zukan_photo02.php');
	    	$('html, body').animate({
    			scrollTop: $(".s52").offset().top
				}, 1000);
		});
	  	$("#zukan03").click(function(){
	    	$(".s52_1").load('zukan/zukan_photo03.php');
	    	$('html, body').animate({
    			scrollTop: $(".s52").offset().top
				}, 1000);
		});
	});

</script>
</body>
</html>