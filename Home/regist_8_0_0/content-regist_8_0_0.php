<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/regist_4_0_0';
	if($check == 0){
		$css_inline .= '
			<style>
				.regist_4_0_0__title h2 {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
				}
				
				.regist_4_0_0 {
					padding: 30px 0;
					background: #2C4B90;
				}
				
				.regist_4_0_0__title h2 {
					text-transform: uppercase;
					color: #fff;
					text-align: center;
					font-weight: 600;
					font-size: 28px;
					margin: 0;
				}
				
				.regist_4_0_0__title .sub-title {
					margin: 10px 190px;
					text-align: center;
					color: #fff;
				}
				
				.regist_4_0_0__title .sub-title span {
					color: #E49D38;
				}
				
				.regist_4_0_0__box {
					margin-top: 30px;
				}
				
				.regist_4_0_0__box .form {
					width: 80%;
					margin: 0 auto;
				}
				
				.regist_4_0_0__box .form input {
					background: #D4DBE9;
					border-radius: 5px;
					border: none;
					padding: 8px 10px;
					width: 45%;
					margin: 5px 10px;
					outline: none;
				}
				
				.regist_4_0_0__box .form input::placeholder {
					color: #273131;
				}
				
				.regist_4_0_0__box .form select {
					background: #D4DBE9;
					border-radius: 5px;
					border: none;
					padding: 9px 10px;
					width: 45%;
					margin: 5px 10px;
					outline: none;
				}
				
				.regist_4_0_0__box .form .regist {
					margin-top: 20px;
					text-align: center;
				}
				
				.regist_4_0_0__box .form .regist button {
					padding: 10px 50px;
					background: #D2A327;
					text-transform: uppercase;
					color: #fff;
					font-weight: 600;
					border: none;
					border-radius: 5px;
					cursor: pointer;
					transition: all 0.3s;
				}
				
				.regist_4_0_0__box .form .regist button:hover {
					background: #F69679;
					transition: all 0.3s;
				}
				
				@media (max-width: 1440px) {
					.regist_4_0_0__box {
						margin-top: 15px;
					}
				}
				
				@media (max-width: 812px) {
					.regist_4_0_0__title .sub-title {
						margin: 10px 0;
					}
					.regist_4_0_0__box .form {
						width: 100%;
					}
				}
				
				@media (max-width: 414px) {
					.regist_4_0_0__title h2 {
						font-size: 22px;
					}
					.regist_4_0_0__title .sub-title {
						font-size: 12px;
					}
					.regist_4_0_0__box .form input {
						width: 100%;
						margin: 5px 0;
						border-radius: 10px;
					}
					.regist_4_0_0__box .form select {
						width: 100%;
						margin: 5px 0;
						border-radius: 10px;
					}
				}
				
				@media (max-width: 360px) {
					.regist_4_0_0__title h2 {
						font-size: 20px;
					}
				}
				/*# sourceMappingURL=regist_4_0_0.css.map */
			</style>
		';
		add_action('wp_footer', 'regist_4_0_0');
		function regist_4_0_0(){
			echo'
				
			';
		}
	}
?>

<div class="regist_4_0_0">
	<div class="container">
		<div class="regist_4_0_0__title">
			<h2><?php echo ''.$field['title'].''?></h2>
			<div class="sub-title">
			<?php echo ''.$field['sub'].''?>
			</div>
		</div>
		<div class="regist_4_0_0__box">
			<div class="form">
				<input type="text" required placeholder="Họ tên (*)">
				<input type="text" placeholder="Email">
				<input type="text" required placeholder="Số điện thoại (*)">
				<select>
					<option value="">Khóa học</option>
					<?php
						foreach($field['course_info'] as $key => $value):
							$data = explode("\n",  $value["course_name"]);
							echo'
							<option value="">'.$data[0].'</option>
							';
						endforeach;
					?>
				</select>
				<div class="regist">
					<button>Đăng ký ngay</button>
				</div>
			</div>
		</div>
	</div>
</div>




 