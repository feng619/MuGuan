
<?php
echo"
<div class='login_outer'>
	<div class='login_wrapper'>
		<div class='login_close'></div>
		<div class='content'>

			<div class='login'>
				<h3 class='login_title'>會員登入</h3>
				<form action='#'>
					<div class='log_box'>
					    <label for='id'>帳號</label>
					    <input type='text' name='id'>
					</div>
					<div class='log_box'>
					    <label for='psw'>密碼</label>
					    <input type='password' name='psw'>
					</div>
					<div class='btn_wrapper'>
						<a class='grey_btn'>忘記密碼</a>
						<input type='submit' class='blue_btn' value='登入'>
					</div>
				</form>
				<a class='green_btn'>以 Guest 身分登入</a>
			</div>
			<div class='sign'>
				<h3 class='login_title'>加入會員</h3>
				<form action='#'>
					<div class='log_box'>
					    <label for='mail'>信箱</label>
					    <input type='email' name='mail'>
					</div>
					<div class='log_box'>
					    <label for='psw'>密碼</label>
					    <input type='password' name='psw'>
					</div>
					<div class='log_box'>
					    <label for='psw2'>再次確認密碼</label>
					    <input type='password' name='psw2'>
					</div>
					<div class='btn_wrapper'>
						<a class='grey_btn'>會員規章</a>
						<input type='submit' class='yellow_btn' value='註冊'>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
";
?>

<script>
		$(function(){
			$('.login_close').click(function(){
				$(".login_outer").fadeOut().css("display", "none");
			});
			$('.memb').click(function(){
				$(".login_outer").fadeIn().css("display", "block");
				$(".login_close:before").css("transform", "rotateZ(-45deg)");
			});

		});
</script>
