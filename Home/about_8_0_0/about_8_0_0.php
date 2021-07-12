<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/about_5_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			.about_5_0_0 {
			padding: 30px 0;
			}
			.about_5_0_0__title {
			text-transform: uppercase;
			font-size: 24px;
			text-align: center;
			color: #222222;
			padding: 0;
			margin: 0 0 20px;
			}
			.about_5_0_0__line {
			width: 30%;
			margin: 15px auto 40px;
			position: relative;
			border-top: 1px solid #d8d8d8;
			}
			.about_5_0_0__line::before {
			width: 50%;
			margin: -3px auto 0;
			border-top: 4px solid #00597e;
			display: block;
			content: "";
			}
			.about_5_0_0 .row {
			margin: 0 -20px;
			}
			.about_5_0_0 .row > div {
			padding: 0 20px;
			}
			.about_5_0_0__item {
			background: #d6eeff;
			text-align: center;
			padding: 30px;
			height: 100%;
			}
			.about_5_0_0__tt {
			padding: 20px 0 30px;
			display: block;
			text-align: center;
			font-size: 16px;
			display: block;
			font-weight: 600;
			text-transform: uppercase;
			}
			.about_5_0_0 p {
			text-align: justify;
			margin: 0;
			}

			@media (max-width: 1024px) {
			.about_5_0_0__line {
				width: 35%;
				margin: 15px auto 30px;
			}
			.about_5_0_0__line::before {
				width: 30%;
			}
			.about_5_0_0 .row {
				margin: 0 -5px;
			}
			.about_5_0_0 .row > div {
				padding: 0 5px;
			}
			}
			@media (max-width: 812px) {
			.about_5_0_0__tt {
				font-size: 13px;
			}
			}
			@media (max-width: 414px) {
			.about_5_0_0__title {
				font-size: 18px;
			}
			.about_5_0_0__line {
				width: 50%;
				margin: 15px auto 20px;
			}
			.about_5_0_0__line::before {
				width: 40%;
			}
			.about_5_0_0_item {
				margin: 1em 10px;
				padding: 20px 10px;
			}
			.about_5_0_0-tt {
				text-align: justify;
			}
			}

			/*# sourceMappingURL=about_5_0_0.css.map */

		</style>
		';
		add_action('wp_footer', 'about_5_0_0');
		function about_5_0_0(){
			echo '
			';        
		
		};
	}
?>
<section class="about_5_0_0">
	<div class="container">
		<div class="about_5_0_0__title">
			<?php echo' '.$field['about_title'].''?>
		</div>
		<div class="about_5_0_0__line"></div>
			<div class="row">
				<?php
					$rows = $field["about_ct"];
					foreach($rows as $row):
						echo'
							<div class="col-lg-4 col-12 col-md-4 ">
								<a href="'.$row['about_link'].'">
									<div class="about_5_0_0__item">
										<div class="about_5_0_0__pic">
											<img src="'.$row['about_img'].'">
										</div>
										<div class="about_5_0_0__tt">
											'.$row['about_tt'].'
										</div>
										<p>'.$row['about_nd'].'</p>
									</div>
								</a>
							</div>
						';
					endforeach;
				?>
			</div>
		</div>
	</div>
</section>
 
