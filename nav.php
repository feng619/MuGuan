<?php
echo"
			<input type='checkbox' name='' id='menu2_control'>
			<nav>

				<a href='index.php' class='logo imgbox'>
					<img src='img/logo01.png'>
				</a>
				<label id='hambur' for='menu2_control'></label>
				<div class='menu2'>
					<ul>
						<li><a href='wall.php'><i class='fa fa-th fa-fw'></i>動態牆</a></li>
						<li><a href='album.php'><i class='fa fa-picture-o fa-fw'></i>相簿</a></li>
						<li><a href='data.php'><i class='fa fa-database fa-fw'></i>資料庫</a></li>
						<li><a href='zukan.php'><i class='fa fa-book fa-fw'></i>圖鑑</a></li>
						<li><a href='event.php'><i class='fa fa-calendar fa-fw'></i>活動</a></li>
						<li><a href='about.php'><i class='fa fa-info-circle fa-fw'></i>關於</a></li>
						<li><a href='#' class='memb'><i class='fa fa-user fa-fw memb'></i>會員</a></li>
					</ul>
				</div>

				<div class='menu'>
					<ul class='up'>
						<li><a href='wall.php'>動態牆</a><span class='underline'></span></li>
						<li><a href='album.php'>相簿</a><span class='underline'></span></li>
						<li><a href='data.php'>資料庫</a><span class='underline'></span></li>
						<li><a href='zukan.php'>圖鑑</a><span class='underline'></span></li>
					</ul>
					<ul class='down'>
						<!--<li><a href='#'><i class='fa fa-tags fa-fw'></i></a></li>-->
						<li><a href='event.php'><i class='fa fa-calendar fa-fw'></i></a></li>
						<li><a href='about.php'><i class='fa fa-info-circle fa-fw'></i></a></li>
						<li><a href='#'><i class='fa fa-user fa-fw memb'></i></a></li>
					</ul>
				</div>

			</nav>
";

?>
<script>
	$(function(){
		var mX = -1 , direction=true;
		

		$('body').mousemove(function(e) {
			direction = e.pageX > mX ? true:false;
			mX = e.pageX;
		});	

		
			$('.up a').hover(function(){
				if( !$(this).hasClass('acting')){
				if (direction) { //往右
					// 出現 : 左到右
					$(this).next().css({'width':'0%','left':'0%'});
					$(this).next().stop(true,false).animate({width:'100%'});
		    	} else { //往左
		    		// 出現 : 右到左 
					$(this).next().css({'width':'100%','left':'100%'});
					$(this).next().stop(true,false).animate({left:'0%'});
		    	}			
				}
			},function(){
				if( !$(this).hasClass('acting')){
				if (direction) { //往右
		    		// 消失 : 左到右
					$(this).next().css({'width':'100%','left':'0%'});
		    		$(this).next().stop(true,false).animate({left:'100%'});
		    	} else { //往左
					// 消失 : 右到左 
					$(this).next().css({'width':'100%','left':'0%'});
					$(this).next().stop(true,false).animate({width:'0%'});
		    	}
		    	}
			});
		


		/* scroll */
		var lastST = 0; /*lastScrollTop*/
		$(window).scroll(function(e){
		   var nowST = $(this).scrollTop();
		   if (nowST > lastST && nowST > 128){
		       /* 向下 */
		       $('nav').fadeOut();
		   } else {
		       /* 向上 */
		       $('nav').fadeIn();
		   }
		   lastST = nowST;
		});

		
	});
</script>