<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/news_5_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			.news_5_0_0 {
				padding: 30px 0;
				}
				.news_5_0_0__title {
				font-size: 24px;
				text-align: left;
				}
				.news_5_0_0__title__line {
				margin: 0;
				border-color: #fff;
				width: 258px;
				height: 35px;
				position: relative;
				}
				.news_5_0_0__title__line::before {
				border-color: #ffd4a5;
				width: 160px;
				margin: 0 auto;
				border-top: 3px solid #ffd4a5;
				position: absolute;
				left: 0;
				top: -2px;
				content: "";
				}
				.news_5_0_0__news {
				padding: 0 0 15px;
				}
				.news_5_0_0__news__ct {
				padding: 20px 20px;
				flex: 1;
				}
				.news_5_0_0__flex {
				display: flex;
				}
				.news_5_0_0__ct {
				padding: 15px 0px;
				font-size: 15px;
				text-transform: uppercase;
				color: #000000;
				}
				.news_5_0_0__link a {
				color: #7798ce;
				text-decoration: underline;
				font-weight: bold;
				}

				@media (max-width: 1024px) {
				.news_5_0_0__video img {
					max-width: 100%;
				}
				.news_5_0_0__title {
					text-align: center;
					font-size: 17px;
				}
				.news_5_0_0__title__line {
					margin: 0 auto;
					width: 145px;
				}
				.news_5_0_0__news__ct {
					padding: 10px 20px;
				}
				}
				@media (max-width: 812px) {
				.news_1_0_0__newsAction {
					width: 50%;
				}
				.news_1_0_0__newsAction__title {
					text-align: left;
				}
				.news_1_0_0__newsAction__title::after {
					left: 0px;
					width: 200px;
				}
				.news_1_0_0__newsAction__title h2 {
					font-size: 20px;
				}
				.news_1_0_0__newsQues {
					width: 50%;
				}
				.news_1_0_0__newsQues__title {
					text-align: left;
				}
				.news_1_0_0__newsQues__title::after {
					left: 0px;
					width: 200px;
				}
				.news_1_0_0__newsQues__title h2 {
					font-size: 20px;
				}
				.news_1_0_0__newsQues__box {
					margin-top: 50px;
				}
				.news_1_0_0__newsClip__title {
					text-align: left;
				}
				.news_1_0_0__newsClip__title::after {
					left: 0px;
					width: 200px;
				}
				.news_1_0_0__newsClip__title h2 {
					font-size: 20px;
				}
				.news_1_0_0__newsClip__box {
					display: block;
					justify-content: space-between;
					padding: 0;
				}
				.news_1_0_0__newsClip__item {
					margin-bottom: 20px;
				}
				.news_1_0_0__newsClip__item img {
					width: 100%;
				}
				}
				@media (max-width: 414px) {
				.news_5_0_0__title__line__line {
					width: 160px;
				}
				.news_5_0_0__title__line::before {
					left: 0;
				}
				}
				@media (max-width: 320px) {
				.news_5_0_0__news__ct {
					padding: 5px 20px;
				}
				}

				/*# sourceMappingURL=news_5_0_0.css.map */

		</style>
		';
	}
?>
<section class="news_5_0_0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h1 class="news_5_0_0__title">
					<?php echo $field['news_title1']; ?>
				</h1>
				<div class="news_5_0_0__title__line"></div>
				<?php
					foreach($field['content1'] as $key => $post):
						setup_postdata($post);
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						echo '
							<div class="news_5_0_0__news ">
								<a href="'.$link.'" class="news_5_0_0__flex">
									<div>
										<img src="/rs/?w=90&h=90&src='.$img.'" alt="'.$title.'">
									</div>
									<div class="news_5_0_0__news__ct">
										'.$title.'
									</div>
								</a>
							</div>
						';
					endforeach;
					wp_reset_postdata(); 
				?>
				<div class="news_5_0_0__link">
					<?php
						$link=$field['link_all'];
					echo'
						<a href="'.$link.'">xem tất cả »</a>
						';
					?>
				</div>
			</div>
			<div class="col-lg-8">
				<h1 class="news_5_0_0__title">
					<?php echo $field['news_title2']; ?>
				</h1>
				<div class="news_5_0_0__title__line"></div>
				<?php
					$content = $field['content'];
					$data = explode("\n",  $content);
					echo'
						<div class="news_5_0_0__video">
							<a class="modal-clip" data-video-id="'.$data[1].'">
								<img src="'.$data[0].'" alt="'.$content['title'].'" class="aligncenter">
							</a>
						</div>
						<div class="news_5_0_0__ct">
						'.$data[2].'
						</div>
					';
				?>
				
			</div>
		</div>
	</div>
</section>

