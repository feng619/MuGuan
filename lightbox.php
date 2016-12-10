
<?php
echo"
	<div class='lightbox'>
		<div class='lightbox_cont'>
			<img src=''>
		</div>
	</div>
";
?>
	<script>
		$(function(){
			$('.imgbox').click(function(){
				var url = $(this).children('img').attr('src');
				$('.lightbox_cont').children('img').attr('src',url);
				$('.lightbox').fadeIn().css('display','block');	
			});
			$('.lightbox').click(function(){
				$(this).fadeOut().css('display','none');
			});
		});
	</script>