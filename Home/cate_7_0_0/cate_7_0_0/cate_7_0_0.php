    <style>
        
        .cate_1_0_1__content ul {
			padding-left: 0;
			list-style: none
		}

		.cate_1_0_1__content li {
			display: flex;
			align-items: flex-start;
			margin-bottom: 20px;
			padding-bottom: 20px;
			position: relative;
			overflow: hidden
		}

		.cate_1_0_1__content li::before {
			content: '';
			background: #EF4324;
			width: 220px;
			height: 2px;
			position: absolute;
			left: 0;
			bottom: 0
		}

		.cate_1_0_1__content li::after {
			content: '';
			background: #00A6DF;
			width: 100%;
			height: 1px;
			position: absolute;
			left: 220px;
			bottom: 0
		}

		.cate_1_0_1__contentPic {
			width: 220px
		}

		.cate_1_0_1__contentPic img {
			width: 100%;
			height: 150px
		}

		.cate_1_0_1__contentBody {
			flex: 1;
			padding-left: 20px
		}

		.cate_1_0_1__contentTitle {
			font-weight: 600;
			color: #004689;
			font-size: 17px
		}

		.cate_1_0_1__contentDesc {
			font-size: 13px;
			margin: 5px 0 5px;
			text-align: justify
		}

		.cate_1_0_1__contentMore {
			padding-top: 10px
		}

		.cate_1_0_1__contentMore a {
			font-size: 11px;
			background: #00A6DF;
			color: #fff;
			border-radius: 30px;
			padding: 5px 10px 5px 20px
		}

		@media (max-width: 1024px) {
			.cate_1_0_1__contentTitle a {
				font-size: 14px
			}
		}

		@media (max-width: 414px) {
			.cate_1_0_1__content li {
				flex-wrap: wrap
			}

			.cate_1_0_1__content li::before {
				width: 100px
			}

			.cate_1_0_1__content li::after {
				left: 100px
			}

			.cate_1_0_1__contentDesc {
				height: 55px;
				overflow: hidden;
				text-align: left;
				font-size: 12px
			}

			.cate_1_0_1__contentBody {
				padding-left: 10px
			}

			.cate_1_0_1__contentPic {
				width: 100px
			}

			.cate_1_0_1__contentPic img {
				height: 70px
			}

			.cate_1_0_1__contentTitle {
				line-height: 18px
			}

			.cate_1_0_1__contentTitle a {
				font-size: 12px
			}

			.cate_1_0_1__contentMore {
				padding-top: 0
			}
		}

		@media (max-width: 375px) {
			.cate_1_0_1__content li::before {
				width: 120px
			}

			.cate_1_0_1__content li::after {
				left: 120px
			}

			.cate_1_0_1__contentPic {
				width: 120px
			}

			.cate_1_0_1__contentPic img {
				height: auto
			}

			.cate_1_0_1__contentTitle {
				font-size: 15px
			}
		}

		@media (max-width: 320px) {
			.cate_1_0_1__contentPic {
				width: 100px
			}

			.cate_1_0_1__contentPic img {
				height: auto
			}

			.cate_1_0_1__contentTitle {
				font-size: 15px
			}
		}

		/*# sourceMappingURL=../maps/cate.css.map */
	</style>
	

	<div class="cate_1_0_1">
		<div class="cate_1_0_1__content">
			<ul>

				<?php

					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							global $post; 
								$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
								$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
								echo'<li>';
								if($kim):
									echo'
										<div class="cate_1_0_1__contentPic">
											<a href="'.get_permalink($post->ID).'"><img src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
										</div>
									';
								endif;
								echo '
										<div class="cate_1_0_1__contentBody">
											<h2 class="cate_1_0_1__contentTitle"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></h2>
											<div class="cate_1_0_1__contentDesc">'.get_the_excerpt($post->ID).'</div>
											<div class="cate_1_0_1__contentMore"><a class="btn" href="'.get_permalink($post->ID).'"> Xem tiếp <i class="icon-angle-double-right"></i></a></div>
										</div>
									';
								echo '</li>';
						endwhile;
					endif;

				?>
				
			</ul>
			<!-- Pagination -->
			<?php get_template_part('module/pagination_1_0_0/pagination_1_0_0'); ?>
			<!-- Pagination -->
		</div>
	</div>
