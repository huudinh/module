<?php
    include(locate_template("Module/Post/sidebar_1_0_0/css/sidebar_1_0_0_css.php"));
?>
<div class="sidebar_1_0_0">
<?php
	foreach( $field as $key2 => $value):  
		foreach( $value as $key3 => $list):

			if( $list['acf_fc_layout'] == 'sidebar_title' ):
				$title = $list['title'];
				echo'
					<div class="sidebar_1_0_0__title2">
						'.$title.'
					</div>
				';
				// End Tieu De

			elseif( $list['acf_fc_layout'] == 'sidebar_title2' ):
				$title = $list['title'];
				echo'
					<div class="sidebar_1_0_0__title">
						'.$title.'
					</div>
				';
				// End Tieu De 2

			elseif( $list['acf_fc_layout'] == 'sidebar_sv' ):
				$content = $list['content'];
				echo'
					<div class="sidebar_1_0_0__list" id="sidebar_1_0_0__list">'.$content.'</div>
				';
			// End List Dich Vu

			elseif( $list['acf_fc_layout'] == 'sidebar_new' ):
				$sidebar_new_list = $list['content'];
				echo '
					<div class="sidebar_1_0_0__newsOther">
					<ul>
				';
				foreach($sidebar_new_list as $post):
					setup_postdata($post);
					$link = get_permalink();
					$title = get_the_title();
					$img = get_the_post_thumbnail_url();
					$public =  $post->post_status;

					if ($public == 'publish'):
						echo'
							<li>
								<div class="sidebar_1_0_0__newsOther__pic">
									<a href="'.$link.'"><img width="61" height="61" src="/rs/?w=60&h=60&src='.$img.'" alt="'.$title.'"></a>
								</div>
								<div class="sidebar_1_0_0__newsOther__des">
									<h3 class="sidebar_1_0_0__newsOther__title">
										<a href="'.$link.'">'.$title.'</a>
									</h3>
								</div>
							</li>
						';
					endif;
				endforeach;
				wp_reset_postdata(); 

				echo '</ul></div>';
				// End Bai Viet Tu Chon	

			elseif( $list['acf_fc_layout'] == 'sidebar_moi' ):
				echo '
					<div class="sidebar_1_0_0__newsOther">
					<ul>
				';
				 
				$args = array( 
					'post_status'=>'publish',
					'post_type' => 'post', 
					'posts_per_page' => 5,
					'order' => 'DESC',
					'cat' => $category_id,
					'category_name' => array('Latest News','News')  
				);

				$loop = new WP_Query( $args );
				if($loop->have_posts()):
					$tieuDePost = get_the_title();	

				
					while ( $loop->have_posts() ) : 
						$loop->the_post();
						$kim='';
						$i++;
						$link = get_permalink($post->ID);
						$title = get_the_title($post->ID);
						$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'thumbnail');
						$img=($kim[0]!='')?'/rs/?w=100&h=100&src='.$kim[0]:'/rs/?w=100&h=100&src='.catch_that_image($post->ID);
						if ($tieuDePost != $title):
							echo'
								<li>
									<div class="sidebar_1_0_0__newsOther__pic">
										<a href="'.$link.'"><img width="61" height="61" src="/rs/?w=60&h=60&src='.$img.'" alt="'.$title.'"></a>
									</div>
									<div class="sidebar_1_0_0__newsOther__des">
										<h3 class="sidebar_1_0_0__newsOther__title">
											<a href="'.$link.'">'.$title.'</a>
										</h3>
									</div>
								</li>
							';
						endif;
					endwhile;
				endif; 
				wp_reset_postdata(); 



				echo '
					</div>
					</ul>
				';
			endif;
		endforeach;
	endforeach;
?>

	<div id="stick">
		<?php include(locate_template('Module/Post/regist_1_0_1/regist_1_0_1.php')); ?>
	</div>
</div>
	